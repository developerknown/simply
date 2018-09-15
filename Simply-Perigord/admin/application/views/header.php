<?php
$result = $this->Login_database->read_user_information($email);
$name = $result[0]->name;
?>
<div class="header-section">
    <!--logo and logo icon start-->
    <div class="logo dark-logo-bg hidden-xs hidden-sm" style="height:120px;border-bottom:2px solid #eea000;">
        <a href="dashboard.php" style="background:#32323a;">
            <!--<i class="fa fa-maxcdn"></i>-->
            <img src="<?php  echo base_url();  ?>assets/img/SIMPLYPRIGORD.png" style="width:200px;margin-top:10px;" />
        </a>
    </div>
    <!--logo and logo icon end-->

    <a class="toggle-btn"><i class="fa fa-outdent"></i></a>


    <div class="notification-wrap">
    <!--right notification start-->
        <div class="right-notification">
            <ul class="notification-menu">
                <li>
                    <a href="javascript:;" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="text-transform: capitalize;">
                        <img src="<?php  echo base_url();  ?>assets/img/goku2.jpg" alt="" style="width:30px;">
                        <?php echo $name; ?>
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu purple pull-right">
                        <li><a href="change-admin-password.php"><i class="fa fa-key pull-right"></i> Change Password</a></li>
                        <li><a href="Logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    <!--right notification end-->
    </div>
</div>