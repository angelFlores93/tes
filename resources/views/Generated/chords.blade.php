<h2>Chords in the key</h2>
<table class="table">
    <thead>
        @foreach ($chords as $chord)
            <th class="text-center">{{$chord['name']}}</th>
        @endforeach
    </thead>
    <tbody>
        <tr>
            @foreach ($chords as $chord)
               <td> <img src="{{asset('chords/'.$chord['path'].'.png')}}"></td>
            @endforeach
        </tr>
    </tbody>
</table>

