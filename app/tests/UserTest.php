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
            'password'      => 'testcase',
            'dob'           => '10/15/1993',
        );
        $this->call('POST', '/register', $input);
        $this->assertRedirectedTo('register');
        $this->assertSessionHas('success');
    }

    public function testCreateUserInvalidUsername()
    {
        $input = array(
            'first_name'    => 'kyle',
            'last_name'     => 'mccarthy',
            'username'      => 'kyle',
            'password'      => 'testcase',
            'dob'           => '10/15/1993',
        );
        $this->call('POST', '/register', $input);
        $this->assertRedirectedTo('register');
        $this->assertSessionHasErrors();
    }

    public function testCreateInvalidFirstName()
    {
        Artisan::call('migrate:refresh');
        $input = array(
            'first_name'    => '',
            'last_name'     => 'mccarthy',
            'username'      => 'kyle',
            'password'      => 'testcase',
            'dob'           => '10/15/1993',
        );
        $this->call('POST', '/register', $input);
        $this->assertRedirectedTo('register');
        $this->assertSessionHasErrors(array('first_name'));
    }

    public function testCreateInvalidLastName()
    {
        Artisan::call('migrate:refresh');
        $input = array(
            'first_name'    => 'kyle',
            'last_name'     => '',
            'username'      => 'kyle',
            'password'      => 'testcase',
            'dob'           => '10/15/1993',
        );
        $this->call('POST', '/register', $input);
        $this->assertRedirectedTo('register');
        $this->assertSessionHasErrors(array('last_name'));
    }

    public function testCreatInvalidPassword()
    {
        Artisan::call('migrate:refresh');
        $input = array(
            'first_name'    => 'kyle',
            'last_name'     => 'mccarthy',
            'username'      => 'kyle',
            'password'      => 'test',
            'dob'           => '10/15/1993',
        );
        $this->call('POST', '/register', $input);
        $this->assertRedirectedTo('register');
        $this->assertSessionHasErrors(array('password'));
    }

    public function testCreateInvalidDOB()
    {
        Artisan::call('migrate:refresh');
        $input = array(
            'first_name'    => 'kyle',
            'last_name'     => 'mccarthy',
            'username'      => 'kyle',
            'password'      => 'testcase',
            'dob'           => '',
        );
        $this->call('POST', '/register', $input);
        $this->assertRedirectedTo('register');
        $this->assertSessionHasErrors(array('dob'));
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
        $this->assertRedirectedTo('dashboard');
    }

    public function testLoginFalse()
    {
        $input = array(
            'username'  => 'kyle',
            'password'  => 'badpassword',
        );
        $this->call('POST', '/login', $input);
        $this->assertSessionHasErrors();
        $this->assertRedirectedTo('login');
    }
}