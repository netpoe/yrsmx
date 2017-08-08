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
        $insert = [
            [
                'category' => LuProductCategories::getOptionsValue(LuProductCategories::TYPE)
            ],
            [
                'category' => LuProductCategories::getOptionsValue(LuProductCategories::BODY_PART)
            ],
            [
                'category' => LuProductCategories::getOptionsValue(LuProductCategories::FIT)
            ],
        ];

        foreach ($insert as $values) {
            DB::table(self::TABLE)->insert($values);
        }
    }
}
