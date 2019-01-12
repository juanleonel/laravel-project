<?php

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
         factory(App\User::class, 4)->create();

         App\User::create([
         	'first_name' => 'Juan',
         	'last_name' => 'Albores',
         	'email' => 'juanl@gmail.com',
         	'password' => bcrypt('12345')
         ]);
    }
}
