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
        for($i=0; $i <= 100; $i++){
            App\User::create([
                'name'=>'test' . $i,
                'email'=>'test' . $i . '@gmail.com',
                'password'=>'test123',
                ]);
        }
    }
}
