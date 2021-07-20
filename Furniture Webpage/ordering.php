<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <style>
            hr {
                border-color: black;
            }
        </style>
    </head>
    <body>

        <?php include 'navBar.php'; ?>


        <div class="container">
            <div class="col-lg-7">

                <h3>Find Us</h3>
                <a href="mailto:enquiry@roomofwoods.com">enquiry@roomofwoods.com</a>




                <p>Our showroom address:</p>
                <p>Room of Woods(Pte.)Ltd.<br/>
                    No.18 Sin Ming Lane #07-27<br/>
                    Singapore 573960


                <h3>Mode of payment</h3>
                <p>Cash.<br/>
                    Cheque <br/>
                    Bank Transfer

                <p>Please read our<a href="terms.php"> terms and conditions</a></p>

                <p>Do contact us by <a href="contact.php">clicking here</a></p>
            </div>
            <div class="col-lg-5">
                <div id="map" style="width:100%;height:350px"></div>

                <script>
                    function myMap() {
                        var mapCanvas = document.getElementById("map");
                        var mapOptions = {
                            center: new google.maps.LatLng(1.358605, 103.833568),
                            zoom: 15
                        }
                        var map = new google.maps.Map(mapCanvas, mapOptions);
                    }
                </script>

                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBxazOj-QzL1ZzphuAfEFwm-djvTVRk0Q&callback=myMap"></script>
            </div>
        </div>
    </body>
</html>
