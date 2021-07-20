<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="bootstrap3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <title></title>
    </head>
    <body>        
        <?php include 'navBar.php'; ?>
        <div class="container">
            <?php
            require_once 'db/dbfunction.php';
            require_once 'db/dbCategory.php';
            $con = open_connection();
            $catArr = getAllCategory($con);
            close_connection($con);



            $numberOfCategories = count($catArr);

            for ($i = 0; $i < $numberOfCategories; $i++) {

                echo "<div class='col-md-3'>";
                echo "<div class='thumbnail'>";
                echo "{$catArr[$i]['title']}<br>";
                echo "<img src='images/{$catArr[$i]['catcode']}/row_{$catCode}{$newArr[$i]}_m0.jpg'>{$catArr[$i]['imgfile']}";
                
                
                
                
                echo "</div>";
                echo "</div>";
            }
            /*
              foreach($i=0; $i<=)



              $numberOfImages = (count($productArr[$catCode]));
              $numberOfPages = ceil($numberOfImages / 3);

              for ($i = 1; $i <= $numberOfPages; $i++) {

              echo "<li><a href='collectionPage.php?cat=$catCode&page=$i'>$i</a></li>&nbsp;";
              }
             * 
             */
            ?>
        </div>
    </body>
</html>
