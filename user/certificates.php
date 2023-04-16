<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['obcsuid']==0)) {
  header('location:logout.php');
  } else{



  ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
   
    <title>Manage Application Form | Online Dog Certificate System</title>
  <link rel="shortcut icon" href="../img/bg-img/doglogo.jpg" type="image/x-icon">
    <!-- Google Fonts
		============================================ -->
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
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- charts CSS
		============================================ -->
    <link rel="stylesheet" href="css/c3.min.css">
    <!-- Fixer css
		============================================ -->
    <link rel="stylesheet" href="css/pedigre.css">
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
                                            <li><span class="bread-blod">Application Form</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->

            <!-- Static Table Start -->
            <div class="data-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1>Certificate Details</h1>
                                        <div class="sparkline13-outline-icon">
                                            <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline13-graph printcontainer">
                                    <div id="exampl">
                                    <div class="datatable-dashv1-list custom-datatable-overright">

                                    <div class="row">
                                      <div class="col-sm-4 text-center">
                                          <img src="../img/bg-img/flag.jpg" alt="flag" class="flag" >
                                          <h6>REPUBLIQUE DU CAMEROUN</h6>
                                          <p>PAIX - TRAVAIL - PATRIE</p>
                                      </div>
                                      <?php
$vid=$_GET['viewid'];
$sql="SELECT tblapplication.*,tbluser.FirstName,tbluser.LastName,tbluser.MobileNumber,tbluser.Address,tbluser.RegDate from  tblapplication join  tbluser on tblapplication.UserID=tbluser.ID where tblapplication.ID=:vid and  tblapplication.Status='Verified'";
$query = $dbh -> prepare($sql);
$query-> bindParam(':vid', $vid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
foreach($results as $row)
{   
$certgendate=$row->UpdationDate;            ?>
                                      <div class="col-sm-4 text-center" >
                                          <h3 class><b>REGISTRATION CERTIFICATE</b></h3>
                                          <h4>CAMEROON <br><?php  echo $row->Race;?><br> SOCIETY</h4>
                                      </div>
                                      <div class="col-sm-4 text-center">
                                          <img src="../img/bg-img/doglogo.jpg" alt="flag" class="input_image">
                                          <h6>REPUBLIC OF CAMEROON</h6>
                                          <p>PEACE - WORK - FATHERLAND</p>
                                      </div>
                                  </div>
<table border="1" class="table table-bordered">
  <tr align="center">
  <td colspan="4" ><b>Dog Information</b>These are information on the Registered Dog <i class="fa fa-registered" aria-hidden="true"></i></td>
  </tr>
      <th scope>Full Name:</th>
      <td><?php  echo $row->FullName;?></td>
      <th scope>Gender:</th>
      <td><?php  echo $row->Gender;?></td>
    <tr>
    <tr>
      <th scope>Date of Birth:</th>
      <td><?php  echo $row->Dateofbirth;?></td>
      <th scope>Place of Birth:</th>
      <td><?php  echo $row->Placeofbirth;?></td>
    </tr>
    <tr>
      <th scope>Race:</th>
      <td><?php  echo $row->Race;?></td>
      <th scope>Permanent Address:</th>
      <td><?php  echo $row->PermanentAdd;?></td>
    </tr>
    <tr>
      <th scope>ApplicationID:</th>
      <td><?php  echo $row->ApplicationID;?></td>
      <th scope>Micro Sim:</th>
      <td><?php  echo $row->MicroSim;?></td>
    </tr>
</table>         

<table border="1" class="table table-bordered">
  <tr align="center">
    <td colspan="4" ><b>Maister Information</b>These are information on the User<i class="fa fa-registered" aria-hidden="true"></i></td>
  </tr>
    <tr>
      <th scope>User ID:</th>
      <td><?php  echo $row->ID;?></td>
      <th scope>User name:</th>
      <td><?php  echo $row->FirstName;?> <?php  echo $row->LastName;?></td>
    </tr>
    <tr>
      <th scope>Email:</th>
        <td><?php  echo $row->Email;?></td>
        <th scope>Mobile Number:</th>
        <td><?php  echo $row->MobileNumber;?></td>
      </tr>
      <tr>
        <th scope>Permanent Address:</th>
        <td><?php  echo $row->PermanentAdd;?></td>
        <th scope>Register Date:</th>
        <td><?php  echo $row->RegDate;?></td>
    </tr>
    <tr>
      <th scope>Date of apply:</th>
      <td><?php  echo $row->Dateofapply;?></td>
      <th scope>Certificate Genration Date:</th>
      <td><?php echo htmlentities($certgendate);?></td>
    </tr>

 
  <?php }?>
</table>
<div class="row">
            <div class="col-sm-6 text-center">
                <h6><b>APPLICANT SIGNATURE</b></h6>
                <div class="col-4">  </div>
                <div class="col-4">  </div>    
            </div>

            <div class="col-sm-6 text-center ">
                <h6><b>GERNERAL DIRECTOR SIGNATURE</b></h6>
                    <div class="col-4">  </div>
                    <div class="col-4">  </div>


            </div>
        </div>

    
        <!-- Footer -->
        <footer class="page-footer font-small blue ">

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3 text-grey bg-danger " style="margin-top: 50px;">
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> Dog Register <br>
              <small class="text-danger">Any additions and/or alterations not initialled by the General Manager will render this Certificate invalid</small>
            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->
        <!-- <p> <i class="fa fa-print fa-2x" style="cursor: pointer;"  OnClick="CallPrint(this.value)" ></i> </p>                           -->
      </div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Static Table End -->
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
    <!-- peity JS
		============================================ -->
    <script src="js/peity/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- data table JS
		============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
  <script>
function CallPrint(strid) {
var prtContent = document.getElementById("exampl");
var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
WinPrint.document.write(prtContent.innerHTML);
WinPrint.document.close();
WinPrint.focus();
WinPrint.print();
WinPrint.close();
}
</script>

</body>

</html><?php }  ?>
