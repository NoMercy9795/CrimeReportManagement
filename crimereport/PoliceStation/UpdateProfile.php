<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>
    </head>

    <body>
        <?php
        $Id = $_GET['Id'];
        $Name = $_POST['txtName'];
        $txtAdd = $_POST['txtAdd'];
        $txtCity = $_POST['txtCity'];
        $txtMobile = $_POST['txtMobile'];
        $txtEmail = $_POST['txtEmail'];
        $txtUser = $_POST['txtUser'];
        $txtPass = $_POST['txtPass'];
// Establish Connection with MYSQL
        $con = mysqli_connect("localhost", "root");
// Select Database
        mysqli_select_db($con,"cms");
// Specify the query to Update Record
        $sql = "Update policestation_tbl set Station_Name='" . $Name . "',Address='" . $txtAdd . "',City='" . $txtCity . "',Mobile='" . $txtMobile . "',Email='" . $txtEmail . "',UserName='" . $txtUser . "',Password='" . $txtPass . "' where Station_Id=" . $Id . "";
// Execute query
        mysqli_query($con,$sql);
// Close The Connection
        mysqli_close($con);
        echo '<script type="text/javascript">alert("Profile Updated Succesfully");window.location=\'Profile.php\';</script>';
        ?>
    </body>
</html>
