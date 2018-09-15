<?php
header('Content-type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <?php
    include ("header_links.php");
    ?>
</head>

<body class="sticky-header">

    <section>
        <!-- sidebar left start-->
        <?php
		include("sidebar.php");
		include("fusioncharts.php");
		
		?>
        <!-- sidebar left end-->

        <!-- body content start-->
        <div class="body-content">
		<!-- header section start-->
		<?php
		include("header.php");
		?>
            
		<!-- header section end-->
			<!-- page head start-->
            <div class="page-head">
                <h3>
                    Dashboard
                </h3>
                <span class="sub-title">Welcome to Simply Perigord</span>
            </div>
            <!-- page head end-->

            <!--body wrapper start-->
            <div class="wrapper">
                <div style="width:100%;float:left;padding-bottom:20px;">
                    <select class="form-control" style="width:200px;float:right;" id="groups-order-by">
                        <option selected disabled>Select Year</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                    </select>
                </div>
                <section class="isolate-tabs">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active">
                            <a data-toggle="tab" href="#home">Total Members</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#about">Total Service Providers</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#profile">Total Users</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#contact">Total Services </a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#released">Released  Money</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#incoming">Incoming  Money</a>
                        </li>
                    </ul>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div id="home" class="tab-pane active">
                                <div id="chart-1"><!-- Fusion Charts will render here--></div>
                            </div>
                            <div id="about" class="tab-pane"><div id="chart-2"><!-- Fusion Charts will render here--></div></div>
                            <div id="profile" class="tab-pane"><div id="chart-3"><!-- Fusion Charts will render here--></div></div>
                            <div id="contact" class="tab-pane"><div id="chart-4"><!-- Fusion Charts will render here--></div></div>
                            <div id="released" class="tab-pane"><div id="chart-5"><!-- Fusion Charts will render here--></div></div>
                            <div id="incoming" class="tab-pane"><div id="chart-6"><!-- Fusion Charts will render here--></div></div>
                        </div>
                    </div>
                </section>
                <div class="row state-overview">
                    <div class="col-lg-3 col-sm-6" style="cursor:pointer;">
                        <section class="panel red">
                            <div class="symbol">
                                <span class="bg-warning" style="background:#ff6c60"><i class="fa fa-gamepad"></i></span>
                            </div>
                            <div class="value white">
                                <h1 class="timer" data-from="0" data-to="21" data-speed="1000">21</h1>
                                <p>Pending Service Approval</p>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <section class="panel green">
                            <div class="symbol">
                                <span class="bg-success"><i class="fa fa-gamepad"></i></span>
                            </div>
                            <div class="value white">
                                 <h1 class="timer" data-from="0" data-to="45" data-speed="1000">45</h1>
                                <p>Services In Progress</p>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <section class="panel purple">
                            <div class="symbol ">
                                <span class="bg-primary"><i class="fa fa-gamepad"></i></span>
                            </div>
                            <div class="value white">
                                <h1 class="timer" data-from="0" data-to="32" data-speed="1000">32</h1>
                                <p>Completed Services</p>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <section class="panel blue">
                            <div class="symbol ">
                                <span class="bg-info"><i class="fa fa-gamepad"></i></span>
                            </div>
                            <div class="value white">
                                <h1 class="timer" data-from="0" data-to="42" data-speed="1000">42</h1>
                                <p>Total Services </p>
                            </div>
                        </section>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-lg-12 ">
                            <div class="row earning-chart-info" style="padding-bottom:30px;">
                                <div class="col-sm-2 col-xs-6" style="background:#fff">
                                    <h2>57</h2>
                                    <small class="text-muted"> Total Active Members</small>
                                </div>
                                <div class="col-sm-2 col-xs-6" style="background:#fff">
                                    <h2>45</h2>
                                    <small class="text-muted">Total Active Users</small>
                                </div>
                                <div class="col-sm-2 col-xs-6" style="background:#fff">
                                    <h2>35</h2>
                                    <small class="text-muted">Total Active Service Providers</small>
                                </div>
                                <div class="col-sm-3 col-xs-6" style="background:#fff">
                                    <h2>75</h2>
                                    <small class="text-muted">Total Verified Services</small>
                                </div>
                                <div class="col-sm-3 col-xs-6" style="background:#fff">
                                    <h2>$ 45354</h2>
                                    <small class="text-muted">Total Revenue Generated</small>
                                </div>
                            </div>
                        <br/><br/><br/><br/><br/>
                        </div>
                    </div>
                    <!--state overview end-->
                <!--tab nav start-->
                </div>
                <!--body wrapper end-->
                <!--footer section start-->
                 <?php include("footer.php"); ?>
                <!--footer section end-->
            </div>
            <!-- body content end-->
        </section>
        <?php include("footer_links.php") ?>
    </body>
</html>
