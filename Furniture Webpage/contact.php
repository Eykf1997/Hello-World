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
            <div class="row">
                <div class="col-lg-7">
                    <h3>Contact Us:</h3>
                    <form action="contactHandle.php" method="post">
                        Your Name: <input type="text" name="username" size="50" /><br />
                        Your Email: <input type="text" name="useremail" size="50" /><br />
                        Your Contact Number: <input type="text" name="usercontact" size="50" /><br />
                        Enquiry:<br/>
                        <textarea cols="80" rows="12" ></textarea><br/>


                        <button type="submit" value="Submit" />Submit</button>
                        <button type="reset" value="Reset">Reset</button>
                    </form>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>


                </div>
                <div class="col-lg-5">

                    <div class="panel panel-default">
                        <div class="panel-body">

                            <img src="images/sofa02.jpg" alt=""/>

                        </div>
                    </div>

                </div>
            </div>
        </div>


    </form>
</body>
</html>
