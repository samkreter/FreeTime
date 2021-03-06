<?php

class Schedule extends Eloquent
{
    protected $table = 'schedules';
    public $timestamps = true;
    protected $fillable = array('date', 'user_id');

    /**
     * Get the day that the particular schedule belongs to
     * @return mixed
     */
    public function day()
    {
        return $this->hasOne('Day');
    }

    /**
     * Get the user that the schedule is associated with
     * @return mixed
     */
    public function user()
    {
        return $this->belongsTo('User');
    }

    /**
     * Get all the activities for the current day
     * @return mixed
     */
    public function activities()
    {
        return $this->belongsToMany('Activity', 'schedule_activities');
    }

    /**
     * Get all the sports for the current day
     * @return mixed
     */
    public function sports()
    {
        return $this->belongsToMany('Sport', 'schedule_sports');
    }

    /**
     * Get all the classes for the current day
     * @return mixed
     */
    public function classes()
    {
        return $this->belongsToMany('ClassM', 'schedule_classes', 'schedule_id', 'class_id');
    }
}
