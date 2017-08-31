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
        foreach (LuProductSubattributes::SUBATTRIBUTES as $subattribute) {
            foreach ($subattribute::getOptions() as $option) {
                $insert = [
                    'attribute_id' => $subattribute::ATTRIBUTE_ID,
                    'value' => $option['value'],
                ];
                DB::table(self::TABLE)->insert($insert);
            }
        }
    }
}
