<?php

use Illuminate\Database\Seeder;

use App\Model\Dictionary\DictAddressCountriesAdapter;

class LuAddressStatesSeeder extends Seeder
{
    const TABLE = 'lu_address_states';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(self::TABLE)->insert([
            'country_id' => DictAddressCountriesAdapter::MEXICO,
            'value' => 'Ciudad de México',
        ]);
    }
}
