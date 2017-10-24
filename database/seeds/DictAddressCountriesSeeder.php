<?php

use Illuminate\Database\Seeder;

use App\Model\Dictionary\DictAddressCountriesAdapter;

class DictAddressCountriesSeeder extends Seeder
{
    const TABLE = 'dict_address_countries';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(self::TABLE)->insert([
            'value' => DictAddressCountriesAdapter::OPTIONS[DictAddressCountriesAdapter::MEXICO]['value'],
        ]);
    }
}
