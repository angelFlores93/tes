<h4>Select a key</h4>

<ul id="piano" class="set">
    <div class="btn-group" data-toggle="buttons">
        <li id="c" class="white c "><p class="btn key_white">{{ Form::radio('key', $keys[0]->id, false, ['autocomplete' => 'off', 'hidden'=>'', 'class' => 'change']) }}{{ $keys[0]->name}}</p></li>
        <li class="black cs"><p class="btn key_black">C#<br>Db<br>{{ Form::radio('key', $keys[1]->id, false, ['autocomplete' => 'off', 'hidden'=>'']) }}</p></li>
        <li class="white d"><p class ="btn key_white">{{ $keys[2]->name}}<br>{{ Form::radio('key', $keys[2]->id, false, ['autocomplete' => 'off', 'hidden'=>'']) }}</p></li>
        <li class="black ds"><p class ="btn key_black">D#<br>Eb<br>{{ Form::radio('key', $keys[3]->id, false, ['autocomplete' => 'off', 'hidden'=>'']) }}</p></li>
        <li class="white e"><p class ="btn key_white">{{ $keys[4]->name}}<br>{{ Form::radio('key', $keys[4]->id, false, ['autocomplete' => 'off', 'hidden'=>'']) }}</p></li>
        <li class="white f"><p class ="btn key_white">{{ $keys[5]->name}}<br>{{ Form::radio('key', $keys[5]->id, false, ['autocomplete' => 'off', 'hidden'=>'']) }}</p></li>
        <li class="black fs"><p class ="btn key_black">F#<br>Gb<br>{{ Form::radio('key', $keys[6]->id, false, ['autocomplete' => 'off', 'hidden'=>'']) }}</p></li>
        <li class="white g"><p class ="btn key_white">{{ $keys[7]->name}}<br>{{ Form::radio('key', $keys[7]->id, false, ['autocomplete' => 'off', 'hidden'=>'']) }}</p></li>
        <li class="black gs"><p class ="btn key_black">G#<br>Ab<br>{{ Form::radio('key', $keys[8]->id, false, ['autocomplete' => 'off', 'hidden'=>'']) }}</p></li>
        <li class="white a"><p class ="btn key_white">{{ $keys[9]->name}}<br>{{ Form::radio('key', $keys[9]->id, false, ['autocomplete' => 'off', 'hidden'=>'']) }}</p></li>
        <li class="black as"><p class ="btn key_black">A#<br>Bb<br>{{ Form::radio('key', $keys[10]->id, false, ['autocomplete' => 'off', 'hidden'=>'']) }}</p></li>
        <li class="white b"><p class ="btn key_white">{{ $keys[11]->name}}<br>{{ Form::radio('key', $keys[11]->id, false, ['autocomplete' => 'off', 'hidden'=>'']) }}</p></li>
    </div>
   </ul>

