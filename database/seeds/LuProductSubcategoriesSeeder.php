<?php

use Illuminate\Database\Seeder;

use App\Model\{
    Dictionary\LuProductCategoriesAdapter as LuProductCategories
};

class LuProductSubcategoriesSeeder extends Seeder
{
    const TABLE = 'lu_product_subcategories';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (LuProductCategories::getOptions() as $category) {
            $subcategory = $category['subcategory'];
            foreach ($subcategory::getOptions() as $option) {
                $insert = [
                    'category_id' => $subcategory::CATEGORY_ID,
                    'value' => $option['value'],
                    'key' => $option['key'],
                ];
                DB::table(self::TABLE)->insert($insert);
            }
        }
    }
}
