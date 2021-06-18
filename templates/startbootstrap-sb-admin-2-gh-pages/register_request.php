<?php
    include('PHP/connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register Request</title>

    <!-- Custom fonts for this template-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
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
                        <a class="collapse-item" href="admin_excel_upload.php">Excel Upload</a>
                        <a class="collapse-item" href="register_request.php">User Register Request </a>
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
                        <a class="collapse-item" href="mail_page.php">Order New Books</a>
                        <!---<a class="collapse-item" href="utilities-other.html">Other</a>--->
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
                        <a class="collapse-item" href="admin_approve_ebook_test.php">USER UPLOADS(TEST)</a>
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
                        <a class="collapse-item" href="admin_manage_issuebook.php">Manage Issue</a>
                        
                       <!--- <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>--->
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            

            <!-- Nav Item - Pages Collapse Menu -->
            

            <!-- Nav Item - Charts -->
            

            <!-- Nav Item - Tables -->
            

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
                       

                        <!-- Nav Item - Alerts -->
                        

                        <!-- Nav Item - Messages -->
                      

                        
                        <!-- Nav Item - User Information -->
                        

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                        <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Registration Request</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                    
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            
                                        
                                            <thead>
                                                    <tr>
                                                        <th>Number</th>
                                                        <th>Name</th>
                                                        <th>EMail</th>
                                                        <th>Department</th>
                                                        <th>Library Number</th>
                                                        <th>User Type</th>
                                                        <th>Action</th>
                                                    
                                                    </tr>
                                            </thead>

                                                    <?php
                                                            //$sql = "SELECT * FROM member_registration WHERE m_status = '0'";
                                                            $sql = "SELECT m.m_name, m.m_email, m.m_dept, m.library_no, m.user_type, m.l_id,
                                                                    m.m_status, l.l_id, l.status FROM member_registration m, login l where m.l_id = l.l_id
                                                                    and l.status = '0' ";
                                                            $res = mysqli_query($con, $sql);
                                                            $count = 1;
                                                            while($row = mysqli_fetch_array($res))
                                                                {
                                                                    ?>
                                                                    <tbody>
                                                                        <tr>
                                                                        <?php echo "<td class = 'Text-center'>" .$count++ ."</td>"; ?>
                                                                        <?php echo "<td class = 'Text-center'>" .$row['m_name'] ."</td>";?>
                                                                        <?php echo "<td class = 'Text-center'>" .$row['m_email'] ."</td>";?>
                                                                        <?php echo "<td class = 'Text-center'>" .$row['m_dept'] ."</td>";?>
                                                                        <?php echo "<td class = 'Text-center'>" .$row['library_no'] ."</td>";?>
                                                                        <?php echo "<td class = 'Text-center'>" .$row['user_type'] ."</td>";?>
                                                                        <?php echo "<td><a href='PHP/request_approe.php?x=" .$row['l_id']. " ' class = 'btn btn-success btn-sm'>Approve</a>";
                                                                            echo "<a href='PHP/request_reject.php?y=" .$row['l_id']. "' class = 'btn btn-danger btn-sm'> Reject</a></td>";?>
                                                                        
                                                                    
                                                                            
                                                                    <?php
                                                                }

                                                    ?>

                                        </table>
                                    </div>
                                </div>
                        </div>    
                                            
                

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

                                                
            
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

</body>

</html>