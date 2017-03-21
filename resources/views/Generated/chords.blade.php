<div class="container">
    <div class="row">
        <h2>Chords in the key</h2>
        <table class="table">
            <thead>
                <tr>
                    @foreach ($chords as $chord)
                        <th class="text-center">{{$chord['name']}}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($chords as $chord)
                        <td class="text-center"><img src="{{asset('chords/'.$chord['path'].'.png')}}"></td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</div>