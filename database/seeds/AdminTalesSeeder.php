<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Admin;

class AdminTalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

       Admin::create([
            'name'    => 'Subadmin',
            'email'   => 'Subadmin@gmail.com',
            'password' => Hash::make('Subadmin'),
            'role'  => 0,
            'remember_token' =>  str_random(10),
        ]);
    }
}
