<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RelProductsGallery extends Model
{
    protected $table = 'rel_products_gallery';

    public function getFileSrcAttribute($fileSrc)
    {
        $content = file_get_contents($fileSrc);

        $type = 'image/jpg';

        return 'data:image/' . $type . ';base64,' . base64_encode($content);
    }
}
