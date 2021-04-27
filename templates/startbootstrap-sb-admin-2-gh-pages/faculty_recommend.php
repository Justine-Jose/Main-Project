<?php

$con=mysqli_connect("localhost","root","","library_management")or die("Couldn't connect to server");
session_start();

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

    <title>Recommend</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="faculty_dashbord.php">
                <div class="sidebar-brand-icon rotate-n-15">
                
                </div>
                <div class="sidebar-brand-text mx-3">Library Management</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="faculty_dashbord.php">
                    
                    <span>FACULTY DASHBORD</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            

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
                        <a class="collapse-item" href="faculty_issued_book.php">Issued Books</a>
                        <a class="collapse-item" href="#">Issued Books(Test)</a>
                        <a class="collapse-item" href="faculty_reservation_details.php">Reservation Details</a>
                        <a class="collapse-item" href="faculty_searchbook.php">Search Books</a>
                        <a class="collapse-item" href="#">Dues Archives</a>
                        
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseThree">
                   <!--- <i class="fas fa-fw fa-cog"></i> --->
                    <span>DIGITAL LIBRARY</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">E-BOOK</h6>
                        <a class="collapse-item" href="faculty_ebook_add.php">Contribute Your E-Book</a>
                        <a class="collapse-item" href="#">Download E-Book</a>
                    </div>
                </div>


            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefour"
                    aria-expanded="true" aria-controls="collapsefour">
                   <!--- <i class="fas fa-fw fa-cog"></i> --->
                    <span>RECOMMEND</span>
                </a>
                <div id="collapsefour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Recomend Books</h6>
                        <a class="collapse-item" href="faculty_recommend.php">Recommend For Reference</a>
                        <a class="collapse-item" href="#">Download E-Book</a>
                    </div>
                </div>


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
                        <a class="collapse-item" href="faculty_profile.php">My Profile</a>
                        <a class="collapse-item" href="faculty_report.php">Activities</a>
                        
                      <!---<a class="collapse-item" href="#">Other</a>--->
                    </div>
                </div>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            

            <!-- Nav Item - Pages Collapse Menu -->
           

            

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
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                   

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        

                        <!-- Nav Item - Alerts -->
         

                        <!-- Nav Item - Messages -->
                   

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                   
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Recommend to Students</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Edition</th>
                                            <th>Recommend</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Edition</th>
                                            <th>Recommend</th>
                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>

                <?php

$sql = "SELECT b.book_id, b.category_id, b.book_title, b.book_author, b.second_author,
b.third_author,b.year_of_publish, b.edition, b.book_status, c.category_name 
FROM book_table b,book_category c WHERE b.category_id = c.category_id";

$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
$count = 1;

while($row = mysqli_fetch_array($result))
{

                ?>
                                        
                                        <tr>
                                           <?php echo  "<td>" .$count++ ."</td>"; ?>
                                           <?php echo  "<td>" .$row["book_title"] ."</td>"; ?>
                                          <?php echo "<td>" .$row["book_author"] . "</br>"  
                                            .$row['second_author'] ."</br>" 
                                            .$row['third_author'] . "</td>";  ?>
                                          <?php echo "<td>" .$row["edition"] ."</td>"; ?>
                                          <?php echo "<td><a href='../startbootstrap-sb-admin-2-gh-pages/PHP/recommend.php?x=" .$row['book_id']. " ' class = 'btn btn-success btn-sm'>Recommend</a></a>"; ?>
                                           
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

            <!-- Footer -->
            
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>

<?php 
    }
    else{
        header("location: login.php");
    }
    ?>