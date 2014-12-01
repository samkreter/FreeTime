<?php

/**
 * Class UserTest
 * This class tests different cases of user input provided for user actions.  Everything
 * is self explanatory *look at the method names*, so I didn't write comments for the methods.
 */
class UserTest extends TestCase {

    public function testCreateUserTrue()
    {
        Artisan::call('migrate:refresh');
        $input = array(
            'first_name'    => 'kyle',
            'last_name'     => 'mccarthy',
            'username'      => 'kyle',
            'password'      => 'testcase'
        );
        $this->call('POST', '/register', $input);
        $this->assertRedirectedTo('home');
        $this->assertSessionHas('success');
    }

    public function testCreateUserInvalidUsername()
    {
        $input = array(
            'first_name'    => 'kyle',
            'last_name'     => 'mccarthy',
            'username'      => 'kyle',
            'password'      => 'testcase'
        );
        $this->call('POST', '/register', $input);
        $this->assertRedirectedTo('login');
        $this->assertSessionHasErrors();
    }

    public function testCreateInvalidFirstName()
    {
        Artisan::call('migrate:refresh');
        $input = array(
            'first_name'    => '',
            'last_name'     => 'mccarthy',
            'username'      => 'kyle',
            'password'      => 'testcase'
        );
        $this->call('POST', '/register', $input);
        $this->assertRedirectedTo('login');
        $this->assertSessionHasErrors(array('first_name'));
    }

    public function testCreateInvalidLastName()
    {
        Artisan::call('migrate:refresh');
        $input = array(
            'first_name'    => 'kyle',
            'last_name'     => '',
            'username'      => 'kyle',
            'password'      => 'testcase'
        );
        $this->call('POST', '/register', $input);
        $this->assertRedirectedTo('login');
        $this->assertSessionHasErrors(array('last_name'));
    }

    public function testCreatInvalidPassword()
    {
        Artisan::call('migrate:refresh');
        $input = array(
            'first_name'    => 'kyle',
            'last_name'     => 'mccarthy',
            'username'      => 'kyle',
            'password'      => 'test'
        );
        $this->call('POST', '/register', $input);
        $this->assertRedirectedTo('login');
        $this->assertSessionHasErrors(array('password'));
    }

    public function testLoginTrue()
    {
        // we need to call this test case again to create the user
        // for the login test.
        $this->testCreateUserTrue();
        $input = array(
            'username'  => 'kyle',
            'password'  => 'testcase',
        );
        $response = $this->call('POST', '/login', $input);
        $this->assertRedirectedTo('home');
    }

    public function testLoginFalse()
    {
        $input = array(
            'username'  => 'kyle',
            'password'  => 'badpassword',
        );
        $this->call('POST', '/login', $input);
        $this->assertSessionHas('loginError');
        $this->assertRedirectedTo('login');
    }
}