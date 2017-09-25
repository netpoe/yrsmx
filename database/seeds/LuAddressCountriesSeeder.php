<?php

use Illuminate\Database\Seeder;

use App\Model\LuAddressCountriesAdapter;

class LuAddressCountriesSeeder extends Seeder
{
    const TABLE = 'lu_address_countries';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(self::TABLE)->insert([
            'value' => LuAddressCountriesAdapter::OPTIONS[LuAddressCountriesAdapter::MEXICO]['value'],
        ]);
    }
}
