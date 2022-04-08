<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'name'         => 'Muhammad Ikhwan Fathulloh',
                    'email'         => 'muhammadikhwanfathulloh17@gmail.com',
                    'password'     => Hash::make('12345678'),
                    'level'            => '1',
                ],

                [
                    'name'         => 'Muhammad Firman Hermawan',
                    'email'         => 'muhammadfirmanhermawan@gmail.com',
                    'password'     => Hash::make('12345678'),
                    'level'            => '2',
                ],

                [
                    'name'         => 'Shalih Rizaldy',
                    'email'         => 'shalihrizaldy@gmail.com',
                    'password'     => Hash::make('12345678'),
                    'level'            => '2',
                ],

                [
                    'name'         => 'Dimas Aji Permadi',
                    'email'         => 'dimasajipermadi@gmail.com',
                    'password'     => Hash::make('12345678'),
                    'level'            => '2',
                ],
            ]
        );
    }
}
