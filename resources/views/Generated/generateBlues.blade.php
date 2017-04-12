<div class="panel panel-default" id="bluesPanel">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" data-target="#blues">
        <h4 class="panel-title">
            <a>
                    <strong>Blues Progressions</strong>
                </a>
        </h4>
    </div>
    <div id="blues" class="panel-collapse collapse">
        <div class="panel-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                        <div class="row">


                            <div class="col-md-6">
                                <h4><strong>Eight-bar blues options</strong></h4>
                                <table class="table table-striped text-center">
                                    @foreach($bluesProgressions['eight'] as $progression)
                                    <tr>
                                        <td style="background-color: #631D39; color:white"><strong>Try this one</strong></td>
                                        @foreach($progression['chords'] as $chord)
                                            @if($counter++%2 == 0)
                                                <td style="background-color: #D73E1F; color: white">
                                                    {{$chord}}
                                                </td>
                                            @else
                                                <td style="background-color: #D65139; color:white">
                                                    {{$chord}}
                                                </td>
                                            @endif

                                        @endforeach
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                            <div class="col-md-6">
                                <h4><strong>Twelve-bar blues options</strong></h4>
                                <table class="table table-striped text-center">
                                    @foreach($bluesProgressions['twelve'] as $progression)
                                        <tr>
                                            <td style="background-color: #631D39; color:white"><strong>Try this one</strong></td>
                                            @foreach($progression['chords'] as $chord)
                                                @if($counter++%2 == 0)
                                                    <td style="background-color: #D73E1F; color: white">
                                                        {{$chord}}
                                                    </td>
                                                @else
                                                    <td style="background-color: #D65139; color:white">
                                                        {{$chord}}
                                                    </td>
                                                @endif
                                            @endforeach
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>



