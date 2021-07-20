<?php

session_start();
include("../includes/connection.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="../styles/bootstrap.min.css">
    <link rel="stylesheet" href="../font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="../styles/login.css">
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.min.js"></script>
</head>

<body>

    <div class="container">

        <form action="" class="form-login" method="post">
            <h2 class="form-login-heading">Admin Login</h2>
            <input type="email" class="form-control" name="admin_email" placeholder="Your E-mail address" required>

            <input type="password" class="form-control" name="admin_pass" placeholder="Your Password" required>

            <button class="btn btn-lg btn-primary btn-block" type="submit" name="admin_login">
               Sign in
                
                
            </button>




        </form>

    </div>



</body>

</html>


<?php

if(isset($_POST['admin_login'])){

$admin_email = mysqli_real_escape_string($con,$_POST['admin_email']);
$admin_pass = mysqli_real_escape_string($con,$_POST['admin_pass']);
$get_admin = "SELECT * FROM admins WHERE admin_email='$admin_email' AND admin_pass='$admin_pass'";
    
$run_admin = mysqli_query($con,$get_admin);
$count = mysqli_num_rows($run_admin);

if($count==1){
$_SESSION['admin_email']=$admin_email;
    
echo "<script>alert('Congratulation! You are Logged in into admin panel')</script>";
echo "<script>window.open('index.php?dashboard','_self')</script>";
}
    
else {

echo "<script>alert('Email or Password is Wrong')</script>";

}

}

?>
