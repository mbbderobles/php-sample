<?php

    session_start();

    if($_SESSION["logged_in"]!="1"){
        header('Location: index.php');
    }

?>
<!DOCTYPE html>
<!-- Template by Quackit.com -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TITAN</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Logo and responsive toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                	<span class="glyphicon glyphicon-fire"></span> 
                	Logo
                </a>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Portfolio</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Content -->
    <div class="container">

        <!-- Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">SEARCH
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-6 portfolio-item">
                <form action="#" method="post">
                    <div class="input-group col-sm-6 col-md-6">
                        <input type="text" class="form-control" name="user" id="srch-term" placeholder="First Name" autofocus/>
                        <div class="input-group-btn">
                            <button class="btn btn-default" name="search" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                </form>
                
                <?php
                    if (isset($_POST['search']) && !empty($_POST['user'])) {
                        $conn = mysqli_connect("127.0.0.1", "root", "root", "cnsec");
                        $sql = "SELECT fname,lname,room FROM users WHERE fname='".$_POST['user']."'";
                            
                        $result = mysqli_query($conn, $sql);

                        while ($row = mysqli_fetch_array($result)){
                            printf("<br/>");
                            printf("<h4>First name: %s</h4>\n", $row[0]);
                            printf("<h4>Last name: %s</h4>\n", $row[1]);
                            printf("<h4>Room: %s</h4>", $row[2]);
                        }

                        mysqli_close($conn);
                    }
                ?>

            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
	
    <!-- jQuery -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
