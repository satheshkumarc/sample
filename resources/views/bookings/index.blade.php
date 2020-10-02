<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dinning Booking</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="css/bookings/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/bookings/css/style.css">
</head>
<body>            


    <div class="main">
    @if(session()->has('message'))
        <div class="alert alert-success p-4" style="border: 5px solid #c3e6cb;text-align:right;width:40%;background:#d4edda;margin-bottom:10px;padding:5px;margin-left:650px;color:#155724" id="saved_message" role="alert">
        {{session()->get('message')}}
    </div>
    @endif
        <div class="container">
            <div class="booking-content">
                <div class="booking-image">
                    <img class="booking-img" src="images/form-img.jpg" alt="Booking Image">
                </div>
                <div class="booking-form">
                    <form id="booking-form" action="{{ url('bookings') }}" method="POST">
                    @csrf    
                    <h2>Booking place for your dinner!</h2>
                        <div class="form-group form-input">
                            <input type="text" name="name" id="name" required/>
                            <label for="name" class="form-label">Your name</label>
                        </div>
                        <div class="form-group form-input">
                            <input type="text" name="email" id="email" required/>
                            <label for="email" class="form-label">Your email</label>
                        </div>
                        <div class="form-group form-input">
                            <input type="number" name="phone" id="phone" required />
                            <label for="phone" class="form-label">Your phone number</label>
                        </div>
                        <div class="form-group form-input">
                            <input type="date" name="date" id="date" required />
                            <label for="date" class="form-label">Select Date</label>
                        </div>                        
                        <div class="form-group">
                            <div class="select-list">
                                <select name="time" style="background:black;color:white;">
                                    <option value="">Time</option>
                                    <option value="6pm">6:00 PM</option>
                                    <option value="7pm">7:00 PM</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-radio">
                            <label class="label-radio"> Select Your Dining Space</label>
                            <div class="radio-item-list">
                                <span class="radio-item">
                                    <input type="radio" name="number_people" value="2" id="number_people_2" />
                                    <label for="number_people_2">2</label>
                                </span>
                                <span class="radio-item active">
                                    <input type="radio" name="number_people" value="4" id="number_people_4" checked="checked" />
                                    <label for="number_people_4">4</label>
                                </span>
                                <span class="radio-item">
                                    <input type="radio" name="number_people" value="6" id="number_people_6" />
                                    <label for="number_people_6">6</label>
                                </span>
                                <span class="radio-item">
                                    <input type="radio" name="number_people" value="8" id="number_people_8" />
                                    <label for="number_people_8">8</label>
                                </span>
                                <span class="radio-item">
                                    <input type="radio" name="number_people" value="10" id="number_people_10" />
                                    <label for="number_people_10">10</label>
                                </span>
                            </div>
                        </div>

                        <div class="form-submit">
                            <input type="submit" value="Book now" class="submit" id="submit" name="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="css/bookings/vendor/jquery/jquery.min.js"></script>
    <script src="js/bookings/main.js"></script>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
    jQuery(document).ready(function (){
      jQuery('#saved_message').delay(3000).fadeOut();
    });
</script>    
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>