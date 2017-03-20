<?php

namespace App\Http\Controllers;

use App\Key;
use Illuminate\Http\Request;

class generateProgressions extends Controller
{
    public function index(){
        $keys = Key::all();
        return view('home')->with([
            'keys'=> $keys
        ]);
    }
    public function generate(Request $request){
        $chords = $this->generateChords($request->key, $request->variant);
        dd($this->generatePop($request->variant));

    }
    //get the chord array
    public function getChordsArray($key, $stepsArray, $progressionFormulaArray){
        $chordsIndex = array();
        $chords = array();
        $chordsIndex[0] = $key;
        $i = 1;
        foreach ($stepsArray as $step){
            $id = ($chordsIndex[$i - 1] + $step) %13;
            if ($id == 1 || $id == 0) {
                $id++;
            }
            $chordsIndex[$i] = $id;
            $i++;
        }
        $i = 0;
        foreach ($chordsIndex as $index){
            if (isset($progressionFormulaArray[$i])){
                $chord = Key::find($index)->name.$progressionFormulaArray[$i];
            }else{
                $chord = Key::find($index)->name;
            }
            $chords[$i++] = $chord;
        }
        return $chords;
    }
    //generate the chords in a major/minor context
    public function generateChords($key, $variant){
        if ($variant == 'major'){
            $majorScaleSteps = array(2, 2, 1, 2, 2, 2);
            $majorProgressionFormula = array (1 => 'm', 2 => 'm', 5 => 'm', 6 => 'dim');
            return $this->getChordsArray($key, $majorScaleSteps, $majorProgressionFormula);
        }else{
            $minorScaleSteps = array(2, 1, 2, 2, 1, 2);
            $minorProgressionFormula = array (0 => 'm',1 => 'dim',3 => 'm',4 =>'m');
            return $this->getChordsArray($key, $minorScaleSteps, $minorProgressionFormula);
        }
    }
    //generate pop progressions
    public function generatePop($variant){
        if ($variant == 'major'){
            $verseProgressions = array(
                0 => array(0, 4, 5, 3),
                1 => array(0, 4, 5, 2),
                2 => array(5, 3, 0, 4),
                3 => array(0, 5, 3, 4),
                4 => array(0, 3, 4, 0),
                5 => array(0, 4, 5, 2, 3, 0, 3, 4),
                6 => array(0, 3, 4, 3),
                7 => array(0, 3, 0),
                8 => array(0, 4),
                9 => array(0, 3, 4, 0)
            );
            $chorusProgressions = array(
                0 => array(4, 5, 3, 0),
                1 => array(4, 3, 0),
                2 => array(0, 4, 5, 3),
                3 => array(5, 3, 0, 4),
                4 => array(5, 4, 3, 4)
            );
            $bridgeProgressions = array(
                0 => array(1, 3, 4),
                1 => array(4, 3, 0),
                2 => array(5, 3, 0, 4),
                3 => array(5, 4, 3, 4)
            );
            $prechorusProgressions = array(
                0 => array(3, 0, 4, 5),
                1 => array(5, 4, 3, 4),
                2 => array(5, 3, 0, 4)
            );
        }else {
            $verseProgressions = array(
                0 => array(0, 3, 0),
                1 => array(0, 4),
                2 => array(0, 3, 4, 0),
                3 => array(0, 6, 5, 7),
                4 => array(0, 6, 5, 4),
                5 => array(0, 4, 5, 3),
                6 => array(0, 4, 5, 2),
                7 => array(5, 3, 0, 4),
                8 => array(0, 5, 3, 4),
                9 => array(0, 3, 4, 0),
            );
            $chorusProgressions = array(
                0 => array(4, 5, 3, 0),
                1 => array(4, 3, 0),
                2 => array(0, 5, 2, 6),
                3 => array(5, 3, 0, 4),
                4 => array(5, 4, 3, 4)
            );
            $bridgeProgressions = array(
                0 => array(5, 6, 0, 0),
                1 => array(1, 3, 4),
                2 => array(4, 3, 0),
                3 => array(5, 3, 0, 4),
                4 => array(5, 4, 3, 4)
            );
            $prechorusProgressions = array(
                0 => array(3, 0, 4, 5),
                1 => array(5, 4, 3, 4),
                2 => array(5, 3, 0, 4)
            );
        }
        return array(
            'verse' => $verseProgressions,
            'chorus' => $chorusProgressions,
            'bridge' => $bridgeProgressions,
            'prechorus' => $prechorusProgressions
        );
    }
}
