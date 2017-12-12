        <div class="col-md-3">
          <div class="list-group">
          	<a href="{{url('/home')}}" class="list-group-item">Įvykio kūrimas</a>
            <a href="{{route('events.all')}}" class="list-group-item">Visi įvykiai <span class="badge">10</span></a>
            <a href="{{route('events.my')}}" class="list-group-item">Mano sukurti įvykiai<span class="badge">4</span></a>
            <a href="{{route('events.joined')}}" class="list-group-item">Įvykiai, kuriuose dalyvauju<span class="badge">3</span></a>
            @if(Auth::user()->hasAnyRole('Admin'))
            <a href="{{route('users.all')}}" class="list-group-item">Visi vartotojai<span class="badge">3</span></a>
            @endif
            <a href="" class="list-group-item">Įvykio paieška</a>
          </div>
        </div><!-- /.col-md-3 -->
