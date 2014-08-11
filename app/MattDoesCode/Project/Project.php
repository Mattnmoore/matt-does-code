<?php namespace MattDoesCode\Project;

use Illuminate\Database\Eloquent as Eloquent;

class Project extends Eloquent {

    public function media()
    {
        return $this->morphToMany('MattDoesCode\Media\Media');
    }

    public function technologies()
    {
        return $this->belongsToMany('MattDoesCode\Technology\Technology');
    }

    public function clients()
    {
        return $this->hasMany('MattDoesCode\Client\Client');
    }
}