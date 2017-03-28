<div class="panel panel-default" id="rockPanel">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" data-target="#rock">
        <h4 class="panel-title">
            <a>
                    <strong>Classic Rock Progressions</strong>
                </a>
        </h4>
    </div>
    <div id="rock" class="panel-collapse collapse">
        <div class="panel-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
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
                    <div class="col-md-12">
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

                </div>
                <div class="row">
                    <div class="col-md-12">
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
                    <div class="col-md-12">
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
                </div>
            </div>
        </div>
    </div>
</div>



