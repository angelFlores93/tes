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
                                <div class="btn-group">
                                    {{ Form::radio('variant', 'major', true, ['checked' => 'checked']) }} Major
                                    {{ Form::radio('variant', 'minor', false, []) }} Minor
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-default" align="center">
                                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                Generate
                            </button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                 </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    @if(isset($chords))
                        @include('Generated\chords')
                    @endif
                </div>
                <div class="col-md-10">
                    <h2>Check out the progressions by genre</h2>
                    <div class="panel-group" id="accordion">
                        @if(isset($popProgressions))
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


