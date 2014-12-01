<?php

class SportController extends BaseController
{
    /**
     * Try to create a new sport if the POST data is valid.
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
            $activity = Sport::create($input);
            if (!is_null($activity->id)) {
                return Redirect::to('home')->with('success', 'Sport Added');
            }
        }
        return Redirect::to('schedules/sports/new')->withErrors($validator)->withInput($input);
    }

    /**
     * Try to add a sport to a schedule.  The owners must match.
     * @param $scheduleId
     * @param $sportId
     * @return mixed
     */
    public function getAdd($scheduleId, $sportId)
    {
        $schedule = Schedule::findOrFail($scheduleId);
        if ($schedule->user_id !== Auth::user()->id) {
            App::abort(403);
        }
        $sport = Sport::findOrFail($sportId);
        $schedule->sports()->attach($sport);
        return Redirect::to('schedules')->with('success', 'Sport added to your schedule.');
    }

    /**
     * Try to remove a sport from a schedule.  The owners must match.
     * @param $scheduleId
     * @param $sportId
     * @return mixed
     */
    public function getRemove($scheduleId, $sportId)
    {
        $schedule = Schedule::findOrFail($scheduleId);
        if ($schedule->user_id !== Auth::user()->id) {
            App::abort(403);
        }
        $sport = Sport::findOrFail($sportId);
        $schedule->sports()->detach($sport);
        return Redirect::to('schedules')->with('success', 'Sport removed from your schedule');
    }
}
