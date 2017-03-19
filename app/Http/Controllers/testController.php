<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Key;
use App\User;
use App\Type;
use Illuminate\Http\Request;

class testController extends Controller
{
    public function index(){
        $type = Type::find(1);

        dd($type->progressions[0]->pivot->progression);
    }
}
