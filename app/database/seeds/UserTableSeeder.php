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
        User::create(array(
            'name'     => 'Penelope Bandiera',
            'username' => 'penelope',
            'email'    => 'p.bandiera@aprileusa.com',
            'password' => Hash::make('penelope77'),
        ));
        User::create(array(                                                                                                                                
            'name'     => 'Alessia Buset',                                                                                                             
            'username' => 'alessia',                                                                                                                      
            'email'    => 'a.buset@aprileusa.com',                                                                                                      
            'password' => Hash::make('Scorpio1976'),                                                                                                        
        ));
        User::create(array(                                                                                                                                
            'name'     => 'Tirzo Quintero',                                                                                                             
            'username' => 'tirzo',                                                                                                                      
            'email'    => 't.quintero@aprileusa.com',                                                                                                      
            'password' => Hash::make('quintero2014'),                                                                                                        
        ));
    }

}
