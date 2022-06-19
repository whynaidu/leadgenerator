<?php
$sql="SELECT * FROM `user` WHERE `id`='$loginid'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?><nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="assets/images/<?php echo $row['image']?>" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">
                        <?php echo $name;?></span>
                    <span class="text-secondary text-small"><?php echo $companyname;?></span>
                </div>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="leads.php">
                <span class="menu-title">Leads</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
            </a>
        </li>
        <?php
        if(($admin)==1){

?>
        <li class="nav-item">
            <a class="nav-link" href="customize.php">
                <span class="menu-title">Customize Form</span>
                <i class="mdi mdi-contacts menu-icon"></i>
            </a>
        </li>
        <?php }else if(($admin)==0){ ?>


           <?php } ?>
        <li class="nav-item">
            <a class="nav-link" href="profile.php">
                <span class="menu-title">Profile</span>
                <i class="mdi mdi-contacts menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logout.php">
                <span class="menu-title">Logout</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
        </li>

    </ul>
</nav>







