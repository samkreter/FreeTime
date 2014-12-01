<?php

class UserSeeder extends Seeder {

    public function run()
    {
        User::create(array(
            'first_name'    => 'kyle',
            'last_name'     => 'mccarthy',
            'username'      => 'kyle',
            'password'      => Hash::make('testtest'),
        ));
    }

}