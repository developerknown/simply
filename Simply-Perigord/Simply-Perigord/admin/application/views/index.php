<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin</title>
    <!-- Base Styles -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php  echo base_url();  ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php  echo base_url();  ?>assets/css/style-responsive.css" rel="stylesheet">
</head>

<body class="login-body">
<div class="container log-row">
    <p style="text-align:center;margin-top:50px;"><img src="<?php  echo base_url();  ?>assets/img/SIMPLYPRIGORD.png" style="height:150px;" alt=""></p>

    <?php
    if (isset($logout_message)) {
        echo "<div class='message'>";
        echo $logout_message;
        echo "</div>";
    }
    ?>
    <?php
    if (isset($error_message)) {
        echo "<div class='message'>";
        echo $error_message;
        echo "</div>";
    }
    ?>
        <?php echo form_open('login'); ?>

        <div class="login-wrap form-signin">
            <input type="text" name="email" class="form-control" placeholder="Email" autofocus="">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <button style="font-size:12px;" class="btn btn-lg btn-success btn-block" name="submit" type="submit">LOGIN</button>
        </div>
   
</div>
</body>

</html>
