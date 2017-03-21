<div class="container">
    <div class="row">
        <h2>Chords in the key</h2>
        <table class="table">
            <thead>
                <tr>
                    @foreach ($chords as $chord)
                    <th class="text-center">{{$chord}}</th>
                    @endforeach
                </tr>
            </thead>
        </table>
    </div>
</div>