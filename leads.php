<?php
include"config/config.php";

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
    <title>Purple Admin</title>
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
                        <h3 class="page-title">Leads </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Leads</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">
                        
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-9">
                                            <h4 class="card-title">Total Leads</h4>
                                        </div>
                                        <div class="col-3"style="
    display: flex;
    flex-direction: column;
">
                                           <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">Add leads<i class="mdi mdi-play-circle ml-1"></i></button>
                                        </div>
                                        
                                       
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content" style="background:white;">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Leads</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                          </div>
                          <div class="modal-body">
                           <form action="api.php" method="post">
                            <div class="row">
                                <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" name="name">
                            </div>
                            <div class="form-group col-6">
                                <label for="exampleInputEmail1">Service</label>

                                        <select class="form-control" name="service">
                                            <?php
                                            $sql="SELECT * FROM `services`";
                                            $result=mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_assoc($result)){
                                                ?>
                                                <option value="">Select </option>
                                                <option value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?></option>
                                                <?php
                                            }
                                            ?>

                                        </select>
                            </div>
                            <div class="row">
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" name="email">
                            </div>
                             <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Mobile</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" name="mobile">
                            </div>
                             <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Whatsapp</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" name="whatsapp">
                            </div>
                            </div>
                            
                        </div>
                            
                           
                          </div>
                          <div class="modal-footer">
                            <button type="submit" name="addleads"class="btn btn-success">Submit</button>
                            <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                          </div>
                           </form>
                        </div>
                      </div>
                    </div>
                                    </div>
                                    <?php 
                    $sql="SELECT * FROM `leads` order by id desc";
                    $result=mysqli_query($conn,$sql);
                                        
                    ?>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th> Name </th>
                                                <th> Service </th>
                                                <th> Mobile </th>
                                                <th> Whatsapp </th>
                                                <th> At</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                                while($row=mysqli_fetch_assoc($result))
                                                {
                                                    ?>
                                            <tr>
                                                <td>
                                                    <?php echo $row['name']; ?>
                                                </td>
                                                <td> <?php echo $row['service']; ?></td>
                                                <td>
                                                    <?php echo $row['mobile_no']; ?>
                                                </td>
                                                <td> <?php echo $row['whatsapp_no']; ?> </td>
                                                <td> <?php echo $row['date_time']; ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
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
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/modal-demo.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
</body>

</html>