<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=> 'Natchya Faengmuangkok',
            'email'=> 'primnatchaya2540@gmail.com',
            'password'=> bcrypt('2540'),
        ]);

        //employee
        DB::table('users')->insert([
            'name' => 'Employee 1',
            'email' => 'emp1@gmail.com',
            'password' => bcrypt('1234'),
            'user_type' => 1
        ]);
        //admin
        DB::table('users')->insert([
            'name' => 'Admin 1',
            'email' => 'admin1@gmail.com',
            'password' => bcrypt('1234'),
            'user_type' => 2
        ]);
        DB::table('users')->insert([
            'name' => 'Diver 1',
            'email' => 'diver1@gmail.com',
            'password' => bcrypt('1234'),
            'user_type' => 3
        ]);
        $this->call(ProductTypesTableSeeder::class);
         $this->call(ProductsTableSeeder::class);

    }
}
