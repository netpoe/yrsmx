<?php

use Illuminate\Database\Seeder;

use App\Model\Dictionary\LuOrderStatusAdapter as LuOrderStatus;

class LuOrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (LuOrderStatus::getOptions() as $option) {
            DB::table('lu_order_status')->insert([
                'value' => $option['value'],
            ]);
        }
    }
}
