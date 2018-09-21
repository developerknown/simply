
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="slick, flat, dashboard, bootstrap, admin, template, theme, responsive, fluid, retina">
    <link rel="shortcut icon" href="javascript:;" type="image/png">

    <title>Listing Holiday Rental Property | Simply</title>
	<?php $this->load->view('common/metalinks');?>
    <!--Data Table-->
    <link href="css/jquery.dataTables.css" rel="stylesheet">
    <link href="css/dataTables.tableTools.css" rel="stylesheet">
    <link href="css/dataTables.colVis.min.css" rel="stylesheet">
    <link href="css/dataTables.responsive.css" rel="stylesheet">
    <link href="css/dataTables.scroller.css" rel="stylesheet">   
</head>

<body class="sticky-header">

    <section>
        <?php $this->load->view('common/sidebar_left');?>

        <!-- body content start-->
        <div class="body-content" style="min-height: 1000px;">

           <?php $this->load->view('common/header');?>

            <!-- page head start-->
            <div class="page-head">
                <h3 class="m-b-less">
                    Listing Holiday Rental Property
                </h3>
            </div>
            <!-- page head end-->

            <!--body wrapper start-->
            <div class="wrapper">

                <div class="row">
                    <div class="col-sm-12">
                        <section class="panel">
                             <?php
                                if($this->session->flashdata('delete_rent_successfull')){
                            ?>
                                  <div class="alert alert-success"> <strong><?php echo $this->session->flashdata('delete_rent_successfull');?></strong> </div>
                            <?php
                              }else if($this->session->flashdata('delete_rent_failed')){
                            ?>
                                   <div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('delete_rent_failed');?></strong> </div>
                            <?php
                              }
                            ?>
                            <!--<header class="panel-heading ">
                                Column Visible Data Table
                                <span class="tools pull-right">
                                    <a class="fa fa-repeat box-refresh" href="javascript:;"></a>
                                    <a class="t-close fa fa-times" href="javascript:;"></a>
                                </span>
                            </header>-->
                            <div class="table-responsive">
                                <table class="table colvis-data-table data-table">
                                    <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>Property Name</th>
                                        <th>Property Location</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th width="105px;">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $i = 1;
                                        foreach($get_all_rental_property AS $fetch_each_property){
                                    ?>
                                    <tr>
                                        <td><?php echo $i;?></td>
                                        <td><?php echo $fetch_each_property->name;?></td>
                                        <td><?php echo $fetch_each_property->location;?></td>
                                        <td><?php echo $fetch_each_property->booked_date;?></td>
                                        <td><?php 
                                            if($fetch_each_property->status == '1'){
                                                echo "Active";
                                            }else{
                                                echo "Inactive";
                                            }
                                        ?></td>
                                        <td>
                                            <a href="<?php echo base_url('listing_holiday_rental/delete_rental_id/');?><?php echo $fetch_each_property->holiday_rental_id?>" class="btn btn-default">Delete</a>
                                            <a href="<?php echo base_url('edit_holiday_rental/');?><?php echo $fetch_each_property->holiday_rental_id?>" class="btn btn-primary">Edit</a>
                                        </td>
                                    </tr>
                                    <?php
                                        $i++;
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                </div>

            </div>
            <!--body wrapper end-->
            
			<?php $this->load->view('common/footer');?>
           

        </div>
        <!-- body content end-->
    </section>

<!--Data Table-->
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.tableTools.min.js"></script>
<script src="js/bootstrap-dataTable.js"></script>
<script src="js/dataTables.colVis.min.js"></script>
<script src="js/dataTables.responsive.min.js"></script>
<script src="js/dataTables.scroller.min.js"></script>
<!--data table init-->
<script src="js/data-table-init.js"></script>
</body>
</html>
