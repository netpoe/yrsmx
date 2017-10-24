<?php

use Illuminate\Database\Seeder;
use App\Model\Dictionary\DictUserRole;

class DictUserRolesSeeder extends Seeder
{
    const TABLE = 'dict_user_role';

    const INSERT = [
        [
            'role' => DictUserRole::SUPER_ADMIN,
        ],
        [
            'role' => DictUserRole::ADMIN,
        ],
        [
            'role' => DictUserRole::CLIENT,
        ],
        [
            'role' => DictUserRole::DEALER,
        ],
        [
            'role' => DictUserRole::DISTRIBUTOR,
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
