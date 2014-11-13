<?php

class ActivityController extends BaseController
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
            $activity = Activity::create($input);
            if (!is_null($activity->id)) {
                return Redirect::to('dashboard')->with('success', 'Activity Added');
            }
        }
        return Redirect::to('schedules/activities/new')->withErrors($validator)->withInput($input);
    }

    public function postAdd($scheduleId, $activityId)
    {
        $schedule = Schedule::findOrFail($scheduleId);
        if ($schedule->user_id !== Auth::user()->id) {
            App::abort(403);
        }
        $activity = Activity::findOrFail($activityId);
        $schedule->activities()->attach($activity);
        return Redirect::to('schedules')->with('success', 'Activity added to your schedule.');
    }
}