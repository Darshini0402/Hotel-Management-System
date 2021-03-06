<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hotel Booking</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="admin/css/reg.css" type="text/css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $( function() {
                $( ".datepicker" ).datepicker({
                            dateFormat : 'yy-mm-dd'
                            });
            } );
        </script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script language="javascript">
			$( document ).ready(function() {
				   var now = new Date();

					var day = ("0" + now.getDate()).slice(-2);
					var month = ("0" + (now.getMonth() + 1)).slice(-2);

					var today = now.getFullYear() + "-" + (month) + "-" + (day);

					$('#ExpiryDate,#ExpiryDat').val(today);
					$('#ExpiryDate,#ExpiryDat').attr('min', today);
			});
		</script>
        <script src="bookingjs.js"> </script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="admin/css/reg.css" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <h1 style="font-weight: bold; font-family: 'Times New Roman', Times, serif; color: black; font-size: 50px; text-align: center;">Hotel Management System</h1>
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Customer details</a></li>
                <li><a data-toggle="tab" href="#menu1">Room Details</a></li>
                <li><a data-toggle="tab" href="#menu2">Travel Booking</a></li>
            </ul>
        
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <br></br>
                    <form method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="adult"> Adults </label> 
                                <input type="number" name="adult" min="0" max="15">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="child"> Children </label> 
                                <input type="number" name="child" min="0" max="15">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Enter</button>
                        <br></br>
                    </form>
                    <form method="POST">
                        <?php
                            $adno = 0;
                            $chno = 0;
                            if ($_SERVER["REQUEST_METHOD"]=='POST')
                            {
                                $adno = $_POST["adult"];
                                $chno = $_POST["child"];
                            }
                            for ($i=0;$i<$adno;$i++)
                            {?> <b>Adult</b> <?php echo $i+1; ?>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputname">Name</label>
                                        <input type="text" class="form-control" id="inputname" placeholder="Name">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputage">Age</label>
                                        <input type="number" class="form-control" id="inputage" placeholder="Age">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputemail">Email</label>
                                        <input type="email" class="form-control" id="inputemail" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputaadhar">Aadhar Number</label>
                                        <input type="tel" pattern="[0-9]{4} [0-9]{4} [0-9]{4}" class="form-control" id="inputaadhar" placeholder="xxxx xxxx xxxx">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputphone">Phone Number</label>
                                        <input type="tel" pattern="[0-9]{10}" class="form-control" id="inputphone" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputAddress">Address</label>
                                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="inputState">State</label>
                                        <input type="text" class="form-control" id="inputState" placeholder="State">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputCity">City</label>
                                        <input type="text" class="form-control" id="inputCity">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputZip">Zip</label>
                                        <input type="text" class="form-control" id="inputZip">
                                    </div>
                                </div>
                                <br></br>
                        <?php
                        }
                            for ($j=0;$j<$chno;$j++)
                            {?> <b>Child</b> <?php echo $j+1; ?>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputname">Name</label>
                                        <input type="text" class="form-control" id="inputname" placeholder="Name">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputage">Age</label>
                                        <input type="number" class="form-control" id="inputage" placeholder="Age">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputaadhar">Aadhar Number</label>
                                        <input type="number" class="form-control" id="inputaadhar" placeholder="Aadhar Number">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputAddress">Address</label>
                                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="inputState">State</label>
                                        <input type="text" class="form-control" id="inputState" placeholder="State">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputCity">City</label>
                                        <input type="text" class="form-control" id="inputCity">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputZip">Zip</label>
                                        <input type="text" class="form-control" id="inputZip">
                                    </div>
                                </div>
                                <br></br>
                            <?php }
                        ?>
                        <a href="#menu1">Continue<!--<button type="submit" class="btn btn-primary">Continue</button>--></a>
                        <br></br>
                    </form>
                </div>
            
                <div id="menu1" class="tab-pane fade"> 
                    <div class="container">
                        <!--<img class="img-responsive" src="images/home_banner.jpg" style="width:100%; height:180px;">-->     
                        <div class="well">
                            <h2>Book Now: </h2>
                            <hr>
                            <form action="" method="post" name="room_category">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="checkin">Check In :</label>&nbsp;&nbsp;&nbsp;
                                        <input id="ExpiryDate" type="date" name="checkin">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="checkout">Check Out:</label>&nbsp;
                                        <input id="ExpiryDat" type="date" name="checkout">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="roomcount">Rooms</label>
                                        <input type="number" name="roomcount" min="1" max="5" placeholder="Rooms" required>
                                    </div>
                                </div>
                                <button  type="submit" class="btn btn-lg btn-primary button" name="submit">Continue</button>  
                                <br>
                            </form>
                            <div style="position: absolute; top: 30px; left: 20px; width: 100px;">
                                <a href="booking.php"><i class="material-icons">home</i></a>
                            </div>
                        </div>  
                    </div>
                </div>

                <div id="menu2" class="tab-pane fade">
                    <div class="container">
                        <br></br>
                        <form>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="travelplan">
                                <label class="form-check-label" for="travelplan">
                                    Do you want to select a travel plan? 
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="touristguide">
                                <label class="form-check-label" for="touristguide">
                                    Do you wish to have a tourist guide? 
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="cabdriver">
                                <label class="form-check-label" for="cabdriver">
                                    Do you wish to have a cab along with a driver?
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="cab">
                                <label class="form-check-label" for="cabdriver">
                                    Do you prefer to rent a car alone?
                                </label>
                            </div>
                            <br></br>
                            <button  type="submit" class="btn btn-lg btn-primary button" name="submit">Confirm Details</button>
                        </form>
                    </div>
                    <br></br>
                    <br></br>
                    <a href="billing.php"><button type="submit" class="btn btn-lg btn-primary button" name="submit">Proceed with Billing</button></a>
                </div>    
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </body>
</html>
