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

            .slideshow-container {
                max-width: 1000px;
                position: relative;
                margin: auto;
            }
            .fade {
                -webkit-animation-name: fade;
                -webkit-animation-duration: 1.5s;
                animation-name: fade;
                animation-duration: 1.5s;
            }
            @-webkit-keyframes fade {
                from {opacity: .4} 
                to {opacity: 1}
            }

            @keyframes fade {
                from {opacity: .4} 
                to {opacity: 1}
            }



        </style>
    </head>
    <body>

        <?php include 'navBar.php'; ?>
        <div class="container">

            <div class="row">

                <div class="slideshow-container">

                    <?php
                    for ($i=1;$i<=3;$i++){
                    echo "<div class='mySlides fade'>
                       
                        <img src='images/imageimage{$i}.jpg'/>
                        
                    </div>";
                    }
                    
 
                    ?>



                </div>

            </div>

            <div class="row">
                <div class="col-md-6">

                    <h3>Who are we?</h3>
                    <p>Just recently launched in Singapore, we are lovers of good design made to last. We hope to bring affordable furniture that can be appreciated for all generations to come. We provide service to customise each furniture piece with a variety of upholstery selection. Do visit us often as we continue to grow our collection with new designs!</p>



                </div>

                <div class="col-md-6">

                    <h3>The timeless classic material</h3>
                    <p>Every piece displayed in our showroom is hand-crafted using quality wood found in its local region. Our current collection is based on mid-century Danish designs, timeless in its own elegance and simplicity. </p>


                </div>
            </div>

        </div>
        <script>
            var slideIndex = 0;
            showSlides();

            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1
                }

                slides[slideIndex - 1].style.display = "block";

                setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
        </script>
    </body>
</html>
