
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <link rel="shortcut icon" href="javascript:;" type="image/png">

    <title>Edit Season | Simply</title>
	<?php $this->load->view('common/metalinks');?>
    <!--bootstrap-fileinput-master-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/fileinput.css');?>" />
    <!--bootstrap picker-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/datepicker.css');?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/timepicker.css');?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/colorpicker.css');?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/daterangepicker-bs3.css');?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/datetimepicker.css');?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/multiple-image-upload.css');?>"/>
    <!--iCheck-->
    <link href="<?php echo base_url('css/all.css');?>" rel="stylesheet">
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
                    Edit Season
                </h3>
            </div>
            <!-- page head end-->

            <!--body wrapper start-->
            <div class="wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <div class="panel-body">
                            <?php
                                if($this->session->flashdata('update_season_successfull')){
                            ?>
                                <div class="alert alert-success"> <strong><?php echo $this->session->flashdata('update_season_successfull');?></strong> </div>
                            <?php
                                }else if($this->session->flashdata('update_season_failed')){
                            ?>
                                <div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('update_season_failed');?></strong> </div>
                            <?php
                                }
                            ?>
                            <form class="form-horizontal" role="form" method="POST" action="<?php echo base_url('edit_season/update_season');?>" enctype="multipart/form-data">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="inputpropname" class="col-lg-3 col-sm-3 control-label">Season Name</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="inputpropname" placeholder="Season Name" name="season_name" value="<?php echo $get_all_season->season_name?>">
                                            <input type="hidden" name="season_id" value="<?php echo $get_all_season->season_id?>">
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputprophouseSleeping" class="col-lg-3 col-sm-3 control-label">Date</label>
                                        <div class="col-lg-8">
                                           <div class="input-group input-large custom-date-range" data-date="13/07/2013" data-date-format="mm/dd/yyyy">
                                                <input type="text" class="form-control dpd1" name="date_from"  value="<?php echo $get_all_season->date_from?>">
                                                <span class="input-group-addon">To</span>
                                                <input type="text" class="form-control dpd2" name="date_to"  value="<?php echo $get_all_season->date_to?>">
                                            </div>
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12"> 
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-lg-12" style="text-align:center">
            									<button type="reset" class="btn btn-secondary">Cancel</button>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
<script>
function preview_images() 
{
 var total_file=document.getElementById("images").files.length;
 for(var i=0;i<total_file;i++)
 {
  $('#image_preview').append("<div class='col-md-3'><img class='img-responsive' style='height:100px;padding:3px;' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
 }
}
</script>
<script>
    function add_more_attri()
    {
        var max_fields = 4; //maximum input boxes allowed
        var x = 1; //initlal text box count
         x++;
        if(x < max_fields){ //max input box allowed
         //text box increment
        
         var htmlz = "<div class='form-group atrri_add_cont'><label for='inputpropsize' class='col-lg-3 col-sm-3 control-label'></label><div class='col-lg-3'><select class='form-control m-b-10' name='season'><option value=''>Please Select</option><option value='high'>High</option><option value='mid'>Mid</option><option value='low'>Low</option></select></div><div class='col-lg-3'><input type='text' class='form-control' id='inputpropsize' placeholder='Price' name='price' value='<?php echo $get_all_sale_property->price;?>'></div><div class='col-lg-2'><a href='javascript:void(0);' class='remove control-label' style='color:#ef5350;'><i class='fa fa-trash' style='font-size:1.9rem;'></i></a></div></div>";

         $(".add-more-contz").append(htmlz);
        }else{
            alert("booty");
        }

    
    $("body").on("click",".remove",function(){ 
          $(this).parents(".atrri_add_cont").remove();x--;
      });
    }
</script>
<!--bootstrap-fileinput-master-->
<script type="text/javascript" src="<?php echo base_url('js/fileinput.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/file-input-init.js');?>"></script>
<!--bootstrap picker-->
<script type="text/javascript" src="<?php echo base_url('js/bootstrap-datepicker.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/bootstrap-datetimepicker.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/moment.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/daterangepicker.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/bootstrap-colorpicker.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/bootstrap-timepicker.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/multiple-image-upload.js');?>"></script>

<!--picker initialization-->
<script src="<?php echo base_url('js/picker-init.js');?>"></script>

<!--Icheck-->
<script src="<?php echo base_url('js/icheck.min.js');?>"></script>
<!--icheck init-->
<script src="<?php echo base_url('js/icheck-init.js');?>"></script>
</body>
</html>
