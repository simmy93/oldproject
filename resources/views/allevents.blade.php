@extends('layouts.app')

@section('content')
@include('includes.message-block')
    <!-- content -->
    <div class="container">
      <div class="row">
      @include('includes.list-group')
        <div class="col-md-9">
          <div class="panel panel-default">
            <table class="table">
            @foreach($events as $event)
            
              <tr class="clickable-row" data-href="{{route('event.show', $event->id)}}">
                <td class="middle">
                  <div class="media">
                    <div class="media-left">
                      
                      <img class="media-object" src="{{ route('account.image', ['filename' => $event->type . '.jpg']) }}" alt="..." style="border-radius: 25%; height: 100px; width: 100px;">

                      
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">{{$event->type}}</h4>
                      <address>
                        <br>
                        {{$event->place}}
                      </address>
                    </div>
                  </div>
                </td>
                <td width="100" class="middle">
                  <div>
                    <a href="{{route('member.store', $event->id)}}" class="btn btn-circle btn-default btn-md" title="Dalyvauti">
                      <i class="glyphicon glyphicon-check"></i>
                    </a>
                    
                  </div>
                </td>
              </tr>
              
              @endforeach
            </table>            
          </div>

          {{$events->render()}}
        </div>
      </div>
    </div>

    
 
@endsection

