<?php

class SportTest extends TestCase {

    public function testNewSport()
    {
        // set the user
        $input = array(
            'name'          => 'Soccer',
            'start'         => '10:00 am',
            'end'           => '11:50 am',
            'min_players'   => 1,
            'max_players'   => 20
        );
        $this->call('POST', '/schedules/sports/new', $input);
        $this->assertSessionHas('success');
    }

    public function testAddSportToSchedule()
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
        $this->call('POST', '/schedules/1/sports/1/add');
        $this->assertSessionHas('success');
    }
}
