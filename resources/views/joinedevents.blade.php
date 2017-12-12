@extends('layouts.app')

@section('content')
 
    <!-- content -->
    <div class="container">
      <div class="row">
      @include('includes.list-group')
        <div class="col-md-9">
          <div class="panel panel-default">
            <table class="table">
            @foreach(Auth::user()->members as $member)
            
              <tr>
                <td class="middle">
                  <div class="media">
                    <div class="media-left">
                      <img class="media-object" src="{{ route('account.image', ['filename' => $member->event->type . '.jpg']) }}" alt="..." style="border-radius: 25%; height: 100px; width: 100px;">
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">{{$member->event->type}}</h4>
                      <address>
                        <br>
                        {{$member->event->place}}
                      </address>
                    </div>
                  </div>
                </td>
                <td width="100" class="middle">
                  <div>
                    <a href="{{route('event.show', $member->event->id)}}" class="btn btn-circle btn-default btn-md" title="Peržiūrėti">
                      <i class="glyphicon glyphicon-question-sign"></i>
                    </a>
                    <a href="{{route('member.delete', $member->event->id)}}" class="btn btn-circle btn-danger btn-md" title="Nebedalyvauti">
                      <i class="glyphicon glyphicon-log-out"></i>
                    </a>
                  </div>
                </td>
              </tr>
              
              @endforeach
            </table>            
          </div>

          <div class="text-center">
            <nav>
              <ul class="pagination">
                <li>
                  <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                  <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
 
@endsection

