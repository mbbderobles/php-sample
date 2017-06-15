<?php

    if (isset($_POST['login']) && !empty($_POST['username']) 
       && !empty($_POST['password'])) {

       	$conn = mysqli_connect("127.0.0.1", "root", "root", "cnsec");

		if (!$conn) {
       		echo "Unable to connect!";

       }else {
       		$uname = mysqli_real_escape_string($conn, $_POST['username']);
       		$pword = mysqli_real_escape_string($conn, $_POST['password']);
       		$sql = "SELECT * FROM users WHERE username='".$uname."' and password='".md5($pword)."'";
       		
       		$result = mysqli_query($conn, $sql);

       		if(mysqli_num_rows($result) > 0){
       			session_start();
       			$_SESSION["logged_in"]="1";
       			header('Location: landing.php');
       		}else{
       			echo "Wrong username or password.";
       		}
       }

       mysqli_close($conn);
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                        <a href="login.php">Login</a>
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
                        <a href="#">Contact</a>
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
                <h1 class="page-header">Login</h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-6 portfolio-item">
            	<form action="#" method="post">
	                <div class="form-group">
						<label for="usr">Username:</label>
						<input type="text" name = "username"class="form-control" id="usr">
					</div>
					<div class="form-group">
						<label for="pwd">Password:</label>
						<input type="password" name = "password"class="form-control" id="pwd">
					</div>
					<button name="login" type="submit" class="btn btn-default">Submit</button>
	            </form>
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
