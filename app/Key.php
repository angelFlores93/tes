<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Key extends Model
{
    protected $table = 'keys';
    protected $fillable = ['name'];

    public function progressions()
    {
        return $this->hasMany('App\Progression', 'id_key', 'id');
    }
}
