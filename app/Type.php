<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'types';
    protected $fillable = ['name'];


    public function progressions(){
        return $this->belongsToMany('App\Progression')->withPivot('progression')->withTimestamps();
    }
}
