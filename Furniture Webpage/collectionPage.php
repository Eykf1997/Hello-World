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
            #menu ul{
                list-style: none;
            }

            #menu li{
                display: inline;
            }

            .thumbnail{
                border: thin gray solid;
                border-radius: 0px !important;
                margin: 0 5px;
            }
        </style>
    </head>
    <body>
        <?php include 'navBar.php'; ?>
        <?php include 'productData.php'; ?>

        <div class="container">
            <div class="row">
                <div align="center">
                    <ul id="menu">



                        <?php
                        $pageNumber = isset($_GET["page"]) ? $_GET["page"] : 1;
                        $catCode = isset($_GET["cat"]) ? $_GET["cat"] : "ac";


                        $numberOfImages = (count($productArr[$catCode]));
                        $numberOfPages = ceil($numberOfImages / 3);

                        for ($i = 1; $i <= $numberOfPages; $i++) {

                            echo "<li><a href='collectionPage.php?cat=$catCode&page=$i'>$i</a></li>&nbsp;";
                        }


                        echo "or";
                        echo"<a href='collectionSummary.php?cat=$catCode'>  View all</a>";

                        $nextPage = ($pageNumber == $numberOfPages) ? 1 : $pageNumber + 1;

                        $prevPage = ($pageNumber == 1) ? $numberOfPages : $pageNumber - 1;
                        ?>
                    </ul>
                    <div class="col-lg-1">
                        <div id="leftArrow">
                            <a href='collectionPage.php?cat=<?php echo $catCode ?>&page=<?php echo $prevPage ?>' ><img src='images/arrow_left.jpg' onmouseover="this.src = 'images/arrow_leftover.jpg';" onmouseout="this.src = 'images/arrow_left.jpg';" /> </a>
                        </div>
                    </div>
                    <?php
                    $arr = [];
                    foreach ($productArr[$catCode] as $itemCode => $itemDetails) {
                        array_push($arr, $itemCode);
                       
                    }

                    for ($i = 0; $i < count($productArr[$catCode]); $i++) {
                        $limit = 3;

                        $start = 0;

                        if (!empty($_GET["page"])) {
                            $start = $_GET["page"];
                        }



                        $start = ($start - 1) * $limit;




                        $newArr = array_slice($arr, $start, $limit);

                        if (isset($newArr[$i]) && $newArr[$i]) {
                            echo "<div class='col-md-3'>";
                            echo "<div class='thumbnail'>";
                            echo "<a href='collectionDetail.php?cat=$catCode&itemCode={$newArr[$i]}'><img src='images/$catCode/row_{$catCode}{$newArr[$i]}_m0.jpg'>";
                            echo " <p align='center'><b>Model No. Row-{$catCode}-{$newArr[$i]}</b></p>";
                            echo "</div>";
                            echo "</div>";
                        }
                    }
                    ?>
                    <div class="col-lg-1">
                        <div id="rightArrow">
                            <a href='collectionPage.php?cat=<?php echo $catCode ?>&page=<?php echo $nextPage ?>' ><img src='images/arrow_right.jpg' onmouseover="this.src = 'images/arrow_rightover.jpg';" onmouseout="this.src = 'images/arrow_right.jpg';" /> </a>
                        </div>
                    </div>

                </div>

            </div>
            <div align="center">
                <div class="content">

                    <p>Click on the image for the details on the <?php echo $catCode ?></p>

                </div>
            </div>
        </div>  

    </body>
</html>
