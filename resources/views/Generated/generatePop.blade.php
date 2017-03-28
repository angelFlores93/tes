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
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <h4><strong>Verse options</strong></h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="btn-group">

                                    @foreach($popProgressions['verse'] as $progression)
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
                                    @foreach($popProgressions['chorus'] as $progression)
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
                                    @foreach($popProgressions['prechorus'] as $progression)
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
                                    @foreach($popProgressions['bridge'] as $progression)
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



