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

    <title>User Registration</title>

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
                  <!---  <form
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
                    </form>--->

                    <!-- Topbar Navbar -->
                   

                        <!-- Nav Item - User Information -->
                        <!---<li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>--->
                            <!-- Dropdown - User Information -->
                            <!---<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>--->

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <div class="row">

                        <div class="col-lg-6" >
                            <p style = "color: red">Students are requested to Register Only if they have the ID </p>

                            <!-- Circle Buttons -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">User Information</h6>
                                </div>
                                <div class="card-body">
                                   
                                    <!-- Circle Buttons (Default) -->
                                    
                                    <div class="container">
                                        <h2>Create New Account</h2>
                                        <form class="user" method="POST" action="../startbootstrap-sb-admin-2-gh-pages/PHP/Document.php"  name ="regform"  onsubmit="return checkPassword(this)">
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control form-control-user"  pattern="[A-Za-z]{1,255}" id="exampleFirstName" name ="name" required="required" autocomplete="off">
                                                </div>
                                                <div class="col-sm-6"><label>Email</label>
                                                    <input type="email" class="form-control form-control-user" id="exampleemail" name="email" required="required" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                     <label>Phone Number</label>
                                                        <input type="text" pattern="[6-9]{1}[0-9]{9}" name="phoneno" class="form-control form-control-user" id="exampleInputEmail" autocomplete="off">
                                                    </div>
                                            <div class="col-sm-6">
                                                <label>Department</label>
                                                    <input type="text" class="form-control form-control-user"
                                                        name="department" name="department"  pattern="[A-Za-z]{1,100}" required="required" autocomplete="off">
                                                    </div>
                                                </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label>Gender</label></br>
                                                    <input type="radio" class="forml-control forml-control-user" 
                                                            name="gender" checked required="required" value="male">Male
                                                            <input type="radio" class="forml-control" 
                                                            name="gender" value="female">Female
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>Date of Birth</label>
                                                    <input type="date" class="form-control" name="dob" 
                                                        id ="date" min="1900-01-01" max="2014-12-31" required="required">   </br>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label>Year of Join</label>
                                                    <input type="text" class="form-control form-control-user"  name ="year_of_join" required="required" autocomplete="off">
                                                </div>
                                                <div class="col-sm-6"><label>Library Number</label>
                                                    <input type="text" class="form-control form-control-user" id="lno" name="library_number" required="required" autocomplete="off">
                                                </div>
                                            </div>
            
                                            <div class="form-group row">
                                                <div class ="col-sm-6 mb-3 mb-sm-0">
                                                <label>Username</label>
                                                <input type="text" class="form-control form-control-user"
                                                            name="username" id = "username"  pattern="[A-Za-z]{1,100}" required="required" autocomplete="off">
                                                            <span id="availability"></span>
                                                        </div>

                                                     
                                                        <div class="col-sm-6">
                                                        <label>Your Position</label>
                                                    <select name="usertype">
                                                                <option value="">Select...</option>
                                                                <option value="User">User</option>
                                                                <option value="Faculty">Faculty</option>
                                                                </select>
                                                        </div>
                                                    
                                                </div>
                                                
                                            
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0"><label>Password</label>
                                                    <div class="col">
                                                        <input type="password" class="form-control form-control-user" name="passwrd"
                                                        id="password1" required="required">
                                                </div>
                                            </div>
                                                <div class="col-sm-6"><label>Confirm Password</label>
                                                    <input type="password" class="form-control form-control-user"
                                                        id="password2"  required="required">
                                                </div>
                                            
                                            </div>
                                            <button  type="submit" class="btn btn-primary btn-user btn-block" id = "register"> 
                                            
                                                Register Account</button>
                                            <!---<hr>
                                            <a href="index.html" class="btn btn-google btn-user btn-block">
                                                <i class="fab fa-google fa-fw"></i> Register with Google
                                            </a>
                                            <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                                <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                            </a>--->
                                        </form>
                                        <hr>
                                        <!---<div class="text-center">
                                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                                        </div>--->
                                        <!---<div class="text-center">
                                            <a class="small" href="login.html">Already have an account? Login!</a>
                                        </div>--->
                                    </div> 
                                </div>
                                        
                                      </div>
                                      
                                   

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
           <!--- <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>--->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->
        <script>
                 $(document).ready(function(){  
                        $('#username').blur(function(){

                        var username = $(this).val();

                    $.ajax({
                        url:'../startbootstrap-sb-admin-2-gh-pages/PHP/username_check.php',
                        method:"POST",
                        data:{user_name:username},
                        success:function(data)
                    {
            
            if(data != '0')
            {
                $('#availability').html('<span class="text-danger">Username not available</span>');
                $('#register').attr("disabled", true);
            }
            else
            {
                $('#availability').html('<span class="text-success">Username Available</span>');
                $('#register').attr("disabled", false);
            }
            }
            })

        });
        });  
</script>

        </script>

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
    <script type="text/javascript">
		function checkPassword(form) { 
                password1 = form.password1.value; 
                password2 = form.password2.value; 
  
                // If password not entered 
                if (password1 == '') 
                    alert ("Please enter Password"); 
                      
                // If confirm password not entered 
                else if (password2 == '') 
                    alert ("Please enter confirm password"); 
                      
                // If Not same return False.     
                else if (password1 != password2) { 
                    alert ("\nPassword did not match: Please try again...") 
                    return false; 
                } 
  
                // If same return True. 
                else{ 
                    alert("Password Match") 
                    return true; 
                } 
            } 
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>