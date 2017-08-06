<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service\ProductsService;
use App\Model\RelProductsGalleryAdapter as ProductsGallery;
use App\Model\ProductsAdapter as Product;
use App\Model\RelProductsOutfitAdapter as ProductsOutfit;
use Auth;

class ProductsController extends Controller
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
    public function upload(Request $request, ProductsService $ps, ProductsGallery $pg)
    {
        $files = $request->file('file');

        $storage = $ps->uploadFiles($files);

        $pg->storeUnassignedFiles($storage);

        $unassignedFiles = $pg->getUnassignedFiles();

        return $unassignedFiles;
    }

    public function getUnassignedFiles(ProductsGallery $pg)
    {
        return $pg->getUnassignedFiles();
    }

    public function getFiles(Request $request, ProductsGallery $pg)
    {
        $limit = 15;

        return $pg->getFiles($limit);
    }

    /**
     * Actualizar producto: se asignan categorías y atributos al producto creado
     * GET admin/productos/{productId}
     *
     * @return [type]
     */
    public function show(Product $product)
    {
        return view('admin/products/show', ['product' => $product]);
    }

    public function getUnassignedProducts(Request $request, Product $product)
    {
        return $product->getUnassignedProducts();
    }

    /**
     * Asignar imágenes a producto: se seleccionan las imágenes y se asignan a un producto
     * POST admin/productos/create?productImages={id,id,id,id}
     *
     * @return [type]
     */
    public function create(Request $request, ProductsGallery $pg)
    {
        $product = new Product;

        $product->uploaded_by = Auth::id();

        $product->save();

        $pg->assignProductToFiles($request->input('product-images'), $product);

        return redirect()->route('admin.products.show', ['productId' => $product->id]);
    }
}
