// app/database/seeds/UserTableSeeder.php

<?php

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'name'     => 'Michael Hoover',
            'username' => 'michael',
            'email'    => 'mike.hoover@gmail.com',
            'password' => Hash::make('43m0nk33'),
        ));
    }

}
