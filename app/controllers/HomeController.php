<?php

class HomeController extends BaseController
{

	public function getHome()
	{
				$username = DB::table('users')->where('id', '=', Auth::user()->id)->pluck('username');
        return View::make('pages.home',array('username' => $username));
	}

	public function getIndex()
    {
        return View::make('pages.index');
	}

	public function getEvents(){



		$event = array(
			'title' => 'All Day Event sam',
			'start' => '2014-11-30');

		Log::error("sonthing went wrong");

		return Response::json($event);
	}

}
