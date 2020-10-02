<!doctype html>
<html lang="en">
  <head>
  	<title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/nav/css/style.css">
        
    </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(/images/bg_1.jpg);">
	  			<div class="user-logo">
	  				<div class="img" style="background-image: url(/images/avatar.jpg);"></div>
	  				@if (Auth::user())
                      <h3>{{ Auth::user()->name }}</h3>
                    @endif
                  </div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="{{ url('/') }}"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          <li>
            <a href="{{ url('students/create') }}"><span class="fa fa-gift mr-3"></span> Registration Form</a>
          </li>
          <li>
            <a href="{{ url('students') }}"><span class="fa fa-gift mr-3"></span> Registred User</a>
          </li>
          <li>
            <a href="{{ url('bookings') }}"><span class="fa fa-trophy mr-3"></span> Dinning Booking</a>
          </li>
          <li>
            <a href="{{ url('bookings/lists') }}"><span class="fa fa-trophy mr-3"></span> Dinning Booking Lists</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        @yield('dashboard_content')
      </div>
		</div>

    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

    <script src="js/nav/popper.js"></script>
    <script src="js/nav/bootstrap.min.js"></script>
    <script src="js/nav/main.js"></script>

 
  </body>
</html>