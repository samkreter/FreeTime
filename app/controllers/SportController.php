<?php

class SportController extends BaseController
{
    public function getCreate()
    {

    }

    public function postCreate()
    {
        $input = Input::all();
        $rules = array(
            'min_players'   => 'required|integer',
            'max_players'   => 'required|integer',
            'name'          => 'required|max:255',
            'start'         => 'required',
            'end'           => 'required'
        );
        $validator = Validator::make($input, $rules);
        if ($validator->passes()) {
            $activity = Sport::create($input);
            if (!is_null($activity->id)) {
                return Redirect::to('dashboard')->with('success', 'Sport Added');
            }
        }
        return Redirect::to('schedules/sports/new')->withErrors($validator)->withInput($input);
    }

    public function postAdd($scheduleId, $sportId)
    {
        $schedule = Schedule::findOrFail($scheduleId);
        if ($schedule->user_id !== Auth::user()->id) {
            App::abort(403);
        }
        $sport = Sport::findOrFail($sportId);
        $schedule->sports()->attach($sport);
        return Redirect::to('schedules')->with('success', 'Sport added to your schedule.');
    }
}