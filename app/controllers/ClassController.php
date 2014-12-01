<?php

class ClassController extends BaseController
{
    /**
     * Validate a new class and if it is valid create it and save it to the DB.
     * @return mixed
     */
    public function postCreate()
    {
        $input = Input::all();
        $rules = array(
            'instructor'    => 'required|max:255',
            'title'         => 'required|max:255',
            'start'         => 'required',
            'end'           => 'required'
        );
        $validator = Validator::make($input, $rules);
        if ($validator->passes()) {
            $activity = ClassM::create($input);
            if (!is_null($activity->id)) {
                return Redirect::to('home')->with('success', 'Class Added');
            }
        }
        return Redirect::to('schedules/classes/new')->withErrors($validator)->withInput($input);
    }

    /**
     * Attach a class to a schedule.  Make sure that the person trying to attach a class to a schedule
     * is the owner of the schedule
     * @param $scheduleId
     * @param $classId
     * @return mixed
     */
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

    /**
     * Remove a class from a schedule.  Make sure the owners match.
     * @param $scheduleId
     * @param $classId
     * @return mixed
     */
    public function getRemove($scheduleId, $classId)
    {
        $schedule = Schedule::findOrFail($scheduleId);
        if ($schedule->user_id !== Auth::user()->id) {
            App::abort(403);
        }
        $class = ClassM::findOrFail($classId);
        $schedule->classes()->detach($class);
        return Redirect::to('schedules')->with('success', 'Class removed from your schedule');
    }
}
