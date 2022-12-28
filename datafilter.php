<?php

session_start();
if(!isset($_SESSION["name"])) {
  header("Location:index.php");
  }

@include "config.php";
if($con==false)
{
    die("error: could not connect.".mysqli_connect_error());
}

if(isset($_POST['from_date']) and isset($_POST['to_date'])){
 $from = $_POST['from_date'];
 $todate = $_POST['to_date'];
$que = "SELECT * FROM transcation WHERE Pay_date BETWEEN '$from' AND '$todate';";
$rec= mysqli_query($con,$que);
$num=0;
if($rec)
{
    $num=mysqli_num_rows($rec);
    //fun($num,$rec);
}
else{
    echo "query not executed";
}
}
mysqli_close($con);

?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Property Rampally Dhayara Village</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/main.jpg" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    thead{
      background-color: rgba(137, 218, 255, 0.904);
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

  <i class="bi bi-list toggle-sidebar-btn"></i>   
      &nbsp; 
    <div id="photo" style="text-align: center">
      <img style="vertical-align:middle" src="assets/img/main.jpg" width="40px" alt="">
      <span style="vertical-align:middle; font-size: 20px; font-weight: 700; color: orange; ">Rampally Dayara Village</span>
    </div>
    <style>/*<![CDATA[*/
