<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate(
            [
                'email'    => 'admin@tenth-share.com',
                'is_admin' => 1,
            ],
            [
                'name'         => 'Administrator',
                'username'     => 'tenth-share',
                'email'        => 'admin@tenth-share.com',
                'password'     => bcrypt('password'),
                'phone_number' => '1234567890',
                'is_admin'     => 1,
                'is_active'    => 1,
            ]
        );
    }
}
