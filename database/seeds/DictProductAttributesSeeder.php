<?php

use Illuminate\Database\Seeder;
use App\Model\Dictionary\DictProductAttributesAdapter as DictProductAttributes;

class DictProductAttributesSeeder extends Seeder
{
    const TABLE = 'dict_product_attributes';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (DictProductAttributes::getOptions() as $option) {
            $insert = [
                'name' => $option['value'],
            ];

            DB::table(self::TABLE)->insert($insert);
        }
    }
}
