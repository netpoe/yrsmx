<?php

use Illuminate\Database\Seeder;
use App\Model\LuUserRole;

class LuUserRolesSeeder extends Seeder
{
    const TABLE = 'lu_user_roles';

    const INSERT = [
        [
            'role' => LuUserRole::SUPER_ADMIN,
        ],
        [
            'role' => LuUserRole::ADMIN,
        ],
        [
            'role' => LuUserRole::CLIENT,
        ],
        [
            'role' => LuUserRole::DEALER,
        ],
        [
            'role' => LuUserRole::DISTRIBUTOR,
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::INSERT as $values) {
            DB::table(self::TABLE)->insert($values);
        }
    }
}
