<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['obcsuid']==0)) {
  header('location:logout.php');
  } else{
       if(isset($_POST['submit']))
  {


$uid=$_SESSION['obcsuid'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$fname=$_POST['fname'];
$race=$_POST['race'];
$pob=$_POST['pob'];
$padd=$_POST['padd'];
$microsim=$_POST['microsim'];
$mobnumber=$_POST['mobnumber'];
$email=$_POST['email'];
$gpm=$_POST['gpm'];
$gpmm=$_POST['gpmm'];
$gpmf=$_POST['gpmf'];
$gpf=$_POST['gpf'];
$gpfm=$_POST['gpfm'];
$gpff=$_POST['gpff'];
$agpmm=$_POST['agpmm'];
$agpmf=$_POST['agpmf'];
$agpfm=$_POST['agpfm'];
$agpff=$_POST['agpff'];
$agpmm=$_POST['agpmm2'];
$agpmf=$_POST['agpmf2'];
$agpmm=$_POST['agpmm3'];
$agpmf=$_POST['agpmf3'];
$appnumber=mt_rand(100000000, 999999999);
$ret="select Dateofbirth from tblapplication where Dateofbirth=:dob || NameofFather=:fname";
 $query= $dbh -> prepare($ret);
$query->bindParam(':dob',$dob,PDO::PARAM_STR);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);

$query-> execute();
     $results = $query -> fetchAll(PDO::FETCH_OBJ);
     if($query -> rowCount() == 0)
{


$sql="insert into tblapplication(UserID,ApplicationID,Dateofbirth,Gender,FullName,Race,Placeofbirth,PermanentAdd,MicroSim,MobileNumber,Email,GPM,GPMM,GPMF,GPF,GPFM,GPFF,AGPMM,AGPMF,AGPFM,AGPFF,AGPMM2,AGPMF2,AGPMM3,AGPMF3)
                            values(:uid,:appnumber,:dob,:gender,:fname,:race,:pob,:padd,:microsim,:mobnumber,:email,:gpm,:gpmm,:gpmf,:gpf,:gpfm,:gpff,:agpmm,:agpmf,:agpfm,:agpff,:agpmm2,:agpmf2,:agpmm3,:agpmf3)";
$query=$dbh->prepare($sql);
$query->bindParam(':uid',$uid,PDO::PARAM_STR);
$query->bindParam(':appnumber',$appnumber,PDO::PARAM_STR);
$query->bindParam(':dob',$dob,PDO::PARAM_STR);
$query->bindParam(':gender',$gender,PDO::PARAM_STR);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':race',$race,PDO::PARAM_STR);
$query->bindParam(':pob',$pob,PDO::PARAM_STR);
$query->bindParam(':padd',$padd,PDO::PARAM_STR);
$query->bindParam(':microsim',$microsim,PDO::PARAM_STR);
$query->bindParam(':mobnumber',$mobnumber,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);

$query->bindParam(':gpm',$gpm,PDO::PARAM_STR);
$query->bindParam(':gpmm',$gpmm,PDO::PARAM_STR);
$query->bindParam(':gpmf',$gpmf,PDO::PARAM_STR);
$query->bindParam(':gpf',$gpf,PDO::PARAM_STR);
$query->bindParam(':gpfm',$gpfm,PDO::PARAM_STR);
$query->bindParam(':gpff',$gpff,PDO::PARAM_STR);

$query->bindParam(':agpmm',$agpmm,PDO::PARAM_STR);
$query->bindParam(':agpmf',$agpmf,PDO::PARAM_STR);
$query->bindParam(':agpfm',$agpfm,PDO::PARAM_STR);
$query->bindParam(':agpff',$agpff,PDO::PARAM_STR);

$query->bindParam(':agpmm2',$agpmm,PDO::PARAM_STR);
$query->bindParam(':agpmf2',$agpmf,PDO::PARAM_STR);
$query->bindParam(':agpmm3',$agpfm,PDO::PARAM_STR);
$query->bindParam(':agpmf3',$agpff,PDO::PARAM_STR);
 $query->execute();

   $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {
        echo '<script>alert("Dog detail has been added.")</script>';
        echo "<script>window.location.href ='fill-birthregform.php'</script>";
    }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }
}
}
  ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
   
    <title>Register new dog | Online Dog Certificate System</title>
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
    <!-- modals CSS
		============================================ -->
    <link rel="stylesheet" href="css/modals.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
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
   <?php include_once('includes/sidebar.php');?>
        <?php include_once('includes/header.php');?>
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list shadow-reset">
                                <div class="row">
                                   
                                    <div class="col-lg-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="dashboard.php">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Dog Registration Form</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
            <!-- Basic Form Start -->
            <div class="basic-form-area mg-b-15">
                <div class="container-fluid">
                   
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline12-list shadow-reset mg-t-30">
                                <div class="sparkline12-hd">
                                    <div class="main-sparkline12-hd">
                                        <h1>Application Form</h1>
                                        <div class="sparkline12-outline-icon">
                                            <span class="sparkline12-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline12-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline12-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="all-form-element-inner">
                                                    
                                                    <form method="post">
                                                        
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Date of Birth</label>
                                                                </div>
                                                                <div class="col-lg-9">

                                                                    <input type="date" class="form-control" name="dob" value="" required="true" />
                                                                </div>
                                                            </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-9 col-sm-9 col-xs-9">
                                                                    <label class="login2 pull-right pull-right-pro"><span class="basic-ds-n">Gender</span></label>
                                                                </div>
                                                                <div class="col-lg-9 col-md-3 col-sm-3 col-xs-3">
                                                                    <div class="bt-df-checkbox">
                                                                       <p style="text-align: left;"> <input type="radio"  name="gender" id="gender" value="Female" checked="true">Female</p>
             
                                                                   <p style="text-align: left;"> <input type="radio" name="gender" id="gender" value="Male">Male</p>
             
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Dog's Full Name</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" name="fname" value="" required="true" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Dog's Race</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" name="race" value="" required="true" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Place of Birth</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" required="true" value="" name="pob" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Permanent Address</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" name="padd" value="" required="true" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                         <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">MicroSim</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" name="microsim" value="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                         <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Contact Number</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                   <input type="number" class="form-control" required="true" value="" name="mobnumber" maxlength="10" pattern="[0-9]+" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                       <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Email</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="email" class="form-control" required="true" name="email" value="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                       <hr >
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">parent male G1</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" required="true" name="gpm" value="" />
                                                                </div>
                                                            </div>
                                                        </div>                                    
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Grand parent male M G2</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" required="true" name="gpmm" value="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Grand parent male F G2</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" required="true" name="gpmf" value="" />
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">AG parent male M G3 M</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" required="true" name="agpmm" value="" />
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">AG parent femele F G3 M</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" required="true" name="agpmf" value="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">AG parent male M G3 F</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" required="true" name="agpmm2" value="" />
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">AG parent femele F G3 F</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" required="true" name="agpmf2" value="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">parent femele G1</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" required="true" name="gpf" value="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Grand parent female M G2</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" required="true" name="gpfm" value="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Grand parent female F G2</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" required="true" name="gpff" value="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">AG parent female M G3 M</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" required="true" name="agpfm" value="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">AG parent female F G3 M</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" required="true" name="agpff" value="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">AG parent male M G3 F</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" required="true" name="agpmm3" value="" />
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">AG parent femele F G3 F</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" required="true" name="agpmf3" value="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="login-btn-inner">
                                                                <div class="row">
                                                                    <div class="col-lg-3"></div>
                                                                    <div class="col-lg-9">
                                                                        <div class="login-horizental cancel-wp pull-left">
                                                                            
                                                                            <button class="btn btn-sm btn-primary login-submit-cs" type="submit" name="submit">Add Details</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Basic Form End-->

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
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <!-- modal JS
		============================================ -->
    <script src="js/modal-active.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html><?php }  ?>