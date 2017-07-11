<?php

namespace App\Model;

class RelProductsGalleryAdapter extends RelProductsGallery
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
}
