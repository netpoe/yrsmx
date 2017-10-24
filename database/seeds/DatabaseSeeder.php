<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LuUserRolesSeeder::class);
        $this->call(DictProductCategoriesSeeder::class);
        $this->call(DictProductSubcategoriesSeeder::class);
        $this->call(DictProductAttributesSeeder::class);
        $this->call(DictProductSubattributesSeeder::class);
        $this->call(DictAddressCountriesSeeder::class);
        $this->call(DictAddressStatesSeeder::class);
        $this->call(DictOrderStatusSeeder::class);
    }
}
