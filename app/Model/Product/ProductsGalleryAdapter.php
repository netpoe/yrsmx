<?php

namespace App\Model\Product;

class ProductsGalleryAdapter extends ProductsGallery
{
    public function storeUnassignedFiles(Array $storage = [])
    {
        foreach ($storage as $file) {
            $filesrc = $file['file_src'];

            $filename = $file['filename'];

            $imageExists = !$this->where('file_src', $filesrc)->get()->isEmpty();

            if ($imageExists) {
                $this->where('file_src', $filesrc)->update([
                    'file_src' => $filesrc,
                    'filename' => $filename,
                    'updated_at' => new \DateTime,
                    ]);
            } else {
                $self = new static;

                $self->file_src = $filesrc;

                $self->filename = $filename;

                $self->save();
            }
        }

        return $this;
    }

    public function getUnassignedFiles()
    {
        return $this->where('product_id', null)->get();
    }

    public function getFiles(Int $limit = null)
    {
        return $this->whereNotNull('product_id')->limit($limit)->get();
    }

    public function assignProductToFiles(Array $fileIds = [], ProductsAdapter $product)
    {
        $this->whereIn('id', $fileIds)
            ->update([
                'product_id' => $product->id,
                'updated_at' => new \DateTime
                ]);

        return $this;
    }
}
