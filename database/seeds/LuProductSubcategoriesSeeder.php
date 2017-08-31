<?php

use Illuminate\Database\Seeder;

use App\Model\{
    LuProductSubcategoriesAdapter as LuProductSubcategories
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
        foreach (LuProductSubcategories::SUBCATEGORIES as $subcategory) {
            foreach ($subcategory::getOptions() as $option) {
                $insert = [
                    'category_id' => $subcategory::CATEGORY_ID,
                    'value' => $option['value'],
                ];
                DB::table(self::TABLE)->insert($insert);
            }
        }
    }
}