#google_translate_element{}
.goog-te-banner-frame.skiptranslate,.goog-te-gadget-simple img,img.goog-te-gadget-icon,.goog-te-menu-value span{display:none!important}
.goog-te-menu-frame{box-shadow:none!important}
.goog-te-gadget-simple{background-color:transparent!important;background:url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M20,5H10.88L10,2H4A2,2 0 0,0 2,4V17A2,2 0 0,0 4,19H11L12,22H20A2,2 0 0,0 22,20V7A2,2 0 0,0 20,5M7.17,14.59A4.09,4.09 0 0,1 3.08,10.5A4.09,4.09 0 0,1 7.17,6.41C8.21,6.41 9.16,6.78 9.91,7.5L10,7.54L8.75,8.72L8.69,8.67C8.4,8.4 7.91,8.08 7.17,8.08C5.86,8.08 4.79,9.17 4.79,10.5C4.79,11.83 5.86,12.92 7.17,12.92C8.54,12.92 9.13,12.05 9.29,11.46H7.08V9.91H11.03L11.04,10C11.08,10.19 11.09,10.38 11.09,10.59C11.09,12.94 9.5,14.59 7.17,14.59M13.2,12.88C13.53,13.5 13.94,14.06 14.39,14.58L13.85,15.11L13.2,12.88M13.97,12.12H13L12.67,11.08H16.66C16.66,11.08 16.32,12.39 15.1,13.82C14.58,13.2 14.21,12.59 13.97,12.12M21,20A1,1 0 0,1 20,21H13L15,19L14.19,16.23L15.11,15.31L17.79,18L18.5,17.27L15.81,14.59C16.71,13.56 17.41,12.34 17.73,11.08H19V10.04H15.36V9H14.32V10.04H12.36L11.18,6H20A1,1 0 0,1 21,7V20Z' fill='%23161617'/%3E%3C/svg%3E") center / 12px no-repeat;-webkit-transition:all .2s ease;transition:all .2s ease;background-size: 20px 20px;display:inline-block;font-weight:400;line-height: 1.8;padding:0 6px;text-align:center;white-space:nowrap;vertical-align: middle;-ms-touch-action: manipulation;touch-action:manipulation;cursor:pointer;-webkit-user-select: none;-moz-user-select:none;-ms-user-select:none;user-select:none;border-left:none!important;border-top:none!important;border-bottom:none!important;border-right:none!important;border-radius: 4px}

 /*]]>*/</style>
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

      <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
      <div id="google_translate_element"></div>
      
      </a>
      <!-- <div id="google_translate_element"></div> -->
<script>
    function googleTranslateElementInit() {
        new google.translate.TranslateElement(
            {
              includedLanguages: 'en,te,hi',
              pageLanguage: 'en',
              layout: google.translate.TranslateElement.FloatPosition.TOP_RIGHT
            },
            'google_translate_element'
        );
    }
</script>
<script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
   
    

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/user.svg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION["name"]; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $_SESSION["name"]; ?></h6>
              <span></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

          
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="contact.php">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="home.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window"></i><span>Messages</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="sendtax1.php">
              <i class="bi bi-circle"></i><span>Send Tax</span>
            </a>
          </li>
          <li>
            <a href="customtax.php">
              <i class="bi bi-circle"></i><span>Custom Messages</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Manage Users</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="adduser.php" >
              <i class="bi bi-circle"></i><span>Add User</span>
            </a>
          </li>
          <li>
            <a href="deleteuser.php">
              <i class="bi bi-circle"></i><span>Delete User</span>
            </a>
          </li>
          <li>
            <a href="updatestatus.php">
              <i class="bi bi-circle"></i><span>Update Status</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Analyse Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="datafilter.php" class="active">
              <i class="bi bi-circle"></i><span>Data Filter</span>
            </a>
          </li>
          <li>
            <a href="filterbyname.php">
              <i class="bi bi-circle"></i><span>Filter By Name</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->  
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Filter</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home.php">Home</a></li>
          <li class="breadcrumb-item">Analyse Data</li>
          <li class="breadcrumb-item active">Data Filter</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        

          <!-- Recent Sales -->
          <div class="col-12">
            <div class="card recent-sales overflow-auto">

    

              <div class="card-body">
                <h5 class="card-title">Recent Data <span>| Today 22-8-2022</span></h5>
                <form name = "date" method = "post">
                <div class="row justify-content-center">
                  
                  <div class="col-sm-2 ml-auto">
                    <center><label for="fromdate">FROM</label></center>
                    <input type="date" name="from_date"id="fromdate" class="form-control">
                  </div>
                  <div class="col-sm-2 ml-auto">
                    <center><label for="todate">TO</label></center>
                    <input type="date" name = "to_date" id="todate" class="form-control">
                  </div>
                  <br>
                                    
                </div>
                <br>
                <div class="row justify-content-center">
                <div class="col-sm-2 text-center">
                    <button type="submit" class="btn btn-primary" >Submit</button>
                  </div>
                </div>
                </form>
                <hr>
                <table class="table table-striped table-hover datatable">
                  <thead>
                    <tr>
                      <th scope="col">Receipt Number</th>
                      <th scope="col">House Number</th>
                      <!-- <th scope="col">Owner Name</th> -->
                      <th scope="col">Paid Date</th>
                      <th scope="col">Paid Amount</th>
                      
                      <!-- <th scope="col">Action</th> -->
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    //function fun($num,$rec){
                        if(isset($num) && $num > 0)
                        { 
                            while ($rows = $rec->fetch_assoc())
                            {
                                echo"
                                <tr>
                                    
                                    <td>".$rows['Receipt_number']."</td>
                                    <td>".$rows['House_number']."</td>
                                    <td>".$rows['Pay_date']."</td>
                                    <td>".$rows['Total']."</td>

                                    
                                    
                                </tr>";
                            }
                        }
                     // }
                    ?>
                    <!-- <tr>
                      <th scope="row"><a href="#"><?php echo $val?></a></th>
                      <td>Brandon Jacob</td>
                      <td><a href="#" class="text-primary">At praesentium minu</a></td>
                      <td>$64</td>
                      <td><span class="badge bg-success">Approved</span></td>
                      
                    </tr>
                    <tr>
                      <th scope="row"><a href="#">#2147</a></th>
                      <td>Bridie Kessler</td>
                      <td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td>
                      <td>$47</td>
                      <td><span class="badge bg-warning">Pending</span></td>
                      
                    </tr>
                    <tr>
                      <th scope="row"><a href="#">#2049</a></th>
                      <td>Ashleigh Langosh</td>
                      <td><a href="#" class="text-primary">At recusandae consectetur</a></td>
                      <td>$147</td>
                      <td><span class="badge bg-success">Approved</span></td>
                      
                    </tr>
                    <tr>
                      <th scope="row"><a href="#">#2644</a></th>
                      <td>Angus Grady</td>
                      <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
                      <td>$67</td>
                      <td><span class="badge bg-danger">Rejected</span></td>
                      
                    </tr>
                    <tr>
                      <th scope="row"><a href="#">#2644</a></th>
                      <td>Raheem Lehner</td>
                      <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
                      <td>$165</td>
                      <td><span class="badge bg-success">Approved</span></td>
                      
                    </tr> -->
                  </tbody>
                </table>

              </div>

            </div>
          </div><!-- End Recent Sales -->
           
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Rampally Dhayara Village</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="#">GCET TEAM</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>