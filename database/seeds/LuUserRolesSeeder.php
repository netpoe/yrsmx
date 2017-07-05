<?php

use Illuminate\Database\Seeder;
use App\Model\LuUserRole;

class LuUserRolesSeeder extends Seeder
{
    const TABLE = 'lu_user_roles';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(self::TABLE)->insert([
            'role' => LuUserRole::SUPER_ADMIN,
        ]);
        DB::table(self::TABLE)->insert([
            'role' => LuUserRole::ADMIN,
        ]);
        DB::table(self::TABLE)->insert([
            'role' => LuUserRole::CLIENT,
        ]);
        DB::table(self::TABLE)->insert([
            'role' => LuUserRole::DEALER,
        ]);
        DB::table(self::TABLE)->insert([
            'role' => LuUserRole::DISTRIBUTOR,
        ]);
    }
}
