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
        <?php include 'productData.php'; ?>




        <div class="container"> 
            <div class="row">

                <div class="col-lg-5">

                    <div class="panel panel-default">
                        <div class="panel-body">

                            
                            <img class="img-responsive" src="images/sofa03.jpg">

                        </div>
                    </div>

                </div>

                <div class="col-lg-7">
                    <?php
                    foreach ($newsArr as $index => $number) {

                        foreach($number as $value){
                            echo "$value <br/>";
                        }
                    }
                    ?>

                </div>

            </div>

        </div>

    </body>
</html>
