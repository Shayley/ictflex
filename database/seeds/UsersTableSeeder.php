<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $ownerRole = Role::where('name', 'owner')->first();
        $adminRole = Role::where('name', 'admin')->first();
        $siteManagerRole = Role::where('name', 'sitemanager')->first();

        $owner = User::create([
           'name' => 'owner',
            'email' => 'owner@owner.nl',
            'password' => bcrypt('FlexOwner@02020!')
        ]);

        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.nl',
            'password' => bcrypt('AdminFlex@2020!')
        ]);

        $sitemanager = User::create([
            'name' => 'sitemanager',
            'email' => 'sitemanager@siteman.nl',
            'password' => bcrypt('SiteMan@02020!')
        ]);

        $owner->roles()->attach($ownerRole);
        $admin->roles()->attach($adminRole);
        $sitemanager->roles()->attach($siteManagerRole);
    }
}
