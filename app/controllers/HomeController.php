<?php

class HomeController extends BaseController
{

	public function getHome()
	{
        return View::make('pages.home');
	}

	public function getIndex(){
        return View::make('pages.index');
	}

}
