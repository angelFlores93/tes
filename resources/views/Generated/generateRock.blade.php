<div class="panel panel-default" id="rockPanel">
    <div class="panel-heading">
        <h4 class="panel-title">
            <h4><a data-toggle="collapse" data-target="#rock"
                   href="#rock">
                    <strong>Classic Rock Progressions</strong>
                </a></h4>
        </h4>
    </div>
    <div id="rock" class="panel-collapse collapse">
        <div class="panel-body">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4><strong>Verse options</strong></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="btn-group">

                                        @foreach($rockProgressions['verse'] as $progression)
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        {{ Form::radio('verse',$progression['progression']) }}
                                                    </div>
                                                    @foreach($progression['chords'] as $chord)
                                                        <div class="col-md-2">
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
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4><strong>Chorus options</strong></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="btn-group">
                                        @foreach($rockProgressions['chorus'] as $progression)
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        {{ Form::radio('chorus',$progression['progression']) }}
                                                    </div>
                                                    @foreach($progression['chords'] as $chord)
                                                        <div class="col-md-2">
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
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4><strong>Prechorus options</strong></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="btn-group">
                                        @foreach($rockProgressions['prechorus'] as $progression)
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        {{ Form::radio('prechorus',$progression['progression']) }}
                                                    </div>
                                                    @foreach($progression['chords'] as $chord)
                                                        <div class="col-md-2">
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
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4><strong>Bridge options</strong></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="btn-group">
                                        @foreach($rockProgressions['bridge'] as $progression)
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        {{ Form::radio('bridge',$progression['progression']) }}
                                                    </div>
                                                    @foreach($progression['chords'] as $chord)
                                                        <div class="col-md-2">
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
</div>



