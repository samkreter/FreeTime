<?php

class ClassTest extends TestCase {

    public function testNewClass()
    {
        // set the user
        $input = array(
            'title'         => 'CS3380 DB',
            'start'         => '9:00 am',
            'end'           => '9:50 am',
            'instructor'    => 'Dr. Klaric'
        );
        $this->call('POST', '/schedules/classes/new', $input);
        $this->assertSessionHas('success');
    }

    public function testAddClassToSchedule()
    {
        // create the schedule for the test
        // set the user
        Auth::loginUsingId(1);
        // set the date
        $input = array(
            'date'  => date('2014-11-8'),
        );
        $this->call('POST', '/schedules/new', $input);
        $this->assertSessionHas('success');

        // try to attach the activity
        $this->call('POST', '/schedules/1/classes/1/add');
        $this->assertSessionHas('success');
    }
}
