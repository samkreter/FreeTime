<?php

class SportSeeder extends Seeder {

    public function run()
    {
        $activity = Sport::create(array(
            'name'          => 'Soccer',
            'start'         => '10:00 am',
            'end'           => '11:50 am',
            'min_players'   => 1,
            'max_players'   => 20,
            'location'      => 'Memorial',
        ));

        $schedule = Schedule::find(1);
        $schedule->sports()->attach($activity);
    }

}