<?php

class ClassM extends Eloquent
{

    protected $table = 'classes';
    public $timestamps = true;
    protected $fillable = array('title', 'instructor', 'start', 'end');

    /**
     * Get all the schedules the class appears on
     * @return mixed
     */
    public function schedules()
    {
        return $this->belongsToMany('Schedule', 'schedule_classes', 'schedule_id', 'class_id');
    }
}