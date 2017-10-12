<?php

use Illuminate\Database\Seeder;

use App\Model\Dictionary\LuAddressCountriesAdapter;

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
            'country_id' => LuAddressCountriesAdapter::MEXICO,
            'value' => 'Ciudad de México',
        ]);
    }
}
