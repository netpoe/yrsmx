<?php

use Illuminate\Database\Seeder;
use App\Model\LuProductAttributesAdapter as LuProductAttributes;

class LuProductAttributesSeeder extends Seeder
{
    const TABLE = 'lu_product_attributes';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (LuProductAttributes::OPTIONS as $option) {
            $insert = [
                'name' => $option['value'],
            ];

            DB::table(self::TABLE)->insert($insert);
        }
    }
}
