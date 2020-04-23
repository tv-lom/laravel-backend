<?php

use App\Model\User;
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
        User::create([
            'name' => 'General User',
            'email' => 'general-user@admin.com',
            'password' => bcrypt('general_user_backend')
        ])->assignRole('general user');

    	User::create([
    		'name' => 'admin',
    		'email' => 'admin@admin.com',
    		'password' => bcrypt('admin_backend')
    	])->assignRole('admin');

        User::create([
            'name' => 'Superadmin',
            'email' => 'superadmin@admin.com',
            'password' => bcrypt('superadmin_backend')
        ])->assignRole('super admin');
    }
}
