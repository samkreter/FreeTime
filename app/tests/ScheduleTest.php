<?php

class ScheduleTest extends TestCase {

    public function testNewSchedule()
    {
        // set the user
        $user = User::where('username', '=', 'kyle')->first();
        $this->be($user);
        // set the date
        $input = array(
            'date'  => date("m-d-y"),
        );
        $this->call('POST', '/schedules/new', $input);
        $this->assertSessionHas('success');
    }
}
