<?php

class ClassSeeder extends Seeder {

    public function run()
    {
        $class = ClassM::create(array(
            'title'         => 'CS3380 DB',
            'start'         => '9:00 am',
            'end'           => '9:50 am',
            'instructor'    => 'Dr. Klaric'
        ));

        $schedule = Schedule::find(1);
        $schedule->classes()->attach($class);
    }

}