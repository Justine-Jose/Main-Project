<?php
session_start();

$con=mysqli_connect("localhost","root","","library_management")or die("Couldn't connect to server");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="Dashbord.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <!---<i class="fas fa-laugh-wink"></i>--->
                </div>
                <div class="sidebar-brand-text mx-3">Library Management </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="Dashbord.php">
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
                    <!---<i class="fas fa-fw fa-cog"></i>--->
                    <span>USERS</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">User Management:</h6>
                        <a class="collapse-item" href="add_user.php">Add New User</a>
                        <a class="collapse-item" href="manage_user.php">Manage User</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <!---<i class="fas fa-fw fa-wrench"></i>--->
                    <span>BOOKS</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Manage Book:</h6>
                        <a class="collapse-item" href="add_book.php">Add New Books</a>
                        <a class="collapse-item" href="admin_view Books.php">Manage Book</a>
                        <a class="collapse-item" href="admin purchase book details.php">Purchase Details</a>
                        <a class="collapse-item" href="add_category.php">New Category</a>
                       <!--- <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>--->
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#One"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <!---<i class="fas fa-fw fa-wrench"></i>--->
                    <span>E-BOOKS</span>
                </a>
                <div id="One" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Manage Book:</h6>
                        <a class="collapse-item" href="ebook_add.php">UPLOAD NEW </a>
                        <a class="collapse-item" href="admin_approve_ebook.php">USER UPLOADS</a>
                        <a class="collapse-item" href="#">DETAILS</a>
                       <!--- <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>--->
                    </div>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitie"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <!---<i class="fas fa-fw fa-wrench"></i>--->
                    <span>ISSUE</span>
                </a>
                <div id="collapseUtilitie" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header" href = "#">Issue Books</h6>
                        <a class="collapse-item" href="admin_issue book.php">Issue New Book</a>
                        <a class="collapse-item" href="admin_return book.php">Return</a>
                        <a class="collapse-item" href="#">Manage Issue</a>
                        
                       <!--- <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>--->
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            
            <!-- Nav Item - Pages Collapse Menu -->
            

            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

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
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        

                        <!-- Nav Item - Alerts -->
                        
                            <!-- Dropdown - Alerts -->
                            
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">User Uploaded E-Book</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <form method = "POST" action = "php/approve.php">
                                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Book Title</th>
                                             <!---<th>Department</th>
                                            <th>Uploaded Date</th>--->
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <!---<tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Book Title</th>
                                            <th>Department</th>
                                            <th>Uploaded Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>--->
<?php

   $sql = "SELECT b.ebook_id, b.l_id, b.book_name, b.status, l.l_id, l.username from ebook_table b,
            login l WHERE b.l_id = l.l_id AND b.status = '0'";
    $result = mysqli_query($con,$sql);
    $num = mysqli_num_rows($result);
    $count = 1;
     
    while($row = mysqli_fetch_array($result))

    {

    
    

?>
                                
                                        <tr>
                                    <?php
                                             echo "<td>" .$count++ ."</td>";
                                             echo "<td>" .$row["username"] ."</td>";
                                             echo "<td>" .$row["book_name"] ."</td>";
                                             //echo "<td>" .$row["ebook_id "] ."</td>";
                                             //echo "<td>" .$row["status"] ."</td>";?>
                                             <!---<td><input type = "hidden" name ="l_id" value ="<?php //echo $row['l_id']; ?>" </td>--->
                                             <?php echo "<td><a href='../startbootstrap-sb-admin-2-gh-pages/PHP/approve.php?x=" .$row['l_id']. " ' class = 'btn btn-success btn-sm'><i class='fa fa-check' aria-hidden='true'></i></a></a>"; 
                                             
                                             echo "<a href='../startbootstrap-sb-admin-2-gh-pages/PHP/reject.php?y=" .$row['l_id']. "' class = 'btn btn-danger btn-sm' aria-label= 'Left Align'>  <i class='fa fa-times' aria-hidden='true'></i></a>";
                                             ?>
                                             
                                             
                                             </td>
                                             
                                             <?php
                                           

                                    ?>
                                        </tr>
        <?php

        }
        ?>
                                    </tbody>
                                </table>
                                </form>
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