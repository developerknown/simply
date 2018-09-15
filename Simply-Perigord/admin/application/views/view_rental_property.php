<?php
header('Content-type: text/html; charset=utf-8');
$rt = $this->Rental_Property->list_view();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Rental Property</title>
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
                View Rental Property
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


                        <div class="row">
                            <div class="col-sm-12">
                                <section class="panel">
                                    <header class="panel-heading ">
                                        Responsive Data Table
                                        <span class="tools pull-right">
                                    <a class="fa fa-repeat box-refresh" href="javascript:;"></a>
                                    <a class="t-close fa fa-times" href="javascript:;"></a>
                                </span>
                                    </header>
                                    <div class="table-responsive">
                                        <table class="table responsive-data-table data-table">
                                            <thead>
                                            <tr>
                                                <th>
                                                    Sl. No.
                                                </th>
                                                <th>
                                                    Property ID
                                                </th>
                                                <th>
                                                    Property Name
                                                </th>
                                                <th>
                                                    Phone
                                                </th>
                                                <th>
                                                    Primary Image
                                                </th>
                                                <th>
                                                    Listed On
                                                </th>
                                                <th>
                                                    Edit
                                                </th>
                                                <th>
                                                    Delete
                                                </th>
                                                <th class="none">
                                                    Address
                                                </th>
                                                <th class="none">
                                                    Town
                                                </th>
                                                <th class="none">
                                                    E-mail
                                                </th>
                                                <th class="none">
                                                    Main Details
                                                </th>
                                                <th class="none">
                                                    Price
                                                </th>
                                                <th class="none">
                                                    Specifications
                                                </th>
                                                <th class="none">
                                                    Description
                                                </th>
                                                <th class="none">
                                                    Feature
                                                </th>
                                                <th class="none">
                                                    Other Images
                                                </th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            if($rt != false) {
                                                $count = 1;
                                                foreach ($rt as $something => $ssss) {
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo $count; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $ssss->property_id; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $ssss->property_name; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $ssss->phone; ?>
                                                        </td>
                                                        <td>
                                                            <img src="<?php echo base_url(); ?>assets/uploads/<?php echo $ssss->primary_image; ?>"
                                                                 style="max-width:50px"/>
                                                        </td>
                                                        <td>
                                                            12th Sept, 2018
                                                        </td>
                                                        <td>
                                                            <a href="" class="btn btn-info"><i class="fa fa-pencil"></i> Edit </a>
                                                        </td>
                                                        <td>
                                                            <a href="" class="btn btn-danger"><i class="fa fa-trash"></i> Delete </a>
                                                        </td>
                                                        <td>
                                                            Pencil
                                                        </td>
                                                        <td>
                                                            Pencil
                                                        </td>
                                                        <td>
                                                            Pencil
                                                        </td>
                                                        <td>
                                                            Pencil
                                                        </td>
                                                        <td>
                                                            Jones
                                                        </td>
                                                        <td>
                                                            Pencil
                                                        </td>
                                                        <td>
                                                            Pencil
                                                        </td>
                                                        <td>
                                                            Pencil
                                                        </td>
                                                        <td>
                                                            Pencil
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    $count++;
                                                }
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                            </div>

                        </div>
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


</body>
</html>
