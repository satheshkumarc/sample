@extends('navmain')
@section('dashboard_content')
<a href="{{ url('students/create') }}" class="btn btn-info">Add User</a>

              @if(session()->has('message'))
                <div class="alert alert-success bg-gra-01 p-4" id="saved_message" role="alert">
                    {{session()->get('message')}}
                </div>
                @endif
<h2 class="mb-4">Registered users</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
@foreach($students as $student)
  <tr>
      <td>{{$student->firstname}}</td>
      <td>{{$student->lastname}}</td>
      <td>{{$student->email}}</td>
      <td class="d-flex"><a href="{{ url('/students') }}/{{$student->id}}/edit" class="btn btn-primary">EDIT</a> <form action="{{ url('/students') }}/{{$student->id}}" method="post">@csrf
      @method('delete')
      <button type="submit" class="btn btn-danger">DELETE</button></form></td>
    </tr>
@endforeach
</tbody>
</table>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
    jQuery(document).ready(function (){
      jQuery('#saved_message').delay(1000).fadeOut();
    });
</script>
@endsection
