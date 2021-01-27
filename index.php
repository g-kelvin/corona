<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Risk at (mass-gathering) events under COVID-19</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>

    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">

        <div class="wrapper wrapper--w780">
            <H2>Risk at (mass-gathering) events under COVID-19</H2>
            <B style = "color:red">Notes*</B><br>
            The calculations were made with a lot of uncertain assumptions. Please use the tool only as a guide.
            It is understandable that some events cannot be cancelled for various reasons.
            Even in such cases, please:
            Follow the 3Ws <br><br>
            <li>Wear a face mask,</li>
              <li>  Wash your hands, and</li>
               <li> Watch your distance</li>
               <li> Avoid the 3Cs</li>
               <li> Closed spaces with poor ventilation,</li>
               <li> Crowded places with many people nearby, and</li>
               <li> Close-contact settings such as close-range conversations</li><br>

            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title" >COVID-19 RISKS </h2>
                    <p style="color: red" > Enter the Data in the fields below. </p><br><br>
                   
                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-3" type="number" placeholder="Newly Daily reported cases" name="daily" required>
                        </div>
                         <div class="input-group">
                            <input class="input--style-3" type="number" placeholder="Population in the area" name="pop" required>
                        </div>

                         <div class="input-group">
                            <input class="input--style-3" type="number" placeholder="Attendees at the event" name="att" required>
                        </div>
                        <p style="color: white">Will a screening for the presence of symptoms be conducted? (Are people with symptoms NOT allowed to attend?) <br><br>
                         <input type="radio"  name="val" value="1" required>
                         <label for="1">Yes</label><br>
                         <input type="radio"  name="val" value="2">
                         <label for="2">No</label><br>  </p> <BR>                  
                    
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit" name="submit">Submit</button>

                             <h2 class="title" style="color: red">RESULTS </h2> 
                         <?php
                                if(isset($_POST['submit'])){
                                    $pop = $_POST['pop'];
                                    $daily = $_POST['daily'];
                                    $att = $_POST['att'];
                                    $val = $_POST['val'];


                                    $spop = 100000;
                                    $sdaily = 100;
                                    $satt = 300;
                                    $start = 0;


                                    if($val == 1){
                                    $x = $pop/$daily;
                                    $pro = $x / $att;
                                    echo " <p style='color: white'> Probability that there will be at least one infectious person at the event given Daily Cases: $daily , Population: $pop and Attendee: $att is: <br>"."<h1 style='color: white'>".number_format($pro,2)." %"." </h1><br>";

                                    if($pro <= 35){
                                        echo "<p style='color: white'> Expected number of infectious people at the event:<br> <h1 style='color: white'> $start </h1> </p>";
                                    } 
                                    elseif ($pro <= 45 )
                                    {
                                        $y = $start + 1;
                                        echo "<p style='color: white'> Expected number of infectious people at the event:<br> <h1 style='color: white'> $y </h1> </p>";
                                        
                                    }

                                    elseif ($pro <= 60 )
                                    {
                                        $y = $start + 5;
                                        echo "<p style='color: white'> Expected number of infectious people at the event:<br> <h1 style='color: white'> $y </h1> </p>";
                                       

                                        
                                    }
                                    elseif ($pro <= 85 )
                                    {
                                        $y = $start + 11;
                                        echo "<p style='color: white'> Expected number of infectious people at the event:<br> <h1 style='color: white'> $y </h1> </p>";
                                       

                                        
                                    }

                                    elseif ($pro <= 100 )
                                    {
                                        $y = $start + 22;
                                        echo "<p style='color: white'> Expected number of infectious people at the event:<br> <h1 style='color: white'> $y </h1> </p>";
                                       

                                        
                                    }
                                    elseif ($pro > 100 )
                                    {
                                        $y = $start + 50;
                                        echo "<p style='color: white'> Expected number of infectious people at the event:<br> <h1 style='color: white'> $y </h1> </p>";
                                       

                                        
                                    }
                                }
                                elseif ($val == 2) {
                                     $x = $pop/$daily;
                                    $pro = $x / $att;
                                    $vall = $pro+10;
                                    $startt = 25;
                                    echo " <p style='color: white'> Probability that there will be at least one infectious person at the event given Daily Cases: $daily , Population: $pop and Attendee: $att is: <br>"."<h1 style='color: white'>".number_format($vall,2)." %"." </h1><br>";

                                    if($vall <= 35){
                                        echo "<p style='color: white'> Expected number of infectious people at the event:<br> <h1 style='color: white'> $startt </h1> </p>";
                                    } 
                                    elseif ($vall <= 45 )
                                    {
                                        $y = $startt + 1;
                                        echo "<p style='color: white'> Expected number of infectious people at the event:<br> <h1 style='color: white'> $y </h1> </p>";
                                        
                                    }

                                    elseif ($vall <= 60 )
                                    {
                                        $y = $startt + 5;
                                        echo "<p style='color: white'> Expected number of infectious people at the event:<br> <h1 style='color: white'> $y </h1> </p>";
                                       

                                        
                                    }
                                    elseif ($vall <= 85 )
                                    {
                                        $y = $startt + 11;
                                        echo "<p style='color: white'> Expected number of infectious people at the event:<br> <h1 style='color: white'> $y </h1> </p>";
                                       

                                        
                                    }

                                    elseif ($vall <= 100 )
                                    {
                                        $y = $startt + 22;
                                        echo "<p style='color: white'> Expected number of infectious people at the event:<br> <h1 style='color: white'> $y </h1> </p>";
                                       

                                        
                                    }
                                    elseif ($vall > 100 )
                                    {
                                        $y = $startt + 50;
                                        echo "<p style='color: white'> Expected number of infectious people at the event:<br> <h1 style='color: white'> $y </h1> </p>";
                                       

                                        
                                    }
                                }

                                }
                                else
                                {
                                    echo " <p style='color: white'> Error </p>";
                                }

                            ?>              
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->