<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    @include('scripts')
    <body>
        @include('header')
        <div class ="container-fluid dark">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        {!! Form::open(['route' => 'generate' ,'method'=>'GET']) !!}
                        <div class="form-group text-center">
                            <div class="col-lg-4">
                                @include('pianoLayout')
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <div class="col-lg-4">
                                <h4>Select a variant</h4>
                                <div class="btn-group" data-toggle="buttons">

                                    <label class="btn active">
                                        {{ Form::radio('variant', 'major', true, ['checked' => 'checked', 'autocomplete' => 'off']) }} Major

                                    </label>

                                    <label class="btn ">
                                        {{ Form::radio('variant', 'minor', false, ['autocomplete' => 'off']) }} Minor
                                    </label>

                                </div>

                            </div>
                        </div>
                        <div class="form-group text-center">
                            <br>
                            <br>
                            <button type="submit" class="btn btn-default" align="center">
                                <i class="fa fa-music fa-2x" aria-hidden="true"></i><br>
                                Generate
                            </button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                 </div>
            </div>
        </div>




        <div class="container " >
                <div class="row" >
                    <div class="col-md-12 ">

                        <div id="sticky-anchor"></div>
                        <div id="sticky" class="container">

                            @if(isset($chords))
                                @include('Generated\chords')
                            @endif
                        </div>


                    </div>
                </div>
                <div class ="row">
                    <div class="col-md-12">

                        <div class="panel-group" id="accordion">
                            @if(isset($popProgressions))
                                <h2>Check out the progressions by genre</h2>
                                @include('Generated\generatePop')
                            @endif
                            @if(isset($rockProgressions))
                                @include('Generated\generateRock')
                            @endif
                            @if(isset($bluesProgressions))
                                @include('Generated\generateBlues')
                            @endif
                        </div>
                    </div>
                </div>
            </div>

    </body>
</html>


