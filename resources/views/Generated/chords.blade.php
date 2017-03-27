

    <h2>Chords in the key</h2>
    <table class="table">

        @foreach ($chords as $chord)
        <tr>

            <td class="text-center">{{$chord['name']}}<br><img src="{{asset('chords/'.$chord['path'].'.png')}}"></td>
        </tr>
            @endforeach

    </table>

