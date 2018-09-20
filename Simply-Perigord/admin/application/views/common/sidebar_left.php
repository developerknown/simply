 <!-- sidebar left start-->
        <div class="sidebar-left">
            <!--responsive view logo start-->
            <div class="logo dark-logo-bg visible-xs-* visible-sm-*">
                <a href="index.html">
                    <img src="images/logo-icon.png" alt="">
                    <!--<i class="fa fa-maxcdn"></i>-->
                    <span class="brand-name">SlickLab</span>
                </a>
            </div>
            <!--responsive view logo end-->

            <div class="sidebar-left-info">
                <!-- visible small devices start-->
                <div class=" search-field">  </div>
                <!-- visible small devices end-->

                <!--sidebar nav start-->
                <ul class="nav nav-pills nav-stacked side-navigation">
                    <li>
                        <h3 class="navigation-title">Navigation</h3>
                    </li>
                    <li><a href="index.html"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
                    <li class="menu-list">
                        <a href=""><i class="fa fa-laptop"></i>  <span>SALE Property</span></a>
                        <ul class="child-list">
                            <li><a href="<?php echo base_url('listing_sale_property');?>"> View Sale Property</a></li>
                            <li><a href="<?php echo base_url('add_sale_property');?>"> Add Sale Property</a></li>
                        </ul>
                    </li>
                    <li class="menu-list"><a href=""><i class="fa fa-book"></i> <span>Holiday Rental Property</span></a>
                        <ul class="child-list">
                            <li><a href="<?php echo base_url('listing_holiday_rental');?>"> View Rental Property</a></li>
                            <li><a href="<?php echo base_url('add_holiday_rental');?>"> Add Rental Property</a></li>
                        </ul>
                    </li>
                </ul>
                <!--sidebar nav end-->
            </div>
        </div>
        <!-- sidebar left end-->