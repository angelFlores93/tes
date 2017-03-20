<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    @include('scripts')
    <body>
        @include('header')
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    {!! Form::open(['route' => 'generate' ,'method'=>'GET']) !!}

                    <div class="form-group">
                        <div class="col-lg-4">
                            <select  class="form-control" id="key" name="key">
                                <option value="">Select a key...</option>

                                @if( isset($keys))
                                    @foreach($keys as $key)
                                        <option value="{{  $key->id  }}" > {{ $key->name}}  </option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-4">
                            <div class="btn-group">
                                {{ Form::radio('variant', 'major', true, ['checked' => 'checked']) }} Major
                                {{ Form::radio('variant', 'minor', false, []) }} Minor
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default" align="center">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                            Generate
                        </button>
                    </div>
                    {!! Form::close() !!}
                </div>
             </div>
        </div>

    </body>
</html>