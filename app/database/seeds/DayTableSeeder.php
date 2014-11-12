<?php

class DayTableSeeder extends Seeder {

    public function run()
    {
        DB::table('days')->delete();

        Day::create(array('day' => 'Monday'));
        Day::create(array('day' => 'Tuesday'));
        Day::create(array('day' => 'Wednesday'));
        Day::create(array('day' => 'Thursday'));
        Day::create(array('day' => 'Friday'));
        Day::create(array('day' => 'Saturday'));
        Day::create(array('day' => 'Sunday'));
    }

}