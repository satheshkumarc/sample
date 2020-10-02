@extends('navmain')
@section('dashboard_content')
<h2 class="mb-4">Booking Lists</h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Bookings Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Date & Timings</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
@foreach($bookings as $booking)
    <tr>
      <td>{{$booking->email}}</td>
      <td>{{$booking->phone}}</td>
      <td>{{$booking->date}} :: {{$booking->time}} </td>
      <td>
        @if($booking->aproove == 1)
        <div class="alert alert-success" role="alert">
          Aprooved
      </div>
        @else
        <a href="{{ url('bookings/aproove') }}/{{$booking->id}}" class="btn btn-warning">Aproove</a>
      @endif
      </td>
    </tr>
@endforeach
</tbody>
</table>

@endsection