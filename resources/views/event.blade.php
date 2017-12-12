@extends('layouts.app')

@section('content')
 <div class="container">
<div class="row">
@include('includes.list-group')
    <div class="col-md-9">
            <div class="panel panel-default">
            <table class="table">
              <tr>
                <td class="middle">
                  <div class="media">
                    <div class="media-left">
                      
                        <img class="media-object" src="{{ route('account.image', ['filename' => $event->type . '.jpg']) }}" alt="..." style="border-radius: 25%; height: 200px; width: 200px;">
                      
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Sporto šaka: {{$event->type}}</h4>
                      <address>
                        <br>
                        Vieta kur vyks veiksmas: {{$event->place}}
                      </address>
                      <address>
                        <br>
                        Kiek dar reikia dalyvių: {{$event->number}}
                      </address>
                      <address>
                        <br>
                        Įvykio aprašymas: {{$event->description}}
                      </address>
                    </div>
                  </div>
                </td>
                <td width="100" class="middle">
                  <div>
                    <a href="{{route('member.store', $event->id)}}" class="btn btn-circle btn-default btn-md" title="Dalyvauti">
                      <i class="glyphicon glyphicon-check"></i>
                    </a>
                    <a href="#" class="btn btn-circle btn-default btn-md" title="Grįžti atgal">
                      <i class="glyphicon glyphicon-arrow-left"></i>
                    </a>
                  </div>
                </td>
              </tr>
              <td>
                    @foreach($event->coments as $coment)
                    <div class="media">
                        <div class="media-left media-top">

                              
                                <img class="media-object img-circle" src="{{ route('account.image', ['filename' => $coment->user->id . '.jpg']) }}" alt="..." style="width: 50px; height: 50px;">
                              
                        </div>
                        <div class="media-body">
                              <h4 class="media-heading">{{$coment->user->name}}</h4>
                              <p class="coment-time">{{$coment->created_at}}</p>
                              {{$coment->coment}}
                        </div>
                    </div>
                    @endforeach
                    <div id="coment-form">
                        <form class="form-horizontal" method="POST" action="{{ route('coment.store', $event->id) }}">
                              {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('coment') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <textarea name="coment" class="form-control" value="{{ old('coment')  }}" placeholder="Tavo komentaras" style="margin-top: 30px"></textarea>

                                @if ($errors->has('coment'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('coment') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                     Komentuoti
                                </button>
                            
                            </div>
                        </div>
                        </form>
                          
                    </div>
                  
              </td>
            </table>            
          </div>
     </div>
     
 </div>
     
 </div>
@endsection

