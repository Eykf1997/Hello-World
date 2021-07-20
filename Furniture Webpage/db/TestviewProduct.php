<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once'dbfunction.php';
        require_once'dbproduct.php';
        require_once'dbproductimage.php';
        
        $con = open_connection();
        
        $productArr = getProductByCatid($con, 1);
        
        foreach($productArr as $index => $productinfo){
            $productArr[$index]["productImageArr"] = 
                    getImageByProductid($con,$productinfo["productrecordid"]);// return img record 
            
        }
        
        
        close_connection($con);
        
        echo"<pre>";
        print_r($productArr);
        echo"</pre>";

        ?>
    </body>
</html>