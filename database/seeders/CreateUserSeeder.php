<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=[
        [

            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'is_admin'=>'1',
            'password'=>\Hash::make('12345')

        ],

        [

            'name'=>'stuff',
            'email'=>'stuff@gmail.com',
            'is_admin'=>'0',
            'password'=>\Hash::make('123456')

        ]

    ];

  foreach($users as $key=>$value){
    User::create($value);
  }

   
    }
}
