<?php

use Illuminate\Database\Seeder;
use App\Model\LuProductCategoriesAdapter as LuProductCategories;

class LuProductCategoriesSeeder extends Seeder
{
    const TABLE = 'lu_product_categories';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (LuProductCategories::OPTIONS as $option) {
            $insert = [
                'name' => $option['value'],
            ];

            DB::table(self::TABLE)->insert($insert);
        }
    }
}
