<?php

class ScheduleController extends BaseController
{

    /**
     * Create the schedule for a user.  The schedule needs to have a date associated with it,
     * so validate the POST data.  Set the user_id to the logged in user.
     * @return mixed
     */
    public function postCreate()
    {
        $input = Input::all();
        $rules = array(
            'date'  => 'required|date',
        );
        $validator = Validator::make($input, $rules);
        if ($validator->passes()) {
            $schedule = new Schedule(Input::all());
            $schedule->user_id = Auth::user()->id;
            if ($schedule->save()) {
                return Redirect::to('schedules/view/' . $schedule->id)
                    ->with('success', 'New schedule create.');
            }
        }
        return Redirect::to('schedules/new')->withErrors($validator);
    }

    /**
     * Get the schedule resource from the DB along with it's relations.  Flash the
     * data to the view.
     * @param $id
     * @return mixed
     */
    public function getView($id)
    {
        // todo :: do we want anyone to be able to view someones schedule or just the user??
        $schedule = Schedule::findOrFail($id)->with('classes', 'activities', 'sports');
        $sports = $schedule->sports;
        $classes = $schedule->classes;
        $activities = $schedule->activities;
        return View::make('schedules.view')->with(array(
            'schedule'      => $schedule,
            'sports'        => $sports,
            'classes'       => $classes,
            'activities'    => $activities,
        ));
    }
}
