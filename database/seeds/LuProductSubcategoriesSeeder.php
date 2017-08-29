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
        foreach (LuProductSubcategories::OPTIONS as $option) {
            $insert = [
                'category_id' => $option['category_id'],
                'value' => $option['value'],
            ];

            DB::table(self::TABLE)->insert($insert);
        }
    }
}
