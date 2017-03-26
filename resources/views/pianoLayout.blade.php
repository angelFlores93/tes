<h4>Select a key</h4>
<ul id="piano" class="set">
    <li class="white c"><p class ="key_white">{{ $keys[0]->name}}<br>{{ Form::radio('key', $keys[0]->id, false, []) }}</p></li>
    <li class="black cs"><p class ="key_black">C#<br>Db<br>{{ Form::radio('key', $keys[1]->id, false, []) }}</p></li>
    <li class="white d"><p class ="key_white">{{ $keys[2]->name}}<br>{{ Form::radio('key', $keys[2]->id, false, []) }}</p></li>
    <li class="black ds"><p class ="key_black">D#<br>Eb<br>{{ Form::radio('key', $keys[3]->id, false, []) }}</p></li>
    <li class="white e"><p class ="key_white">{{ $keys[4]->name}}<br>{{ Form::radio('key', $keys[4]->id, false, []) }}</p></li>
    <li class="white f"><p class ="key_white">{{ $keys[5]->name}}<br>{{ Form::radio('key', $keys[5]->id, false, []) }}</p></li>
    <li class="black fs"><p class ="key_black">F#<br>Gb<br>{{ Form::radio('key', $keys[6]->id, false, []) }}</p></li>
    <li class="white g"><p class ="key_white">{{ $keys[7]->name}}<br>{{ Form::radio('key', $keys[7]->id, false, []) }}</p></li>
    <li class="black gs"><p class ="key_black">G#<br>Ab<br>{{ Form::radio('key', $keys[8]->id, false, []) }}</p></li>
    <li class="white a"><p class ="key_white">{{ $keys[9]->name}}<br>{{ Form::radio('key', $keys[9]->id, false, []) }}</p></li>
    <li class="black as"><p class ="key_black">A#<br>Bb<br>{{ Form::radio('key', $keys[10]->id, false, []) }}</p></li>
    <li class="white b"><p class ="key_white">{{ $keys[11]->name}}<br>{{ Form::radio('key', $keys[11]->id, false, []) }}</p></li>
</ul>