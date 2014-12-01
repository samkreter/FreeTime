<?php

class ScheduleSeeder extends Seeder {

    public function run()
    {
        Schedule::create(array(
            'user_id'   => 1,
            'date'  => date('11-30-2014'),
        ));
    }

}