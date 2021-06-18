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

    <title>Library Management-Add_Book</title>

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
                
                    <span>BOOKS</span></a>
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
                        <a class="collapse-item" href="admin_excel_upload.php">Excel Upload</a>
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

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                       

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-1 text-gray-800">Add New </h1>
                    <!---<p class="mb-4">Bootstrap's default utility classes can be found on the official <a
                            href="https://getbootstrap.com/docs">Bootstrap Documentation</a> page. The custom utilities
                        below were created to extend this theme past the default utility classes built into Bootstrap's
                        framework.</p>--->

                    <!-- Content Row -->
                    <div class="row">

                        <!-- First Column -->
                        <div class="col-sm-6">

                            <!-- Custom Text Color Utilities -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">New Book Details</h6>
                                </div>
                                <div class="card-body">
                                <form class="user" method="POST" action = "addbook.php" >
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Book Name</label>
                                        <input type="text" class="form-control form-control-user"  name ="bookname" required="required" autocomplete="off">
                                    </div>
                                    <div class="col-sm-6"><label>Author</label>
                                        <input type="text" class="form-control form-control-user"  name="author" required="required" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                         <label>Second Author</label>
                                            <input type="text"  name="secondauthor" class="form-control form-control-user" id="exampleInputEmail" autocomplete="off">
                                        </div>
                                    <div class="col-sm-6">
                                    <label>Third Author</label>
                                        <input type="text" class="form-control form-control-user"
                                             name="thirdauthor"  required="required" autocomplete="off">
                                        </div>
                                    </div>
                                    
                            
                                    <!---<div class="col-sm-6">
                                        <label>Date of Purchase</label>
                                        <input type="date" class="form-control" name="purchase" 
					                        id ="date"  required="required">
                                    </div>
                                </div>--->
                                <div class="form-group row">
                                    <div class ="col-sm-6 mb-3 mb-sm-0">
                                    <label>Number of Pages</label>
                                            <input type="text" class="form-control form-control-user"
                                            name="pagenumber" pattern="[0-9]{2,6}" required="required" autocomplete="off">
                                        </div>
                                                                    
                                            <div class="col-sm-6">
                                        <label>Date of Purchase</label>
                                        <input type="date" class="form-control" name="purchasedate" 
					                         min="1900-01-01"  required="required">
                                    </div>
                                </div>       

                                <div class="form-group row">
                                    <div class ="col-sm-6 mb-3 mb-sm-0">
                                    <label>Year of Publish</label>
                                            <input type="text" class="form-control form-control-user"
                                            name="publish_year" required="required" autocomplete="off">
                                        </div>
                                                                    
                                            <div class="col-sm-6">
                                        <label>Edition</label>
                                        <input type="text" class="form-control form-control-user" name="edition" 
					                         required="required" autocomplete="off">
                                    </div>
                                </div>             

                                <div class="form-group row">
                                    <div class ="col-sm-6 mb-3 mb-sm-0">
                                    <label>ISBN NO</label>
                                        <div class="col"><input type="text" class="form-control form-control-user"
                                            name="isbnno" pattern="[0-9]{2,6}" required="required" autocomplete="off"></div>
                                        
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Category</label>
                                            <select name = "category">
                                                <option vlue ="">----SELECT----</option>
                                                
                                                <?php
                                                $sql = "SELECT category_name from book_category";
                                                $result = mysqli_query($con,$sql);
                                                /*$p = $result;*/
                                                while($row = mysqli_fetch_array($result))
                                                {
                                                    echo "<option value='" . $row['category_name'] ."'>" . $row['category_name'] ."</option>";
                                                }
                                                echo "</select>"; 
                                                
                                                ?>
                                            </select>
                                            </div>
                                </div>
                                <div class="form-group row">
                                   <div class="col-sm-6 mb-3 mb-sm-0"><label>Book Count</label>
                                        <input type = "text" class="form-control form-control-user"
                                            name="bookcount"  required="required">
                                    </div>
                                
                                    <div class="col-sm-6"><label>Price</label>
                                        <input type="text" class="form-control form-control-user"
                                            name="price"  required="required">
                                    </div>
                                
                                </div>
                                <input type="submit" class="btn btn-primary btn-user btn-block" name ="add" value ="Add new">
                                
                                    
                                <!---<hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>--->
                            </form>
                                </div>
                            </div>

                            <!-- Custom Font Size Utilities -->
                          <!--   <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Custom Font Size Utilities</h6>
                                </div>
                                <div class="card-body">
                                    <p class="text-xs">.text-xs</p>
                                    <p class="text-lg mb-0">.text-lg</p>
                                </div>
                            </div>--->

                        </div>

                        <!-- Second Column -->
                        <div class="col-lg-4">

                           
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
          <!--   <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>--->
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
    

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>
<?php
/*if(isset($_POST['add']));
{
    $bname =$_POST['bookname'];
    $author = $_POST['author'];
    $second_author = $_POST['secondauthor'];
    $third_author = $_POST['thirdauthor'];
    $pages = $_POST['pagenumber'];
    $purchase = $_POST['purchasedate'];
    $publish = $_POST['publish_year'];
    $edition = $_POST['edition'];
    $isbn = $_POST['isbnno'];
    $category = $_POST['category'];
    $price = $_POST['price'];


    $sq = "INSERT INTO book_table (category_id,book_title,book_author,
            second_author,third_author,year_of_publish,edition,book_status) VALUES 
            ((SELECT category_id from book_category WHERE category_name = '$category'),'$bname',' $author','$second_author','$third_author',$publish,'$edition','Active')";

         
         $res=mysqli_query($con,$sq);
         
    
    $sql1 = "INSERT INTO book_details (book_id,book_price,number_of_page,date_of_purchase,isbn_no)
                VALUES ((SELECT book_id FROM book_table WHERE book_title = '$bname'), $price ,$pages,' $purchase','$isbn')";
         
         if(mysqli_query($con,$sql1))

            {
                ?>
                <script> alert ("Book Details Successfully Inserted");
                </script>
                <?php
            }
}*/

?>

<?php 
mysqli_close($con);
?>

</html>