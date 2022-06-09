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
                        <h3 class="page-title">
                            <span class="page-title-icon bg-gradient-primary text-white me-2">
                                <i class="mdi mdi-home"></i>
                            </span> Dashboard
                        </h3>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">
                                    <span></span>Overview <i
                                        class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <?php 
                    $leads="select * from leads";
                    $services="select * from services";
                    $services_result=mysqli_query($conn,$services);
                    $services_count=mysqli_num_rows($services_result);
                    $lead_result=mysqli_query($conn,$leads);
                    $lead_count=mysqli_num_rows($lead_result);
                    ?>
                    <div class="row">
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card bg-gradient-danger card-img-holder text-white">
                                <div class="card-body">
                                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute"
                                        alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">Total Leads <i
                                            class="mdi mdi-chart-line mdi-24px float-right"></i>
                                    </h4>
                                    <h2 class="mb-5"><?php echo $lead_count; ?></h2>
                                    <h6 class="card-text">Increased by 60%</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card bg-gradient-info card-img-holder text-white">
                                <div class="card-body">
                                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute"
                                        alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">Total Services<i
                                            class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                                    </h4>
                                    <h2 class="mb-5"><?php echo $services_count; ?></h2>
                                    <h6 class="card-text">Decreased by 10%</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card bg-gradient-success card-img-holder text-white">
                                <div class="card-body">
                                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute"
                                        alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">Visitors Online <i
                                            class="mdi mdi-diamond mdi-24px float-right"></i>
                                    </h4>
                                    <h2 class="mb-5">95,5741</h2>
                                    <h6 class="card-text">Increased by 5%</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 grid-margin">
                        <div class="card card-statistics">
                            <div class="row">
                                <div class="card-col col-xl-3 col-lg-3 col-md-3 col-6 border-right">
                                    <div class="card-body">
                                        <div
                                            class="d-flex align-items-center justify-content-center flex-column flex-sm-row">
                                            <i
                                                class="mdi mdi-account-multiple-outline text-primary mr-0 mr-sm-4 icon-lg"></i>
                                            <div class="wrapper text-center text-sm-left">
                                                <p class="card-text mb-0">New Users</p>
                                                <div class="fluid-container">
                                                    <h3 class="mb-0 font-weight-medium">65,650</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-col col-xl-3 col-lg-3 col-md-3 col-6 border-right">
                                    <div class="card-body">
                                        <div
                                            class="d-flex align-items-center justify-content-center flex-column flex-sm-row">
                                            <i
                                                class="mdi mdi-checkbox-marked-circle-outline text-primary mr-0 mr-sm-4 icon-lg"></i>
                                            <div class="wrapper text-center text-sm-left">
                                                <p class="card-text mb-0">New Feedbacks</p>
                                                <div class="fluid-container">
                                                    <h3 class="mb-0 font-weight-medium">32,604</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-col col-xl-3 col-lg-3 col-md-3 col-6 border-right">
                                    <div class="card-body">
                                        <div
                                            class="d-flex align-items-center justify-content-center flex-column flex-sm-row">
                                            <i class="mdi mdi-trophy-outline text-primary mr-0 mr-sm-4 icon-lg"></i>
                                            <div class="wrapper text-center text-sm-left">
                                                <p class="card-text mb-0">Employees</p>
                                                <div class="fluid-container">
                                                    <h3 class="mb-0 font-weight-medium">17,583</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-col col-xl-3 col-lg-3 col-md-3 col-6">
                                    <div class="card-body">
                                        <div
                                            class="d-flex align-items-center justify-content-center flex-column flex-sm-row">
                                            <i class="mdi mdi-target text-primary mr-0 mr-sm-4 icon-lg"></i>
                                            <div class="wrapper text-center text-sm-left">
                                                <p class="card-text mb-0">Total Sales</p>
                                                <div class="fluid-container">
                                                    <h3 class="mb-0 font-weight-medium">61,119</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Jquery file upload</h4>
                                <div class="file-upload-wrapper">
                                    <div id="fileuploader">
                                        <div class="ajax-upload-dragdrop" style="vertical-align: top; width: 400px;">
                                            <div class="ajax-file-upload"
                                                style="position: relative; overflow: hidden; cursor: default;">Upload
                                                <form method="POST" action="../../../assets/images/"
                                                    enctype="multipart/form-data" style="margin: 0px; padding: 0px;">
                                                    <input type="file" id="ajax-upload-id-1654757933386" name="myfile[]"
                                                        accept="*" multiple=""
                                                        style="position: absolute; cursor: pointer; top: 0px; width: 100%; height: 100%; left: 0px; z-index: 100; opacity: 0;">
                                                </form>
                                            </div><span><b>Drag &amp; Drop Files</b></span>
                                        </div>
                                        <div></div>
                                    </div>
                                    <div class="ajax-file-upload-container"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                    $sql="SELECT * FROM `leads` order by id desc limit 5";
                    $result=mysqli_query($conn,$sql);
                                        
                    ?> <div class="row">
                        <div class="col-7 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Recent Leads</h4>
                                    <div class="table-responsive">
                                        <table class="table">
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
                        <div class="col-md-5 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title text-white">Todo</h4>
                                    <div class="add-items d-flex">
                                        <input type="text" class="form-control todo-list-input"
                                            placeholder="What do you need to do today?">
                                        <button class="add btn btn-gradient-primary font-weight-bold todo-list-add-btn"
                                            id="add-task">Add</button>
                                    </div>
                                    <div class="list-wrapper">
                                        <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                                            <li>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox">
                                                        Meeting with Alisa
                                                    </label>
                                                </div>
                                                <i class="remove mdi mdi-close-circle-outline"></i>
                                            </li>
                                            <li class="completed">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox" checked> Call John
                                                    </label>
                                                </div>
                                                <i class="remove mdi mdi-close-circle-outline"></i>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox">
                                                        Create invoice </label>
                                                </div>
                                                <i class="remove mdi mdi-close-circle-outline"></i>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox">
                                                        Print Statements
                                                    </label>
                                                </div>
                                                <i class="remove mdi mdi-close-circle-outline"></i>
                                            </li>
                                            <li class="completed">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox" checked> Prepare for
                                                        presentation </label>
                                                </div>
                                                <i class="remove mdi mdi-close-circle-outline"></i>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox">
                                                        Pick up kids from
                                                        school </label>
                                                </div>
                                                <i class="remove mdi mdi-close-circle-outline"></i>
                                            </li>
                                        </ul>
                                    </div>
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
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
</body>

</html>