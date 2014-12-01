<?php

class UserSeeder extends Seeder {

    public function run()
    {
        User::create(array(
            'first_name'    => 'test',
            'last_name'     => 'user',
            'username'      => 'test',
            'password'      => Hash::make('testtest'),
        ));
    }

}