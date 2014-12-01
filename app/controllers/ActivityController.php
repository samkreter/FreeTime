<?php

class ActivityController extends BaseController
{
    /**
     * Try to create a new activity if the POST data is valid.
     * @return mixed
     */
    public function postCreate()
    {
        $input = Input::all();
        $rules = array(
            'min_players'   => 'required|integer',
            'max_players'   => 'required|integer',
            'name'          => 'required|max:255',
            'start'         => 'required',
            'end'           => 'required',
            'location'      => 'required|max:255'
        );
        $validator = Validator::make($input, $rules);
        if ($validator->passes()) {
            $activity = Activity::create($input);
            if (!is_null($activity->id)) {
                return Redirect::to('home')->with('success', 'Activity Added');
            }
        }
        return Redirect::to('schedules/activities/new')->withErrors($validator)->withInput($input);
    }

    /**
     * Try to add an activity to the schedule.  The owners must match.
     * @param $scheduleId
     * @param $activityId
     * @return mixed
     */
    public function getAdd($scheduleId, $activityId)
    {
        $schedule = Schedule::findOrFail($scheduleId);
        if ($schedule->user_id !== Auth::user()->id) {
            App::abort(403);
        }
        $activity = Activity::findOrFail($activityId);
        $schedule->activities()->attach($activity);
        return Redirect::to('schedules')->with('success', 'Activity added to your schedule.');
    }

    /**
     * Try to remove an activity from a schedule.  The owners must match.
     * @param $scheduleId
     * @param $activityId
     * @return mixed
     */
    public function getRemove($scheduleId, $activityId)
    {
        $schedule = Schedule::findOrFail($scheduleId);
        if ($schedule->user_id !== Auth::user()->id) {
            App::abort(403);
        }
        $activity = Activity::findOrFail($activityId);
        $schedule->activities()->detach($activity);
        return Redirect::to('schedules')->with('success', 'Activity removed from your schedule');
    }
}
