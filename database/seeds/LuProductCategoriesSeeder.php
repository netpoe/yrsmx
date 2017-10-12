<?php

use Illuminate\Database\Seeder;
use App\Model\Dictionary\LuProductCategoriesAdapter as LuProductCategories;

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
        foreach (LuProductCategories::getOptions() as $option) {
            $insert = [
                'name' => $option['value'],
            ];

            DB::table(self::TABLE)->insert($insert);
        }
    }
}
