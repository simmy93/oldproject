@extends('layouts.app')

@section('content')
@include('includes.message-block')
    <!-- content -->
    <div class="container">
      <div class="row">
      @include('includes.list-group')
        <div class="col-md-9">
         <table class="table">
           <thead>
             <th>Vardas</th>
             <th>Pavardė</th>
             <th>Slpayvardis</th>
             <th>El. paštas</th>
             <th>Rolė(User/Admin)</th>
             <th></th>
           </thead>
           <tbody>
             @foreach($users as $user)
             <tr>
               <form action="{{route('admin.changes')}}" method="post">
                 <td>{{ $user->name}}</td>
                 <td>{{ $user->lname}}</td>
                 <td>{{ $user->username}}</td>
                 <td>{{ $user->email}} <input type="hidden" name="email" value="{{ $user->email}}"></td>
                 <td><label class="radio-inline"><input type="radio" name="role_user" {{ $user->hasRole('User') ? 'checked' : ''}}>User</label><label class="radio-inline"><input type="radio" name="role_admin" {{ $user->hasRole('Admin') ? 'checked' : ''}}>Admin</label></td>
                 
                 {{csrf_field()}}
                 <td><button class="btn-success btn-sm" type="submit">Išsaugoti pakeitimus</button></td>
               </form>
             </tr>
             @endforeach
           </tbody>
         </table>
          {{$users->render()}}
        </div>
      </div>
    </div>

    
 
@endsection

