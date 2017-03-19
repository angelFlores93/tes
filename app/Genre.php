<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genres';
    protected $fillable = ['name'];

    public function progressions(){
        return $this->hasMany('App\Progression', 'id_genre', 'id');
    }
}
