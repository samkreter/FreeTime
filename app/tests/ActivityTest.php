<?php

class ActivityTest extends TestCase {

    public function testNewActivity()
    {
        // set the user
        $input = array(
            'name'          => 'Test Activity',
            'start'         => '10:00 am',
            'end'           => '11:50 am',
            'min_players'   => 1,
            'max_players'   => 100,
            'location'      => 'Memorial',
        );
        $this->call('POST', '/schedules/activities/new', $input);
        $this->assertSessionHas('success');
    }

    public function testAddActivityToSchedule()
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
        $this->call('POST', '/schedules/1/activities/1/add');
        $this->assertSessionHas('success');
    }
}
