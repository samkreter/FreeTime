<?php

class Sport extends Eloquent
{

    protected $table = 'sports';
    public $timestamps = true;
    protected $fillable = array('name', 'start', 'end', 'min_players', 'max_players');

    /**
     * Get all the schedules the sport appears on
     * @return mixed
     */
    public function schedules()
    {
        return $this->belongsToMany('Schedule', 'schedule_sports');
    }

}