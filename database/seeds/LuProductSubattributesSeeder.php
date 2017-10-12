<?php

use Illuminate\Database\Seeder;

use App\Model\{
    Dictionary\LuProductAttributesAdapter as LuProductAttributes
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
        foreach (LuProductAttributes::getOptions() as $attribute) {
            $subattribute = $attribute['subattribute'];
            foreach ($subattribute::getOptions() as $option) {
                $insert = [
                    'attribute_id' => $subattribute::ATTRIBUTE_ID,
                    'value' => $option['value'],
                    'key' => $option['key'],
                ];
                DB::table(self::TABLE)->insert($insert);
            }
        }
    }
}
