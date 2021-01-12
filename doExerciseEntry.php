<?php
include ("dbFunctions.php");

$exerciseType = $_POST['exerciseType'];
$duration = $_POST['duration'];
$queryInsert = "INSERT INTO exercise 
                        (exercise_type, duration)
                        VALUES ('$exerciseType',$duration)";

$resultInsert = mysqli_query($link, $queryInsert) or die(mysqli_error($link));
$message = "<b>You have successfully submitted your exercise record.</b>";

mysqli_close($link);
?>

<?php
session_start();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Exercise Record</title>
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
        <link href="stylesheets/registerstyle.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-success">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="login.html"><b>Login</b></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="signup.html"><b>Sign Up</b></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="exerciseEntry.html"><b>Exercise</b></a>
                    </li>
                </ul>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>

        </nav><br/><br/>
        <?php
        echo "<h3>$message</h3>";
        ?>

    </body>
</html>

/*Li Tong
19034097*/
