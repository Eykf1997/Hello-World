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
            .thumbnail{
                border: thin gray solid;
                border-radius: 0px !important;
                margin: 0 5px;
            }

            .image_size{
                width: 150px;
                height: 150px;
     
            }



        </style>
    </head>
    <body>
        <?php include 'navBar.php'; ?>
        <?php include 'productData.php' ?>
        <div class="container">

        <div class="row">


            <?php
            $catCode = isset($_GET["cat"]) ? $_GET["cat"] : "ac";




            foreach ($productArr[$catCode] as $itemCode => $itemDetails) {
                echo " <div class='col-lg-2 '>
                        <div class='thumbnail'>
                        
                <a href='collectionDetail.php?cat=$catCode&itemCode=$itemCode'><img src='images/$catCode/row_{$catCode}{$itemCode}_m0.jpg'><img class='img-responsive image_size'>'

                 <p align='center'><b>Row-{$catCode}-{$itemCode}</b></p>;
                 
                </div>
                </div>";
            }
            ?>
</div>
        </div>
    </body>
</html>
