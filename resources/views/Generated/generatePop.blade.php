<div class="panel panel-default" id="popPanel">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" data-target="#pop">
        <h4 class="panel-title">
            <a >
                    <strong>Pop Progressions</strong>
                </a>
        </h4>
    </div>
    <div id="pop" class="panel-collapse collapse">
        <div class="panel-body">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-6">
                        <h4><strong>Verse options</strong></h4>
                        <table class="table table-striped text-center">
                            @foreach($popProgressions['verse'] as $progression)
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
                        <h4><strong>Chorus options</strong></h4>
                        <table class="table table-striped text-center">
                            @foreach($popProgressions['chorus'] as $progression)
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
                <div class="row">

                    <div class="col-md-6">
                        <h4><strong>Prechorus options</strong></h4>
                        <table class="table table-striped text-center">
                            @foreach($popProgressions['prechorus'] as $progression)
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
                        <h4><strong>Bridge options</strong></h4>
                        <table class="table table-striped text-center">
                            @foreach($popProgressions['bridge'] as $progression)
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



