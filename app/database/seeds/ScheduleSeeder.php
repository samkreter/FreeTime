<?php

class ScheduleSeeder extends Seeder {

    public function run()
    {
        Schedule::create(array(
            'user_id'   => 1,
            'date'  => date('12-01-2014'),
        ));
    }

}