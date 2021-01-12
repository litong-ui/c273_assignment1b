<?php
include("dbFunctions.php");
session_start();

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE username='$username' AND password=SHA1('$password')";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        $_SESSION['username'] = $row['username'];
        $msg = "<b>You have successfully log in.</b><br/><br/>";
        $msg .= "<a href='exerciseEntry.html'>Exercise Entry</a>";
    } else {
        $msg = "<b>You have entered a wrong password.</b><br/><br/>";
        $msg .= "<a href='login.html'>Login again</a>";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
    </head>
    <body>
        <br/><br/><br/>
        <?php
        echo "<h4>$msg</h4>";
        ?>
    </div>
</body>
</html>

/*Li Tong
19034097*/
