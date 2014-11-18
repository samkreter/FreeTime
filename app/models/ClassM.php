<?php

class ClassM extends Eloquent
{

    protected $table = 'classes';
    public $timestamps = true;
    protected $fillable = array('title', 'professor', 'start', 'end');

}