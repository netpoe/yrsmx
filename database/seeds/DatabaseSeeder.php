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
        $this->call(LuProductCategoriesSeeder::class);
        $this->call(LuProductSubcategoriesSeeder::class);
        $this->call(LuProductAttributesSeeder::class);
        $this->call(LuProductSubattributesSeeder::class);
        $this->call(DictAddressCountriesSeeder::class);
        $this->call(LuAddressStatesSeeder::class);
        $this->call(LuOrderStatusSeeder::class);
    }
}
