<?php

class ClassController extends BaseController
{
    public function getCreate()
    {

    }

    public function postCreate()
    {
        $input = Input::all();
        $rules = array(
            'professor'     => 'required|max:255',
            'name'          => 'required|max:255',
            'start'         => 'required',
            'end'           => 'required'
        );
        $validator = Validator::make($input, $rules);
        if ($validator->passes()) {
            $activity = ClassM::create($input);
            if (!is_null($activity->id)) {
                return Redirect::to('dashboard')->with('success', 'Class Added');
            }
        }
        return Redirect::to('schedules/classes/new')->withErrors($validator)->withInput($input);
    }

    public function postAdd($scheduleId, $classId)
    {
        $schedule = Schedule::findOrFail($scheduleId);
        if ($schedule->user_id !== Auth::user()->id) {
            App::abort(403);
        }
        $class = ClassM::findOrFail($classId);
        $schedule->classes()->attach($class);
        return Redirect::to('schedules')->with('success', 'Class added to your schedule.');
    }
}