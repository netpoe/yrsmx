<?php

use Illuminate\Database\Seeder;
use App\Model\Dictionary\DictProductCategoriesAdapter as DictProductCategories;

class DictProductCategoriesSeeder extends Seeder
{
    const TABLE = 'dict_product_categories';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (DictProductCategories::getOptions() as $option) {
            $insert = [
                'name' => $option['value'],
            ];

            DB::table(self::TABLE)->insert($insert);
        }
    }
}
