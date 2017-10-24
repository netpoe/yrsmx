<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service\ProductsService;
use Auth;

use App\Entities\{
    ProductCategory,
    ProductAttribute
};

use App\Model\{
    Product\ProductsGalleryAdapter as ProductsGallery,
    ProductsAdapter as Product,
    Dictionary\LuProductSubcategoriesAdapter as LuProductSubcategories,
    Dictionary\LuProductCategoriesAdapter as LuProductCategories,
    Dictionary\LuProductSubattributesAdapter as LuProductSubattributes,
    Dictionary\DictProductAttributesAdapter as DictProductAttributes
};

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
        $attributes = [];

        $product->subattributes()->each(function($subattribute) use (&$attributes) {
            $attributes[$subattribute->attribute->name][] = $subattribute->value;
        });

        $categories = [];

        $product->subcategories()->each(function($subcategory) use (&$categories) {
            $categories[$subcategory->category->name][] = $subcategory->value;
        });

        return view('admin/products/show', [
            'product' => $product,
            'attributes' => $attributes,
            'categories' => $categories,
        ]);
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

        return redirect()->route('admin.products.classify', ['product' => $product->id]);
    }

    /**
     * store    Stores a product configuration using a ProductSection
     */
    public function store(
        Request $request,
        Product $product)
    {
        if ($request->input('categories')) {
            $product->assignCategories($request->input('categories'));
        }

        if ($request->input('attributes')) {
            $product->assignAttributes($request->input('attributes'));
        }

        return redirect()->route('admin.products.show', ['product' => $product->id]);
    }

    /**
     * classify    Displays a ProductSection to set its attributes and categories configuration
     */
    public function classify(Product $product)
    {
        $categories = [
            'type' => new ProductCategory(LuProductCategories::TYPE),
            'lowerPartFit' => new ProductCategory(LuProductCategories::LOWER_PART_FIT),
            'upperPartFit' => new ProductCategory(LuProductCategories::UPPER_PART_FIT),
            'bodyType' => new ProductCategory(LuProductCategories::BODY_TYPE),
            'pantsFitShape' => new ProductCategory(LuProductCategories::PANTS_FIT_SHAPE),
            'pantsFitHips' => new ProductCategory(LuProductCategories::PANTS_FIT_HIPS),
            'accessories' => new ProductCategory(LuProductCategories::ACCESSORIES),
            'risk' => new ProductCategory(LuProductCategories::RISK),
            'shoes' => new ProductCategory(LuProductCategories::SHOES),
            'sizeDress' => new ProductCategory(LuProductCategories::SIZE_DRESS),
            'sizeBlouse' => new ProductCategory(LuProductCategories::SIZE_BLOUSE),
            'sizeBraBand' => new ProductCategory(LuProductCategories::SIZE_BRA_BAND),
            'sizeBraCups' => new ProductCategory(LuProductCategories::SIZE_BRA_CUPS),
            'sizeSkirt' => new ProductCategory(LuProductCategories::SIZE_SKIRT),
            'sizeShoes' => new ProductCategory(LuProductCategories::SIZE_SHOES),
            'sizePants' => new ProductCategory(LuProductCategories::SIZE_PANTS),
        ];

        $attributes = [
            'colors' => new ProductAttribute(DictProductAttributes::COLORS),
            'prints' => new ProductAttribute(DictProductAttributes::PRINTS),
            'fabrics' => new ProductAttribute(DictProductAttributes::FABRICS),
            'words' => new ProductAttribute(DictProductAttributes::WORDS),
            'jewelry' => new ProductAttribute(DictProductAttributes::JEWELRY),
            'bodyPart' => new ProductAttribute(DictProductAttributes::BODY_PART),
            'outfitType' => new ProductAttribute(DictProductAttributes::OUTFIT_TYPE),
        ];

        return view('admin.products.classify', [
            'categories' => $categories,
            'attributes' => $attributes,
            'product' => $product
        ]);
    }
}
