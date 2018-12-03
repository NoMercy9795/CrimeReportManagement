<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>
    </head>

    <body>
        <?php
        $Id = $_GET['Missing'];
        // Establish Connection with MYSQL
        $con = mysqli_connect("localhost", "root");
        // Select Database
        mysqli_select_db($con,"cms");
        // Specify the query to Insert Record
        $sql = "delete from missingperson_tbl where Person_Id ='" . $Id . "'";
        // execute query
        mysqli_query($con,$sql);
        // Close The Connection
        mysqli_close($con);
        echo '<script type="text/javascript">alert("Missing Person Deleted Succesfully");window.location=\'Missing.php\';</script>';
        ?>
    </body>
</html>
