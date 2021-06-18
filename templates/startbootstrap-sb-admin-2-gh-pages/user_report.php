<?php
include('PHP/connection.php');
if(!empty($_SESSION['username']))

{
    $temp = $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Report</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="user.php">
                <div class="sidebar-brand-icon rotate-n-15">
                   
                </div>
                <div class="sidebar-brand-text mx-3">Library Management </div>
            </a>


            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="user.php">
                    
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
             <!---<div class="sidebar-heading">
                Interface
            </div>--->

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                   <!--- <i class="fas fa-fw fa-cog"></i> --->
                    <span>LIBRARY</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">BOOKS</h6>
                        <a class="collapse-item" href="issued_book.php">Issued Books</a>
                        <a class="collapse-item" href="issued_book(Test).php">Issued Books(Test)</a>
                        <a class="collapse-item" href="reservation_details.php">Reservation Details</a>
                        <a class="collapse-item" href="user_searchbook.php">Search Books</a>
                        <a class="collapse-item" href="user_dues_archive.php">Dues Archives</a>
                        
                    </div>
                </div>
            </li>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseThree">
                   <!--- <i class="fas fa-fw fa-cog"></i> --->
                    <span>DIGITAL LIBRARY</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">E-BOOK</h6>
                        <a class="collapse-item" href="user_ebook_add.php">Contribute Your E-Book</a>
                        <a class="collapse-item" href="user_ebook_download.php">Download E-Book</a>


            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                   <!--- <i class="fas fa-fw fa-wrench"></i>--->
                    <span>PROFILE</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">User Profile</h6>
                        <a class="collapse-item" href="user_profile.php">My Profile</a>
                        <a class="collapse-item" href="user_report.php">Activities</a>
                        <a class="collapse-item" href="user_recommendations.php">Recommendations</a>
                        <a class="collapse-item" href="user_payment.php">Payment</a>
                        
                      <!---<a class="collapse-item" href="#">Other</a>--->
                    </div>
                </div>
            </li>

            <!---<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#One"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>--->
                    <!---<span>E-BOOKS</span>
                </a>
                <div id="One" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Manage Book:</h6>
                        <a class="collapse-item" href="ebook_add.php">UPLOAD NEW </a>
                        <a class="collapse-item" href="#">USER UPLOADS</a>
                        <a class="collapse-item" href="#">DETAILS</a>--->
                       <!--- <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>--->
                    <!---</div>
                </div>
            </li>--->

            <!---<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitie"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <!---<i class="fas fa-fw fa-wrench"></i>--->
                    <!---span>ISSUE</span>
                </a>
                <div id="collapseUtilitie" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header" href = "#">Issue Books</h6>
                        <a class="collapse-item" href="admin_issue book.php">Issue New Book</a>
                        <a class="collapse-item" href="admin_return book.php">Return</a>
                        <a class="collapse-item" href="#">Manage Issue</a>
                        
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>--->
                     <!---</div>
                </div>
            </li>--->

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            

            <!-- Nav Item - Pages Collapse Menu -->
            

            <!-- Nav Item - Charts -->
            

            <!-- Divider -->
           
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <!---<li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>--->
                            <!-- Dropdown - Messages -->
                            <!---<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>--->
                        </li>

                        <!-- Nav Item - Alerts -->
                        <!--li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>--->
                                <!-- Counter - Alerts -->
                                <!--<span class="badge badge-danger badge-counter">3+</span>
                            </a>--->
                            <!-- Dropdown - Alerts -->
                            <!--<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>--->
                        </li>

                        <!-- Nav Item - Messages -->
                        <!--<li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>--->
                                <!-- Counter - Messages -->
                                <!--<span class="badge badge-danger badge-counter">7</span>
                            </a>--->
                            <!-- Dropdown - Messages -->
               
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    

                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                    <form method = "POST" action = "PHP/pdf_report.php">
        <div class="col-md-12 bg-light text-right p-2">
            <input type="submit" class="btn btn-primary" name = "generate" value = "Generate">
        </div>
        </form>
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Report-E-Book Uploads </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
       
       
        <?php 
            $name =$_SESSION["username"];
            //$id = $_SESSION['l_id'];
            //echo  $username;
            $querry = "SELECT username FROM login where username = '$name";
            $result = mysqli_query($con,$querry);
            ?>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <?php 
                            echo "<td>" .$name. "</td>";
                        ?>
                    </tr>
                    
                </thead>
            </table>
        
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Book Title</th>
                         <th>Status</th>
                    </tr>
                </thead>
    <?php

            
            $username =$_SESSION["username"];
            $sql = "SELECT * FROM ebook_table where l_id = (select l_id from login where username='$username')";

            $result = mysqli_query($con,$sql);
            $num = mysqli_num_rows($result);
            $count = 1;

            while($row = mysqli_fetch_array($result))

                {
                    ?>
                    <tr>
                        <?php 
                           // echo "<td>" .$username ."</td>";
                        ?>
                    </tr>

                    <tr>
                    <?php
                    echo "<td>" .$count++ ."</td>";
                    echo "<td>" .$row["book_name"] ."</td>";
                    

                    
                     if ($row['status']=='0')
                        {  
                                  echo "<td> Waiting for action </td>";
                            
                        }
                
                    
                    elseif($row['status'] == 'Approved')
                        {
                            echo "<td>Approved</td>" ;
                        }
                    else {
                        echo "<td> Rejected </td>" ;
                    }
                }

    ?>
            </table>
        </form>
    </div>
    </div>

                </div>

                <!-- /.container-fluid -->

            </div>
            <div class="container-fluid">

<!-- Page Heading -->


<!-- DataTales Example -->

    </div>
    <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Issued Details</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Book Title</th>
                                            <th>Issued Date</th>
                                            <th>Return Date</th>
                                            <th>Status</th>
                                            
                                        </tr>
                                    </thead>
                            <?php
                            
                $sql = "SELECT a.book_title, a.book_id, b.book_id, b.l_id, b.issue_date, b.return_date, b.status, l.l_id, l.username 
                        from book_table a, book_issue b, login l where b.l_id = l.l_id 
                        and b.book_id = a.book_id and l.username = '$name'";
                            
                $result = mysqli_query($con,$sql);
                $num = mysqli_num_rows($result);
                $count = 1;
    
                            while($row = mysqli_fetch_array($result))
                {
                            ?>
                
                                        <tr>
                                            <?php
                                            echo "<td>" .$count++."</td>";
                                            echo "<td>" .$row['book_title'] ."</td>";
                                            echo "<td>" .$row['issue_date']. "</td>";
                                            echo "<td>" .$row['return_date']. "</td>";
                                            
                                            if($row['status'] == '0')
                                                {
                                                    echo "<td> Not Returned </td>";
                                                }

                                            else{

                                                echo "<td> Returned </td>";
                                            }


                                            //echo "<td>" .$row["second_author"] ."</td>";
                                            //echo "<td>" .$row["third_author"] ."</td>";
                                            //echo "<td>" .$row["year_of_publish"] ."</td>";
                                            //echo "<td>" .$row["edition"] ."</td>";
                                            //echo "<td>" .$row["category_name"]. "</td>";
                                             
                                            ?>
                        
                                        </tr>
                        <?php
                                        
                }
                ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            
            

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

   

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/demo/chart-bar-demo.js"></script>

</body>

</html>
<?php 
    }
    else{
        header("location: login.php");
    }
    ?>