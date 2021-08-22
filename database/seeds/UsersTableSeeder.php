<?php

use Illuminate\Support\Str;
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
        //
        \App\User::insert(
            [
                [
                    'first_name' => 'super',
                    'last_name' => 'admin',
                    'username' => 'superadmin',
                    'email' => 'komar.network@gmail.com',
                    'email_verified_at' => now(),
                    'password' => bcrypt('admin123456789'),
                    'profile_photo' => null,
                    'profile_bg' => null,
                    'role_users_id' => 1,
                    'is_active' => 1,
                    'contact_no' => 6285772220184,
                    'last_login_ip' => null,
                    'last_login_date' => null,
                    'remember_token' => Str::random(10),
                    'created_at' => now()
                ],
                [
                    'first_name' => 'rony',
                    'last_name' => 'karyawan',
                    'username' => 'rony karyawan',
                    'email' => 'rony@gmail.com',
                    'email_verified_at' => now(),
                    'password' => bcrypt('karyawan'),
                    'profile_photo' => null,
                    'profile_bg' => null,
                    'role_users_id' => 2,
                    'is_active' => null,
                    'contact_no' => 62888954645,
                    'last_login_ip' => null,
                    'last_login_date' => null,
                    'remember_token' => null,
                    'created_at' => now()
                ],
                [
                    'first_name' => 'dodi',
                    'last_name' => 'karyawan',
                    'username' => 'dodi karyawan',
                    'email' => 'dodi@gmail.com',
                    'email_verified_at' => now(),
                    'password' => bcrypt('karyawan'),
                    'profile_photo' => null,
                    'profile_bg' => null,
                    'role_users_id' => 2,
                    'is_active' => null,
                    'contact_no' => 62845636784,
                    'last_login_ip' => null,
                    'last_login_date' => null,
                    'remember_token' => null,
                    'created_at' => now()
                ],
                [
                    'first_name' => 'client',
                    'last_name' => null,
                    'username' => 'client',
                    'email' => 'client@gmail.com',
                    'email_verified_at' => now(),
                    'password' => bcrypt('client'),
                    'profile_photo' => null,
                    'profile_bg' => null,
                    'role_users_id' => 3,
                    'is_active' => null,
                    'contact_no' => 62855544845,
                    'last_login_ip' => null,
                    'last_login_date' => null,
                    'remember_token' => null,
                    'created_at' => now()
                ],
                [
                    'first_name' => 'manager',
                    'last_name' => null,
                    'username' => 'manager',
                    'email' => 'komarcoc23@gmail.com',
                    'email_verified_at' => now(),
                    'password' => bcrypt('manager'),
                    'profile_photo' => null,
                    'profile_bg' => null,
                    'role_users_id' => 4,
                    'is_active' => null,
                    'contact_no' => 62855544451,
                    'last_login_ip' => null,
                    'last_login_date' => null,
                    'remember_token' => null,
                    'created_at' => now()
                ],
                [
                    'first_name' => 'editor',
                    'last_name' => null,
                    'username' => 'editor',
                    'email' => 'editor@gmail.com',
                    'email_verified_at' => now(),
                    'password' => bcrypt('editor'),
                    'profile_photo' => null,
                    'profile_bg' => null,
                    'role_users_id' => 4,
                    'is_active' => null,
                    'contact_no' => 62855544623,
                    'last_login_ip' => null,
                    'last_login_date' => null,
                    'remember_token' => null,
                    'created_at' => now()
                ],
            ]
        );
    }
}
