<?php

class ActivitySeeder extends Seeder {

    public function run()
    {
        $activity = Activity::create(array(
            'name'          => 'Test Activity',
            'start'         => '10:00 am',
            'end'           => '11:50 am',
            'min_players'   => 1,
            'max_players'   => 100,
            'location'      => 'Memorial',
        ));

        $schedule = Schedule::find(1);
        $schedule->activities()->attach($activity);
    }

}