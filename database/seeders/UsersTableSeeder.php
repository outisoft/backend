<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $users = [
          [
              'id'             => 1,
              'name'           => 'Admin',
              'apePat'         => 'admin',
              'apeMat'         => 'admin',
              'email'          => 'admin@admin.com',
              'password'       => bcrypt('admin'),
              'remember_token' => null,
          ],
          [
              'id'             => 2,
              'name'           => 'User',
              'apePat'         => 'user',
              'apeMat'         => 'user',
              'email'          => 'user@user.com',
              'password'       => bcrypt('user'),
              'remember_token' => null,
          ],
        ];

      User::insert($users);
    }
}
