<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>
    </head>

    <body>
<?php
//if (isset($_SESSION['Name'])) {
    $txtFName = $_POST['txtFName'];
    $txtMName = $_POST['txtMName'];
    $txtLName = $_POST['txtLName'];
    $cmbGender = $_POST['cmbGender'];
    $txtBDate = $_POST['txtBDate'];
    $txtHeight = $_POST['txtHeight'];
    $txtWeight = $_POST['txtWeight'];
    $txtCPName = $_POST['txtCPName'];
    $path1 = $_FILES["txtFile"]["name"];
    $txtCPAdd = $_POST['txtCPAdd'];
    $cmbCity = $_POST['cmbCity'];
    $txtCPMobile = $_POST['txtCPMobile'];
    $StationName = $_SESSION['Name'];
    move_uploaded_file($_FILES["txtFile"]["tmp_name"], "../Documents/" . $_FILES["txtFile"]["name"]);
    // Establish Connection with MYSQL
    $con = mysqli_connect("localhost", "root");
    // Select Database
    mysqli_select_db($con,"cms");
    // Specify the query to Insert Record
    $sql = "insert into missingperson_tbl (First_Name,Middle_Name,Last_Name,Gender,Birth_Date,Weight,Height,Contact_Person,Contact_Address,Contact_City,Contact_Mobile,Photo,Station_Name) values('" . $txtFName . "','" . $txtMName . "','" . $txtLName . "','" . $cmbGender . "','" . $txtBDate . "','" . $txtWeight . "','" . $txtHeight . "','" . $txtCPName . "','" . $txtCPAdd . "','" . $cmbCity . "','" . $txtCPMobile . "','" . $path1 . "','" . $StationName . "')";
    // execute query
    mysqli_query($con,$sql);
    // Close The Connection
    mysqli_close($con);

    echo '<script type="text/javascript">alert("Missing Person Inserted Succesfully");window.location=\'Missing.php\';</script>';
//} else {
  //  header("location:../index.php");
//}
?>
    </body>
</html>
