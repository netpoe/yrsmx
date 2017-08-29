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
    RelProductsGalleryAdapter as ProductsGallery,
    ProductsAdapter as Product,
    RelProductsOutfitAdapter as ProductsOutfit,
    LuProductSubcategoriesAdapter as LuProductSubcategories,
    LuProductCategoriesAdapter as LuProductCategories,
    LuProductSubattributesAdapter as LuProductSubattributes,
    LuProductAttributesAdapter as LuProductAttributes,
    RelProductsCategoriesAdapter as RelProductsCategories,
    RelProductsAttributesAdapter as RelProductsAttributes
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

        $product->subattributes->each(function($subattribute) use (&$attributes) {
            $attributes[$subattribute->attribute->name][] = $subattribute->value;
        });

        $categories = [];

        $product->subcategories->each(function($subcategory) use (&$categories) {
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
        Product $product,
        RelProductsAttributes $relProductsAttributes,
        RelProductsCategories $relProductsCategories)
    {
        if ($request->input('categories')) {
            foreach ($request->input('categories') as $categoryId => $subcategoryId) {
                RelProductsCategories::create([
                    'product_id' => $product->id,
                    'category_id' => $categoryId,
                    'subcategory_id' => $subcategoryId,
                    ]);
            }
        }

        if ($request->input('attributes')) {
            foreach ($request->input('attributes') as $attributeId => $attribute) {
                foreach ($attribute as $subattributeId) {
                    RelProductsAttributes::create([
                        'product_id' => $product->id,
                        'attribute_id' => $attributeId,
                        'subattribute_id' => $subattributeId,
                        ]);
                }
            }
        }

        return redirect()->route('admin.products.show', ['product' => $product->id]);
    }

    /**
     * classify    Displays a ProductSection to set its attributes and categories configuration
     */
    public function classify(Product $product)
    {
        $categories = [
            'type' => (new ProductCategory)->get(LuProductCategories::TYPE),
            'lowerPartFit' => (new ProductCategory)->get(LuProductCategories::LOWER_PART_FIT),
            'upperPartFit' => (new ProductCategory)->get(LuProductCategories::UPPER_PART_FIT),
            'bodyType' => (new ProductCategory)->get(LuProductCategories::BODY_TYPE),
            'pantsFitShape' => (new ProductCategory)->get(LuProductCategories::PANTS_FIT_SHAPE),
            'pantsFitHips' => (new ProductCategory)->get(LuProductCategories::PANTS_FIT_HIPS),
            'accessories' => (new ProductCategory)->get(LuProductCategories::ACCESSORIES),
            'risk' => (new ProductCategory)->get(LuProductCategories::RISK),
            'shoes' => (new ProductCategory)->get(LuProductCategories::SHOES),
            'sizeDress' => (new ProductCategory)->get(LuProductCategories::SIZE_DRESS),
            'sizeBlouse' => (new ProductCategory)->get(LuProductCategories::SIZE_BLOUSE),
            'sizeBraBand' => (new ProductCategory)->get(LuProductCategories::SIZE_BRA_BAND),
            'sizeBraCups' => (new ProductCategory)->get(LuProductCategories::SIZE_BRA_CUPS),
            'sizeSkirt' => (new ProductCategory)->get(LuProductCategories::SIZE_SKIRT),
            'sizeShoes' => (new ProductCategory)->get(LuProductCategories::SIZE_SHOES),
            'sizePants' => (new ProductCategory)->get(LuProductCategories::SIZE_PANTS),
        ];

        $attributes = [
            'colors' => (new ProductAttribute)->get(LuProductAttributes::COLORS),
            'prints' => (new ProductAttribute)->get(LuProductAttributes::PRINTS),
            'fabrics' => (new ProductAttribute)->get(LuProductAttributes::FABRICS),
            'words' => (new ProductAttribute)->get(LuProductAttributes::WORDS),
            'jewelry' => (new ProductAttribute)->get(LuProductAttributes::JEWELRY),
            'bodyPart' => (new ProductAttribute)->get(LuProductAttributes::BODY_PART),
            'outfitType' => (new ProductAttribute)->get(LuProductAttributes::OUTFIT_TYPE),
        ];

        return view('admin.products.classify', [
            'categories' => $categories,
            'attributes' => $attributes,
            'product' => $product
        ]);
    }
}
