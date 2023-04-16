<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit']))
  {
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $mobno=$_POST['mobno'];
    $add=$_POST['address'];
    $password=md5($_POST['password']);
    $ret="select MobileNumber from tbluser where MobileNumber=:mobno";
    $query= $dbh -> prepare($ret);
    $query-> bindParam(':mobno', $mobno, PDO::PARAM_STR);
    $query-> execute();
    $results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() == 0)
{
$sql="Insert Into tbluser(FirstName,LastName,MobileNumber,Address,Password)Values(:fname,:lname,:mobno,:add,:password)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':lname',$lname,PDO::PARAM_STR);
$query->bindParam(':mobno',$mobno,PDO::PARAM_INT);
$query->bindParam(':add',$add,PDO::PARAM_STR);

$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{

echo "<script>alert('You have signup  Succesfully');</script>";
}
else
{

echo "<script>alert('Something went wrong.Please try again');</script>";
}
}
 else
{

echo "<script>alert('This Mobile Number already exist. Please try again');</script>";
}
}


?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    
    <title>Register | Online Dog Certificate System</title>
    <link rel="shortcut icon" href="../img/bg-img/doglogo.jpg" type="image/x-icon">
   
		
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="css/form.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="materialdesign">
  
    <div class="wrapper-pro">
   
            <!-- Register Start-->
            <div class="login-form-area mg-t-30 mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <form class="adminpro-form" method="post">
                            <div class="col-lg-6">
                                <div class="login-bg">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="logo">
                                                <a href="login.php"><img src="img/logo/logo.png" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="login-title">
                                                <h1>Registration Form</h1>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>First Name</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="text" name="fname" required="true" />
                                                <i class="fa fa-user login-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Last Name</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="text" name="lname" required="true" />
                                                <i class="fa fa-user login-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Mobille Number</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="text" name="mobno" maxlength="10" pattern="[0-9]+" required="true" />
                                                <i class="fa fa-mobile login-user" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Address</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="text" name="address" />
                                                <i class="fa fa-envelope login-user" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Password</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="password" name="password" required="true" />
                                                <i class="fa fa-lock login-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                  
                                    <div class="row">
                                        <div class="col-lg-4"></div>
                                        <div class="col-lg-8">
                                            <div class="login-keep-me register-check">
                                               <p>
        <small>Do you have an account ?</small>
        <a href="login.php">SIGN IN</a>
    </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4"></div>
                                        <div class="col-lg-8">
                                            <div class="login-button-pro">
                                               
                                                <button type="submit" class="login-button login-button-lg" name="submit">Register</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="col-lg-3"></div>
                    </div>
                </div>
            </div>
            <!-- Register End-->
        </div>
    </div>
   <?php include_once('includes/footer.php');?>
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- form validate JS
		============================================ -->
    <script src="js/jquery.form.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/form-active.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>