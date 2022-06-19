<?php
include"config/config.php"; 
$sql="SELECT * FROM `user` WHERE `id`='$loginid'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
if(!isset($loginid)){
    header("location:index.html");
}        
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Profile-Lead Generator</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?php include("include/navbar.php") ?>
      
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <?php include("include/sidebar.php") ?>
            <!-- partial -->
             
           
           
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title">Profile</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profile</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <form class="forms-sample" action="api.php" method="POST" enctype="multipart/form-data">
                                        <div class="row1"style="text-align:center;">
                                       
                                         <div class="col-md-12">
                                          <img src="assets/images/<?php echo $row['image'];?>" value="<?php echo $row['image'];?>" class="btn-gradient-primary" style="border-radius:50%; border:5px solid #9a55ff; height:220px; width:230px;" alt="profile">

                                        </div>
                                        
                                        <div class="row1"style="text-align:center;">
                                        <label for="file-upload" style="width: max-content;margin: 15px;">
                                            <i class="mdi mdi-grease-pencil">Change Profile </i>
                                        </label>
                                        <input id="file-upload" style="display:none;" type="file" name="profile"> 
                                        </div>                               
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Name</label>
                                            <input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword4">Company</label>
                                            <input type="text" class="form-control" name="companyname" value="<?php echo $row['companyname'] ?>" placeholder="Company">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectGender">Eamil</label>
                                            <input type="text" class="form-control" value="<?php echo $row['email'] ?>" readonly placeholder="Email">
                                        </div>
                                        <button type="submit" class="btn btn-gradient-primary me-2" name="profileupdate">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <?php include("include/footer.php") ?>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/jquery-toast-plugin/jquery.toast.min.js"></script>

    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
        <script src="assets/js/toastDemo.js"></script>

    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>

    <!-- End custom js for this page -->
</body>

</html>