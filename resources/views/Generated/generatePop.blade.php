<div class="panel panel-default" id="popPanel">
    <div class="panel-heading">
        <h4 class="panel-title">
            <h4><a data-toggle="collapse" data-target="#pop"
                   href="#pop">
                    <strong>Pop Progressions</strong>
                </a></h4>
        </h4>
    </div>
    <div id="pop" class="panel-collapse collapse in">
        <div class="panel-body">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
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
                                                {{ Form::radio('verse',$progression) }} {{$progression}}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
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
                                                {{ Form::radio('chorus',$progression) }} {{$progression}}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
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
                                                {{ Form::radio('prechorus',$progression) }} {{$progression}}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
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
                                                {{ Form::radio('bridge',$progression) }} {{$progression}}
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
</div>



