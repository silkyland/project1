<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $user = new User();
       $user->name = "Bundit Nuntates";
       $user->username = "admin";
       $user->email = "silkyland@gmail.com";
       $user->password = Hash::make("1234");
       $user->save();

       // INSERT INTO users
       // (id, name, username, email, password)
       // VALUES (null, "Bundit Nuntates", "admin", "silkyland@gmail.com", "1234")
    }
}
