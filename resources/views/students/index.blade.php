@extends('students.form')
@section('students_form')
<h2 class="title">Registration Form</h2>
<form method="POST" action="{{ url('students') }}">
                       @include('students.block')
</form>

@endsection
