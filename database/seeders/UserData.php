<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Petugas',
                'password' => bcrypt('123456'),
                'email' => 'petugas@gmail.com'
            ],

            [
                'name' => 'Kepala',
                'password' => bcrypt('123456'),
                'email' => 'kepala@gmail.com'
            ],
        ];

        foreach($user as $key => $value){
            User::create($value);
        }
        //
    }
}
