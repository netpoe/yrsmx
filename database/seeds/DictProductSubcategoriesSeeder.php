<?php

use Illuminate\Database\Seeder;

use App\Model\{
    Dictionary\DictProductCategoriesAdapter as DictProductCategories
};

class DictProductSubcategoriesSeeder extends Seeder
{
    const TABLE = 'dict_product_subcategories';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (DictProductCategories::getOptions() as $category) {
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
