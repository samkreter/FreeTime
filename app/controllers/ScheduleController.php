<?php

class ScheduleController extends BaseController
{
    /**
     * Get all of the schedules for the day.
     * @return mixed
     */
    public function getToday()
    {
        $date = date('m-d-Y');
        $schedules = Schedule::where('date', '=', $date)
            ->with('classes', 'activities', 'sports')->get();
        $events = array(
            'classes' => array(),
            'activities' => array(),
            'sports'    => array(),
        );
        // loop through the schedules for today
        foreach ($schedules as $schedule) {
            // get all the classes and add them as an event
            foreach($schedule->classes as $class) {
                array_push($events['classes'], $class->toArray());
            }
            // get all activities
            foreach($schedule->activities as $activity) {
                array_push($events['activities'], $activity->toArray());

            }
            // get all the sports
            foreach($schedule->sports as $sport) {
                array_push($events['sports'], $sport->toArray());

            }
        }
        return Response::json($events);
    }

    /**
     * Get the schedule resource from the DB along with it's relations.  Flash the
     * data to the view.
     * @return mixed
     */
    public function getView()
    {
        $date = date('m-d-Y', Input::get('start'));
        $calendarFormat = date('Y-m-d', Input::get('start')) . "T";
        $schedule = Schedule::where('user_id', '=', Auth::user()->id)
            ->where('date', '=', $date)->with('classes', 'activities', 'sports')
            ->first();
        // if the schedule for the desired day does not exits just create one
        if (count($schedule) < 1) {
            $schedule = new Schedule();
            $schedule->date = $date;
            $schedule->user_id = Auth::user()->id;
            $schedule->save();
        }
        // modify the data to make it displayable with the plugin
        $events = array(array('title' => $schedule->id));
        // add activities
        foreach ($schedule->activities as $activity) {
            array_push($events, array(
                'title' => $activity->name,
                'start' => $calendarFormat . $activity->start,
                'end'   => $calendarFormat . $activity->end,
                'allDay' => false,
            ));
        }
        // add classes
        foreach ($schedule->classes as $class) {
            array_push($events, array(
                'title' => $class->title,
                'start' => $calendarFormat . $class->start,
                'end'   => $calendarFormat . $class->end,
                'allDay' => false,
            ));
        }
        // add sports
        foreach ($schedule->sports as $sport) {
            array_push($events, array(
                'title' => $sport->name,
                'start' => $calendarFormat . $sport->start,
                'end'   => $calendarFormat . $sport->end,
                'allDay' => false,
            ));
        }

        return Response::json($events);
    }
}
