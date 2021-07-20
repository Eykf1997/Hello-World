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

            #mainImage {
                width: 400px;
                height: 400px;
                -webkit-transition: all 0.5s linear;
                transition: all 0.5s linear;
            }

            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
            }

            li {
                list-style-type: none;
                float: left;
            }

            .img-container img {
                width: 100px;
                height: 100px;
            }

        </style>
    </head>
    <body>

        <?php include 'navBar.php'; ?>
        <?php include 'productData.php'; ?>

        <div class="container">

            <?php
            $catCode = isset($_GET["cat"]) ? $_GET["cat"] : "ac";
            $itemCode = isset($_GET["itemCode"]) ? $_GET["itemCode"] : "001";


            $totalNumberOfItems = count($productArr[$catCode]);
            
            $totalNumberOfItems = sprintf("%03d", $totalNumberOfItems);

            
            
            $nextPage = ($itemCode == $totalNumberOfItems + 1 ) ? 001 : $itemCode + 1;//if 20 then 001 else 001+1

            $prevPage = ($itemCode == 001 ) ? $totalNumberOfItems + 1 : $itemCode - 1; //if 001 then 20 else 20-1
            ?>

            <div class="row">
                <div class="col-lg-1">
                    <div id="leftArrow">
                        <a href='collectionDetail.php?cat=<?php echo $catCode ?>&itemCode=<?php echo sprintf("%03d", $prevPage) ?>' ><img src='images/arrow_left.jpg' onmouseover="this.src = 'images/arrow_leftover.jpg';" onmouseout="this.src = 'images/arrow_left.jpg';" /> </a>
                    </div>
                </div>
                <div class="col-lg-8">


                    <div class="main-img-container">
                        <img id="mainImage" img src="images/<?php echo $catCode ?>/row_<?php echo $catCode; echo $itemCode ?>_0.jpg" >
                    </div>


                </div>
                <div class="col-lg-2">
                    <?php
                    echo "<b>Model No. ROW-$catCode-$itemCode</b><br />";
                    echo '<hr>';
                    echo "Dimension in centimeters:";
                    echo "<br/>";
                    echo "{$productArr[$catCode][$itemCode]["dimension"]}<br/>";
                    echo '<hr>';
                    echo "Price in SGD {$productArr[$catCode][$itemCode]["price"]}<br/>";
                    ?>

                </div>
                <div class="col-lg-1">
                    <div id="rightArrow">
                        <a href='collectionDetail.php?cat=<?php echo $catCode ?>&itemCode=<?php echo sprintf("%03d", $nextPage) ?>' ><img src='images/arrow_right.jpg' onmouseover="this.src = 'images/arrow_rightover.jpg';" onmouseout="this.src = 'images/arrow_right.jpg';" /> </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="panel panel-default">
                    <div class="col-lg-9">
                        <div class="img-container">
                            <ul>
                                <li>

                                    <?php
                                    for ($i = 0; $i <= $productArr[$catCode][$itemCode]["images"] - 1; $i++) {


                                        echo "<div style='float: left;'> <img src='images/$catCode/row_{$catCode}{$itemCode}_{$i}.jpg' class='subImage' height='125' width='105'></div>";
                                    }
                                    ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">


                    <a href="collectionPage.php?cat=<?php echo $catCode ?>&page=<?php echo (ceil($itemCode / 3)); ?>">Back to Collection</a>
                    <a href="contact.php">Enquiry</a>

                </div>
            </div>

        </div> 


        <script>

            var mainImage = $("#mainImage");
            $(".img-container img").hover(function () {
                var src = $(this).attr("src");
                $("#mainImage").attr("src", src);
            });

            mainImage.on("click", function () {
                $(this).css("transform", "scale(2)");
            });

        </script>
    </body>
</html>
