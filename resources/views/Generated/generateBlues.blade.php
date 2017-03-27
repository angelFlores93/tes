<div class="panel panel-default" id="bluesPanel">
    <div class="panel-heading">
        <h4 class="panel-title">
            <h4><a data-toggle="collapse" data-target="#blues"
                   href="#rock">
                    <strong>Blues Progressions</strong>
                </a></h4>
        </h4>
    </div>
    <div id="blues" class="panel-collapse collapse">
        <div class="panel-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <h4><strong>Eight-bar blues options</strong></h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="btn-group">

                                    @foreach($bluesProgressions['eight'] as $progression)
                                        <div class="col-md-12">
                                            <div class="row">

                                                @foreach($progression['chords'] as $chord)
                                                    <div class="col-md-1">
                                                        {{$chord}}
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <h4><strong>Twelve-bar blues options</strong></h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="btn-group">

                                    @foreach($bluesProgressions['twelve'] as $progression)
                                        <div class="col-md-12">
                                            <div class="row">

                                                @foreach($progression['chords'] as $chord)
                                                    <div class="col-md-1">
                                                        {{$chord}}
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
    </div>
</div>



