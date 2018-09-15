<?php
header('Content-type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Rental Property</title>
    <?php
    include ("header_links.php");
    ?>
</head>
<body class="sticky-header">
    <section>
        <!-- sidebar left start-->
        <?php
        include("sidebar.php");
        ?>
        <!-- sidebar left end-->
        <!-- body content start-->
        <div class="body-content" style="min-height: 1000px;">
            <!-- header section start-->
            <?php include("header.php"); ?>
            <!-- header section end-->
            <!-- page head start-->
            <div class="page-head" style="margin-top:20px">
                <h3>
                   Add Rental Property
                </h3>
                <!--<span class="sub-title">Welcome to Static Table</span>-->
                <div class="state-information">
                    <ol class="breadcrumb m-b-less bg-less">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Rental Property</li>
                    </ol>
                </div>
            </div>
            <!-- page head end-->

            <!--body wrapper start-->
            <div class="wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <?php
                            if($this->session->flashdata('msg')) {
                                echo $message = $this->session->flashdata('msg');
                            }
                            if(isset($error))
                            {
                                echo $error;
                            }
                            ?>
                            <header class="panel-heading">
                                Main Details
                            </header>

                            <form name="myform" method="POST" enctype="multipart/form-data" action="Add_Rental_Property/Add_Rental_Property">
                                <div class="col-lg-12">
                                    <div class="col-lg-2" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <b>Property Name</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="property_name" placeholder="Enter Property Name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-2" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <b>Property ID</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="property_id" placeholder="Enter Property ID">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="col-lg-2" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <b>Address</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="address" placeholder="Enter Address">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-2" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <b>Town</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="town" placeholder="Enter Town">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="col-lg-2" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <b>Phone</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="phone" placeholder="Enter Phone">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-2" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <b>Email</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" placeholder="Enter Email">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <header class="panel-heading">
                                    Features
                                </header>
                                <div class="col-lg-12">
                                    <div class="col-lg-2" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <b>Bedrooms</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="beds" placeholder="Enter Bedrooms">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <b>Bathroom</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="bathroom" placeholder="Bathroom">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="col-lg-2" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <b>Maximum Guests</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="maximum_guests" placeholder="Maximum Guests">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <b>Low Guests</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="low_guests" placeholder="Low Occupancy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <b>Pool Size</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="pool_size" placeholder="Pool Size">
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <header class="panel-heading">
                                    Price
                                </header>
                                <div class="col-lg-12">
                                    <div class="col-lg-2" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <b>Low Season Under Occupancy</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="low_season_under" placeholder="Price for Low Season Under Occupancy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <b>Low Season Full Occupancy</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="low_season_full" placeholder="Price for Low Season Full Occupancy">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="col-lg-2" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <b>Mid Season Under Occupancy</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="mid_season_under" placeholder="Price for Mid Season Under Occupancy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <b>Mid Season Full Occupancy</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="mid_season_full" placeholder="Price for Mid Season Full Occupancy">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="col-lg-2" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <b>High Season Under Occupancy</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="high_season_under" placeholder="Price for High Season Under Occupancy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <b>High Season Full Occupancy</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="high_season_full" placeholder="Price for High Season Full Occupancy">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <header class="panel-heading">
                                    Specification
                                </header>
                                <div class="col-lg-12">
                                    <div class="col-lg-2" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <b>Washer</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <select class="form-control" name="washer">
                                                    <option disabled >Select Option</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-2" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <b>TV</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <select class="form-control" name="tv">
                                                    <option disabled >Select Option</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="col-lg-2" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <b>Air Condition</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <select class="form-control" name="aircon">
                                                    <option disabled >Select Option</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-2" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <b>Wi-Fi</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <select class="form-control" name="wifi">
                                                    <option disabled >Select Option</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="col-lg-2" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <b>BBQ</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <select class="form-control" name="bbq">
                                                    <option disabled >Select Option</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-2" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <b>Private Parking</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <select class="form-control" name="private_parking">
                                                    <option disabled >Select Option</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="col-lg-2" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <b>Private Garden</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <select class="form-control" name="private_garden">
                                                    <option disabled >Select Option</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-2" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <b>Private Pool</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <select class="form-control" name="private_pool">
                                                    <option disabled >Select Option</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="col-lg-2" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <b>Pets Allowed</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <select class="form-control" name="pets_allowed">
                                                    <option disabled >Select Option</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-2" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <b>Family Friendly</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <select class="form-control" name="family_friendly">
                                                    <option disabled >Select Option</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="col-lg-2" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <b>Village House</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <select class="form-control" name="village_house">
                                                    <option disabled >Select Option</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-2" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <b>Rural Setting</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <select class="form-control" name="rural_setting">
                                                    <option disabled >Select Option</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="col-lg-2" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <b>Romatic For Two</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <select class="form-control" name="romatic_for_two">
                                                    <option disabled >Select Option</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-2" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <b>Cosy Cottage</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <select class="form-control" name="cosy_cottage">
                                                    <option disabled >Select Option</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="col-lg-2" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <b>Description</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-10" style="padding:0px;">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <textarea class="form-control summernote" name="description" rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="feature col-lg-12" >


                                </div>


                                <div class="btn btn-default ccccc" style="margin:20px 10px 0px 10px"><i class="fa fa-plus"></i> Add Feature</div>
                                <br/><br/><br/><br/>
                                <header class="panel-heading">
                                    Images
                                </header>
                                <div class="col-lg-12" style="margin:20px 0px">
                                    <div class="form-group row gal-upload">
                                        <label class="col-lg-12 control-label"><b>Primary Image </b></label>
                                        <div class="col-lg-4">
                                            <input id="file-4" class="file" type="file" multiple=false name="primary_image"  required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12" style="margin:20px 0px">
                                    <div class="form-group row gal-upload">
                                        <label class="col-lg-12 control-label"><b>Other Images (Hold Ctrl and select multiple files)</b></label>
                                        <div class="col-lg-12">
                                            <input id="file-4" class="file" type="file" multiple=true name="multiple_images[]">
                                        </div>
                                    </div>
                                </div>

                                <button  type="submit" name="submit" class="btn btn-success" style="margin:0px 10px 20px 10px"><i class="fa fa-check"></i> Submit</button>
                        </section>
                    </div>
                </div>
            </div>
            <!--body wrapper end-->
            </form>

            <!--footer section start-->
            <?php
            include("footer.php");
            ?>
            <!-- Right Slidebar end -->

        </div>
        <!-- body content end-->
    </section>

<?php
include('footer_links.php');
?>
<script>
    $(document).ready(function() {
        var wrapper         = $(".feature"); //Fields wrapper
        var add_button      = $(".ccccc"); //Add button ID
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            $(wrapper).append('<div class="col-lg-12" style="padding:0px;"><div class="col-lg-2" style="padding:0px;"><div class="panel-body"><div class="form-group"><b>Feature </b></div></div></div><div class="col-lg-4" style="padding:0px;"><div class="panel-body"><div class="form-group"><input type="text" class="form-control"  name="feature_name[]" placeholder="Enter Feature Name"></div></div></div><div class="col-lg-4" style="padding:0px;"><div class="panel-body"><div class="form-group"><input type="text" class="form-control"  name="feature_value[]" placeholder="Enter Feature Value"></div></div></div><button href="javascript:;"  style="margin-left:10px;margin-top:15px" class="col-md-1 remove_field1 btn btn-danger" data-dismiss="fileinput" ><i class="fa fa-trash"></i> Remove </button></div>'); //add input box
        });
        $(wrapper).on("click",".remove_field1", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').remove(); x--;
        });


        $('.summernote').summernote({
            height: 200,                 // set editor height

            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor

            focus: false                 // set focus to editable area after initializing summernote
        });
    });
</script>

</body>
</html>
