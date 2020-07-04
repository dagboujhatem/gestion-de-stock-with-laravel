<?php

use Illuminate\Database\Seeder;
use \App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // test sur la table users est vide
         if(DB::table('users')->get()->count() == 0)
         {
             // insert a new user
             User::create([
                 "full_name" => "Dagbouj Hatem",
                 "email" => "dagboujhatem@gmail.com",
                 "password" => bcrypt("password")
             ])->assignRole('Administrator');

             User::create([
                 "full_name" => "User User",
                 "email" => "user@gmail.com",
                 "password" => bcrypt("password")
             ])->assignRole('User');
         }
         else
         {
             echo "Table USERS is not empty! \n";
         }
    }
}
