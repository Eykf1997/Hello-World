<div class="container">
    <div class="navbar navbar-static-top">

        <div class="container">

            <a href="index.php" class="navbar-brand navbar-left"> <img src="images/logo02.jpg"> </a>

            <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse navHeaderCollapse">

                <ul class="nav navbar-nav navbar-right">
                    <li><a href = "index.php">About</a></li>
                    <li><a href = "news.php">News</a></li>
                    <li class="dropdown">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Collection<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <?php
                            require_once 'db/dbfunction.php';
                            require_once 'db/dbCategory.php';

                            $con = open_connection();
                            $catArr = getAllCategory($con);
                            close_connection($con);





                            foreach ($catArr as $index => $value) {
                                echo "<a href='collectionPage.php?cat={$value["catcode"]}&page=1'</a><hr />";

                                echo $value['title'];
                            }
                            ?>
                        </ul>

                    </li>
                    <li><a href = "ordering.php">Ordering</a></li>
                    <li><a href = "contact.php">Contact</a></li>
                    <li><a href = "loginPage.php">Admin Login</a></li>


                </ul>

            </div>

        </div>

        <hr>
    </div>



    <div class="navbar navbar-fixed-bottom" style="text-align:center">

        <div class="container">

            <hr>
            <p>© room of woods (Pte.) Ltd. 2016</p>

        </div>

    </div>

</div>
<script src="js/jquery-1.12.3.js" type="text/javascript"></script>
<script src="bootstrap3/js/bootstrap.js" type="text/javascript"></script>







