<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Progression extends Model
{
    protected $table = 'progressions';
    protected $fillable = ['name','id_user','id_genre','id_key'];

    public function user(){
        return $this->belongsTo('App\User', 'id_user');
    }
    public function genre(){
        return $this->belongsTo('App\Genre', 'id_genre');
    }
    public function key(){
        return $this->belongsTo('App\Key', 'id_key');
    }
    public function types(){
        return $this->belongsToMany('App\Type')->withPivot('progression')->withTimestamps();
    }
}
