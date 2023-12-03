<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run():void
    {
        $userData =[
            [
                'name'=>'Meyzia',
                'email'=>'admin@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('12345678'),
            ],
            [
                'name'=>'Septian',
                'email'=>'user@gmail.com',
                'role'=>'user',
                'password'=>bcrypt('12345678'),
            ],
        ];
        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
