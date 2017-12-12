@extends('layouts.app')

@section('content')
@include('includes.message-block')
<div class="container">

    <div class="row">
    @include('includes.list-group')
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Įvykio kūrimas</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="post" action="{{route('event.create')}}">
                       {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('place') ? ' has-error' : '' }}">
                            <label for="place" class="col-md-4 control-label">Įvykio vieta</label>

                            <div class="col-md-6">
                                <input id="place" type="text" class="form-control" name="place" value="{{ old('place') }}">

                                @if ($errors->has('place'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('place') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('start') ? ' has-error' : '' }}">
                            <label for="start" class="col-md-4 control-label">Įvykio pradžia</label>

                            <div class="col-md-6">
                                <input id="start" type="datetime-local" class="form-control" name="start" value="{{ old('start') }}">

                                @if ($errors->has('start'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('start') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('finish') ? ' has-error' : '' }}">
                            <label for="finish" class="col-md-4 control-label">Įvykio pabaiga</label>

                            <div class="col-md-6">
                                <input id="finish" type="datetime-local" class="form-control" name="finish" value="{{ old('finish') }}">

                                @if ($errors->has('finish'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('finish') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <label for="type" class="col-md-4 control-label">Sporto rūšis</label>

                            <div class="col-md-6">
                                <select name="type" class="form-control">
                                        <option value="Krepšinis">Basketball</option>
                                        <option value="Tinklinis">Volleyball</option>
                                        <option value="Lauko tenisas">Tennis</option>
                                        <option value="Futbolas">Football</option>
                                        <option value="Stalo tenisas">Table tennis</option>
                                        <option value="Skersinis/Lygiagratės">Workout</option>s
                                        <option value="Kitas sportas">Other</option>
                                </select>

                                @if ($errors->has('type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('number') ? ' has-error' : '' }}">
                            <label for="number" class="col-md-4 control-label">Reikalingas dalyvių skaičius</label>

                            <div class="col-md-6">
                                <input id="number" type="number" class="form-control" name="number" value="{{ old('number') }}">

                                @if ($errors->has('number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Įvykio aprašymas</label>

                            <div class="col-md-6">
                                <textarea name="description" class="form-control" value="{{ old('description') }}"></textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                     Sukurti įvykį
                                </button>
                            
                            </div>
                        </div>
                    <input type="hidden" value="{{Session::token()}}" name="_token">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>s
@endsection

