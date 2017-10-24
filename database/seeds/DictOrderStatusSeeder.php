<?php

use Illuminate\Database\Seeder;

use App\Model\Dictionary\DictOrderStatusAdapter as DictOrderStatus;

class DictOrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (DictOrderStatus::getOptions() as $option) {
            DB::table('dict_order_status')->insert([
                'value' => $option['value'],
            ]);
        }
    }
}
