@extends('students.form')
@section('students_form')
<h2 class="title">Update User Details</h2>
<form method="POST" action="{{ url('students') }}/{{$students->id}}">
          
@method('PATCH')
 @include('students.block')
</form>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<script>
 $(document).ready(function () {
  $( "#test_submit" ).replaceWith( '<button class="btn btn--radius-2 btn--blue" type="submit" id="test_update" name="test_update">Update</button>' );

});
</script>
@endsection
