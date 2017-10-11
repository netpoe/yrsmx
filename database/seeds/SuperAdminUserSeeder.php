<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use Faker\Factory as FakerFactory;

use App\Model\{
    UserAdapter as User,
    LuUserRole,
    User\UserInfoAdapter as UserInfo
};

class SuperAdminUserSeeder extends Seeder
{
    const PWD = 'test123';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $email = 'admin' . rand(1, 999) . '@yours.mx';

        $user = User::create([
            'email' => $email,
            'password' => Hash::make(self::PWD),
            'role_id' => LuUserRole::SUPER_ADMIN,
            ]);

        UserInfo::create([
            'user_id' => $user->id,
            ]);
    }
}
