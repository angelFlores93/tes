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
        $popProgressions = $this->generatePop($request->variant, $chords);
        $rockProgressions = $this->generateRock($request->variant, $chords);
        $bluesProgressions = $this->generateBlues($request->variant, $chords);
        //dd($popProgressions);
        $keys = Key::all();
        return view('home')->with([
            'keys' => $keys,
            'chords' => $chords,
            'popProgressions' => $popProgressions,
            'rockProgressions' => $rockProgressions,
            'bluesProgressions' => $bluesProgressions,
        ]);

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
            $chordName = Key::find($index)->name;
            if (isset($progressionFormulaArray[$i])){
                if (strpos($chordName, 'I') !== false) {
                    $chordName = '('.$chordName.')';
                }
                $chord = $chordName.$progressionFormulaArray[$i];
            }else{
                $chord = $chordName;
            }
            $chords[$i]['name'] = $chord;
            $chord = preg_replace('/\s+/', '', $chord);
            $chords[$i++]['path'] = str_replace('#','s', $chord);
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
    public function generatePop($variant, $chords){
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
                3 => array(0, 6, 5, 6),
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
                1 => array(4, 3, 0),
                2 => array(5, 3, 0, 4),
                3 => array(5, 4, 3, 4)
            );
            $prechorusProgressions = array(
                0 => array(3, 0, 4, 5),
                1 => array(5, 4, 3, 4),
                2 => array(5, 3, 0, 4)
            );
        }

        return array(
            'verse' => $this->translateIndexes($verseProgressions, $chords),
            'chorus' => $this->translateIndexes($chorusProgressions, $chords),
            'bridge' => $this->translateIndexes($bridgeProgressions, $chords),
            'prechorus' => $this->translateIndexes($prechorusProgressions, $chords)
        );
    }
    public function generateRock($variant, $chords){
        if ($variant == 'major'){
            $verseProgressions = array(
                0 => array(0, 3, 4),
                1 => array(0, 4, 3),
                2 => array(0, 4, 5),
                3 => array(0, 3, 5, 4),
                4 => array(0, 4, 5, 3),
                5 => array(0, 5, 3, 4),
                6 => array(0, 4, 5, 4, 0, 1, 1, 4)
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
                0 => array(0, 3, 4),
                1 => array(0, 4, 3),
                2 => array(0, 4, 5),
                3 => array(0, 3, 5, 4),
                4 => array(0, 4, 5, 3),
                5 => array(0, 5, 3, 4),
                6 => array(0, 4, 5, 4),
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
                1 => array(4, 3, 0),
                2 => array(5, 3, 0, 4),
                3 => array(5, 4, 3, 4)
            );
            $prechorusProgressions = array(
                0 => array(3, 0, 4, 5),
                1 => array(5, 4, 3, 4),
                2 => array(5, 3, 0, 4)
            );
        }

        return array(
            'verse' => $this->translateIndexes($verseProgressions, $chords),
            'chorus' => $this->translateIndexes($chorusProgressions, $chords),
            'bridge' => $this->translateIndexes($bridgeProgressions, $chords),
            'prechorus' => $this->translateIndexes($prechorusProgressions, $chords)
        );
    }
    public function generateBlues($variant, $chords){
        if ($variant == 'major'){
            $eightProgressions = array(
                0 => array(0, 0, 0, 0, 3, 3, 0, 0),
                1 => array(0, 0, 3, 0, 3, 3, 0, 0),
                2 => array(0, 3, 4, 0, 3, 3, 4, 0)
            );
            $twelveProgressions = array(
                0 => array(0, 0, 0, 0, 3, 3, 0, 0, 4, 3, 0, 0),
                1 => array(0, 0, 3, 0, 3, 3, 0, 0, 4, 3, 0, 0),
                2 => array(0, 3, 4, 0, 3, 3, 4, 0, 4, 3, 0, 0)
            );
        }else {
            $eightProgressions = array(
                0 => array(0, 0, 0, 0, 3, 3, 0, 0),
                1 => array(0, 0, 3, 0, 3, 3, 0, 0),
                2 => array(0, 3, 4, 0, 3, 3, 4, 0)
            );
            $twelveProgressions = array(
                0 => array(0, 0, 0, 0, 3, 3, 0, 0, 4, 3, 0, 0),
                1 => array(0, 0, 3, 0, 3, 3, 0, 0, 4, 3, 0, 0),
                2 => array(0, 3, 4, 0, 3, 3, 4, 0, 4, 3, 0, 0)
            );

        }

        return array(
            'eight' => $this->translateIndexes($eightProgressions, $chords),
            'twelve' => $this->translateIndexes($twelveProgressions, $chords)
        );
    }
    //translate index array into progression array
    public function translateIndexes($indexes, $chordsArray){

        $final = array();
        $j = 0;
        foreach ($indexes as $indexArray){
            $i = 0;
            $progression = "";
            $chordsInProgression = array();
            foreach ($indexArray as $index) {
                $progression = $progression.$chordsArray[$index]['name'];
                if ($i < count($indexArray)-1){
                    $progression = $progression.' - ';
                }
                $chordsInProgression[$i++] = $chordsArray[$index]['name'];
            }

            $final[$j]['progression'] = $progression;
            $final[$j++]['chords'] = $chordsInProgression;
        }
        return $final;
    }
}
