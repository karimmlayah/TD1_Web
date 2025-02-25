<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Travel Offer</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Sidebar Message -->
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


                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Add a Travel Offer</h1>
                    </div>

                    <!-- Content Row --> 

                    <div class="col-xl-6 col-md-12 mb-4"> <!-- Increased width -->
                        <div class="card border-left-primary shadow h-100 py-4 px-4"> <!-- Added padding -->
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-3">
                                            <form id="travelForm" action="verification.php" method="post" style="width: 100%;">
                                                <label for="title" style="font-size: 18px;">Title:</label>
                                                <input type="text" placeholder="Enter the title of the offer" id="title" name="title" 
                                                    title="Enter a title for the travel offer. The title must be at least 3 characters long."
                                                    style="width: 100%; padding: 10px; font-size: 16px; margin-bottom: 10px;">
                                                <div id="titleError" style="color: red; display: none;">Title must be at least 3 characters long.</div>
                                                <div id="titleCorrect" style="color: green; display: none;">Correct</div>
                                            
                                                <label for="destination" style="font-size: 18px;">Destination:</label>
                                                <input type="text" id="destination" name="destination" 
                                                    title="Enter the destination of the travel offer. The destination must be at least 3 characters long and contain only letters and spaces."
                                                    placeholder="Enter the travel destination" 
                                                    style="width: 100%; padding: 10px; font-size: 16px; margin-bottom: 10px;">
                                                <div id="destinationError" style="color: red; display: none;">Destination must be at least 3 characters long and contain only letters and spaces.</div>
                                                <div id="destinationCorrect" style="color: green; display: none;">Correct</div>
                                            
                                                <label for="departure_date" style="font-size: 18px;">Departure Date:</label>
                                                <input type="date" id="departure_date" name="departure_date" title="Select the departure date."
                                                    style="width: 100%; padding: 10px; font-size: 16px; margin-bottom: 10px;">
                                                <div id="departureDateError" style="color: red; display: none;">Please select a valid departure date.</div>
                                                <div id="departureDateCorrect" style="color: green; display: none;">Correct</div>
                                            
                                                <label for="return_date" style="font-size: 18px;">Return Date:</label>
                                                <input type="date" id="return_date" name="return_date" title="Select the return date."
                                                    style="width: 100%; padding: 10px; font-size: 16px; margin-bottom: 10px;">
                                                <div id="returnDateError" style="color: red; display: none;">Return date must be after the departure date.</div>
                                                <div id="returnDateCorrect" style="color: green; display: none;">Correct</div>
                                            
                                                <label for="price" style="font-size: 18px;">Price:</label>
                                                <input type="number" placeholder="Enter the price" id="price" name="price" step="any"
                                                    title="Enter the price of the travel offer. The price must be a positive number or decimal."
                                                    style="width: 100%; padding: 10px; font-size: 16px; margin-bottom: 10px;">
                                                <div id="priceError" style="color: red; display: none;">Price must be a positive number.</div>
                                                <div id="priceCorrect" style="color: green; display: none;">Correct</div>
                                            
                                                <label for="availability" style="font-size: 18px;">Availability:</label>
                                                <input type="checkbox" style="transform: scale(1.5); margin-left: 10px;" id="availability" name="availability">
                                            
                                                <br><br>
                                                <label for="category" style="font-size: 18px;">Category:</label>
                                                <select name="category" style="width: 100%; padding: 10px; font-size: 16px; margin-bottom: 10px;">
                                                    <option value="adventure">Adventure</option>
                                                    <option value="relaxation">Relaxation</option>
                                                    <option value="cultural">Cultural</option>
                                                    <option value="business">Business</option>
                                                    <option value="family">Family</option>
                                                </select>
                                            
                                                <br>
                                                <button type="submit" 
                                                    style="width: 100%; padding: 12px; font-size: 18px; background-color: #007bff; color: white; border: none; cursor: pointer; border-radius: 5px;">
                                                    Add Offer
                                                </button>
                                            </form>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <!-- Area Chart -->              
                    
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Travel Booking 2025</span>
                    </div>
                </div>
            </footer>
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
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <script src="part3.js"></script>
</body>

</html>