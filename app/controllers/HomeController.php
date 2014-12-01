<?php

class HomeController extends BaseController
{

	public function getHome()
	{
        $activities = Activity::all();
        $classes = ClassM::all();
        $sports = Sport::all();
        return View::make('pages.home')->with(array(
            'activities'    => $activities,
            'classes'       => $classes,
            'sports'        => $sports,
        ));
	}

	public function getIndex()
    {
        return View::make('pages.index');
	}

}
