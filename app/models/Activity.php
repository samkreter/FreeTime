<?php

class Activity extends Eloquent
{

    protected $table = 'activities';
    public $timestamps = true;
    protected $fillable = array('name', 'start', 'end', 'min_players', 'max_players');

}