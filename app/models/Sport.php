<?php

class Sport extends Eloquent
{

    protected $table = 'sports';
    public $timestamps = true;
    protected $fillable = array('name', 'start', 'end', 'min_players', 'max_players');

}