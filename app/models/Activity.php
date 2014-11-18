<?php

class Activity extends Eloquent
{

    protected $table = 'activities';
    public $timestamps = true;
    protected $fillable = array('name', 'start', 'end', 'min_players', 'max_players');

    /**
     * Get all the schedules the sport appears on
     * @return mixed
     */
    public function schedules()
    {
        return $this->belongsToMany('Schedule', 'schedule_activities');
    }
}
