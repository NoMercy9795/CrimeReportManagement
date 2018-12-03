<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Crime Management System</title>
        <link href="templatemo_style.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            <!--
            .style1 {color: #FFFFFF}
            .style5 {color: #000000; font-weight: bold; }
            -->
        </style>
    </head>
    <body>
        <div id="templatemo_wrapper">
            <?php
            include "Header.php"
            ?>
            <div id="templatemo_content">
                <div class="section_w800">
                    <h2>Manage Profile</h2>
                    <?php
                    // Establish Connection with Database
                    $con = mysqli_connect("localhost", "root");
// Select Database
                    mysqli_select_db($con,"cms");
// Specify the query to execute
                    $sql = "select * from policestation_tbl where Station_Id='" . $_SESSION['ID'] . "' ";
// Execute query
                    $result = mysqli_query($con,$sql);
// Loop through each records 
                    while ($row = mysqli_fetch_array($result)) {
                        $Id = $row['Station_Id'];
                        $Name = $row['Station_Name'];
                        $Address = $row['Address'];
                        $City = $row['City'];
                        $Email = $row['Email'];
                        $Mobile = $row['Mobile'];
                        $UserName = $row['UserName'];
                        $Password = $row['Password'];
                    }
                    ?>
                    <table width="100%" height="246" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td height="35" bgcolor="#91D5E8"><span class="style5">ID:</span></td>
                            <td bgcolor="#91D5E8"><span class="style5"><?php echo $Id; ?></span></td>
                        </tr>
                        <tr>
                            <td height="37" bgcolor="#DAF1F8"><span class="style5"><strong>Name:</strong></span></td>
                            <td bgcolor="#DAF1F8"><span class="style5"><?php echo $Name; ?></span></td>
                        </tr>
                        <tr>
                            <td height="38" bgcolor="#91D5E8"><span class="style5"><strong>Address:</strong></span></td>
                            <td bgcolor="#91D5E8"><span class="style5"><?php echo $Address; ?></span></td>
                        </tr>
                        <tr>
                            <td height="34" bgcolor="#DAF1F8"><span class="style5"><strong>City:</strong></span></td>
                            <td bgcolor="#DAF1F8"><span class="style5"><?php echo $City; ?></span></td>
                        </tr>
                        <tr>
                            <td height="32" bgcolor="#91D5E8"><span class="style5"><strong>Mobile:</strong></span></td>
                            <td bgcolor="#91D5E8"><span class="style5"><?php echo $Mobile; ?></span></td>
                        </tr>
                        <tr>
                            <td height="34" bgcolor="#DAF1F8"><span class="style5"><strong>Email:</strong></span></td>
                            <td bgcolor="#DAF1F8"><span class="style5"><?php echo $Email; ?></span></td>
                        </tr>


                        <tr>
                            <td>&nbsp;</td>
                            <td><a href="EditProfile.php?StationId=<?php echo $Id; ?>"><strong>Edit Profile</strong></a></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
<?php
// Close the connection
mysqli_close($con);
?>
                    <p>&nbsp;</p>
                    <div class="cleaner"></div>
                </div> <!-- end of section_w760 -->

            </div> <!-- end of templatemo_content -->
<?php
include "Footer.php";
?>

        </div> <!-- end of templatemo_wrapper -->
    </body>
</html>