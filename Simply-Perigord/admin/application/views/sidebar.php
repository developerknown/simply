<?php
echo $current_page_name = basename($_SERVER['REQUEST_URI']);
if (isset($this->session->userdata['logged_in'])) {
    $email = ($this->session->userdata['logged_in']['email']);
} else {
    header("location: index");
}
?>
<div class="sidebar-left">
    <div class="hidden-xs hidden-sm" style="height:60px;width:100%;"></div>
    <!--responsive view logo end-->
    <div class="sidebar-left-info">
        <!-- visible small devices start-->
        <img class="visible-xs visible-sm" src="<?php  echo base_url();  ?>assets/img/SIMPLYPRIGORD.png" style="width:200px;margin-top:-50px;margin-left:20px;" />
        <div class="visible-xs visible-sm" style="height:20px;width:100%;"></div>
        <div class=" search-field">  </div>

        <ul class="nav nav-pills nav-stacked side-navigation">
            <li class="<?php if($current_page_name == "Dashboard"){ ?>active<?php } ?>">
                <a href="<?php  echo base_url("Dashboard");  ?>">
                    <i class="fa fa-dashboard"></i><span>Dashboard</span>
                </a>
            </li>
            <li class="menu-list <?php if(($current_page_name == "Add_Rental_Property") || ($current_page_name == "View_Rental")){ ?>active<?php } ?> ">
                <a href="#"><i class="fa fa-home"></i> <span>Rentals</span></a>
                <ul class="child-list">
                    <li class="<?php if($current_page_name == "Add_Rental_Property"){ ?>active<?php } ?>">
                        <a href="<?php  echo base_url("Add_Rental_Property");  ?>"><i class="fa fa-plus"></i>Add Rental Property</a>
                    </li>
                    <li class="<?php if($current_page_name == "View_Rental"){ ?>active<?php } ?>">
                        <a href="<?php  echo base_url("Add_Rental_Property/View_Rental");  ?>"><i class="fa fa-eye"></i>View Rental Property</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>