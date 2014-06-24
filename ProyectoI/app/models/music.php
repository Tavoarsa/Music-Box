<?php

class music extends Eloquent
{
    protected $table      = 'cancion';
    protected $fillable   = array('nombre','ubicacion');
    protected $guarded    = array('id');
    public    $timestamps = false;
}