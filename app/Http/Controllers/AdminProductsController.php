<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\ProductsServiceProvider;

class AdminProductsController extends Controller
{
    /**
     * Catálogo: muestra los productos en stock con imágenes. Hay un filtro especial que muestra las imágenes sin productos asignados
     * GET admin/productos/catalogo
     *
     * @return [type]
     */
    public function catalog()
    {
        return view('admin/products/catalog');
    }

    /**
     * Actualizar catálogo: se pueden subir imágenes en lote, después, se seleccionan las imágenes y se asignan a un producto con sus categorías y atributos
     * POST admin/productos/catalogo/upload
     *
     * @return Object json
     */
    public function upload(ProductsServiceProvider $psp)
    {
        print_r($psp->get()); exit;
    }

    /**
     * Actualizar producto: se asignan categorías y atributos al producto creado
     * GET admin/productos/{productId}
     *
     * @return [type]
     */
    public function product($productId)
    {
        return view('admin/products/product');
    }

    /**
     * Asignar imágenes a producto: se seleccionan las imágenes y se asignan a un producto
     * POST admin/productos/create?productImages={id,id,id,id}
     *
     * @return [type]
     */
    public function create()
    {
        return redirect()->route('admin.products.product', ['productId' => 123]);
    }
}
