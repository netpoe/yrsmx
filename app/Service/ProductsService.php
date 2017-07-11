<?php

namespace App\Service;

use Illuminate\Support\Facades\Storage;

class ProductsService
{
    protected $aws;

    protected $productsCatalogBucket = 'prod-products-catalog';

    protected $productsCatalogDisk = 'prod-products-catalog';

    public function __construct(\Aws\Sdk $aws)
    {
        $this->aws = $aws;
    }

    public function setProductsCatalogBucket(String $bucket)
    {
        $this->productsCatalogBucket = $bucket;

        return $this;
    }

    public function getProductsCatalogBucket(): String
    {
        return $this->productsCatalogBucket;
    }

    public function setProductsCatalogDisk(String $disk)
    {
        $this->productsCatalogDisk = $disk;

        return $this;
    }

    public function getProductsCatalogDisk(): String
    {
        return $this->productsCatalogDisk;
    }

    /**
     *  getDocumentUploadUrls
     *
     *  creates a list of url so you can upload multiple files per
     *  document. After uploading the files it is requires for you
     *  to confirm the uploads.
     *
     *  @param Array $fileNames, the names of the files make the number of urls to generate
     *
     *  @return Array list of URLs to use with PUT request to upload files to s3.
     */
    public function getProductUploadUrls(Array $fileNames = []): Array
    {
        $s3Client = $this->aws->createS3();

        $bucket = $this->getProductsCatalogBucket();

        $expire = '+20 minutes';

        $date = date('Y-m-d');

        $result = [];

        foreach ($fileNames as $name) {
            $key = "$date/$name";

            $cmd = $s3Client->getCommand('PutObject', [
                'Bucket' => $bucket,
                'Key'    => $key
            ]);

            $request = $s3Client->createPresignedRequest($cmd, $expire);

            $result[] = [
                'url' => (string) $request->getUri(),
                'reference' => "{$bucket}/{$key}"
            ];
        }

        return $result;
    }

    public function uploadFiles(Array $files)
    {
        $info = [];

        $date = date('Y-m-d');

        $env = getenv('APP_ENV');

        if ($env == 'local' || $env == 'dev') {
            $this->setProductsCatalogDisk('dev-products-catalog');
        }

        $disk = $this->getProductsCatalogDisk();

        $storage = Storage::disk($disk);

        foreach ($files as $index => $file) {
            $filename = $file->getClientOriginalName();

            $name = "$date/{$filename}";

            $content = file_get_contents($file);

            $storage->put($name, $content);

            $type = $file->getClientMimeType();

            $info[] = [
                'filename' => $filename,
                'file_src' => ($storage->exists($name)) ? $storage->url($name) : null,
                'base64' => 'data:image/' . $type . ';base64,' . base64_encode($content)
            ];
        }

        return $info;
    }
}
