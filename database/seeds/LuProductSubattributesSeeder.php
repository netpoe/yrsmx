<?php

use Illuminate\Database\Seeder;

use App\Model\{
    LuProductSubattributesAdapter as LuProductSubattributes
};

class LuProductSubattributesSeeder extends Seeder
{
    const TABLE = 'lu_product_subattributes';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (LuProductSubattributes::OPTIONS as $option) {
            $insert = [
                'attribute_id' => $option['attribute_id'],
                'subattribute' => $option['key'],
                'description' => $option['value'],
            ];

            DB::table(self::TABLE)->insert($insert);
        }
    }
}
