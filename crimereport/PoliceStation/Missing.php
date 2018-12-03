<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Crime Management System</title>
        <link href="templatemo_style.css" rel="stylesheet" type="text/css" />
        <script src="../SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
        <script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
        <script src="../SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
        <link href="../SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            <!--
            .style1 {font-size: 12px}
            .style2 {color: #FFFFFF}
            -->
        </style>
        <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            <!--
            .style3 {color: #000000}
            -->
        </style>
        <link href="../SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            <!--
            .style6 {color: #CCCCCC}
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
                    <h2>Manage Missing Persons</h2>
                    <div id="TabbedPanels1" class="TabbedPanels">
                        <ul class="TabbedPanelsTabGroup">
                            <li class="TabbedPanelsTab style1 style2" tabindex="0">Enter Missing Person</li>
                            <li class="TabbedPanelsTab style1 style2" tabindex="0">Display Missing Person</li>
                        </ul>
                        <div class="TabbedPanelsContentGroup">
                            <div class="TabbedPanelsContent">
                                <form action="InsertMissing.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                                    <table width="100%" height="512" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td><span class="style3">First Name:</span></td>
                                            <td><span id="sprytextfield1">
                                                    <label>
                                                        <input type="text" name="txtFName" id="txtFName" />
                                                    </label>
                                                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="style3">Middle Name:</span></td>
                                            <td><span id="sprytextfield2">
                                                    <label>
                                                        <input type="text" name="txtMName" id="txtMName" />
                                                    </label>
                                                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="style3">Last Name:</span></td>
                                            <td><span id="sprytextfield3">
                                                    <label>
                                                        <input type="text" name="txtLName" id="txtLName" />
                                                    </label>
                                                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="style3">Gender:</span></td>
                                            <td><label>
                                                    <select name="cmbGender" id="cmbGender">
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                                </label></td>
                                        </tr>
                                        <tr>
                                            <td><span class="style3">Birth Date:</span></td>
                                            <td><span id="sprytextfield4">
                                                    <label>
                                                        <input type="text" name="txtBDate" id="txtBDate" />
                                                    </label>
                                                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="style3">Height:</span></td>
                                            <td><span id="sprytextfield5">
                                                    <label>
                                                        <input type="text" name="txtHeight" id="txtHeight" />
                                                    </label>
                                                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="style3">Weight:</span></td>
                                            <td><span id="sprytextfield6">
                                                    <label>
                                                        <input type="text" name="txtWeight" id="txtWeight" />
                                                    </label>
                                                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="style3">Person to Contact:</span></td>
                                            <td><span id="sprytextfield7">
                                                    <label>
                                                        <input type="text" name="txtCPName" id="txtCPName" />
                                                    </label>
                                                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="style3">Address of Contact Person:</span></td>
                                            <td><span id="sprytextfield8"><span class="textfieldRequiredMsg">A value is required.</span></span><span id="sprytextarea1">
                                                    <label>
                                                        <textarea name="txtCPAdd" id="txtCPAdd" cols="35" rows="3"></textarea>
                                                    </label>
                                                    <span class="textareaRequiredMsg">A value is required.</span></span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="style3">City:</span></td>
                                            <td><label>
                                                    <select name="cmbCity" id="cmbCity">
                                                        <option>Ahmedabad</option>
                                                    </select>
                                                </label></td>
                                        </tr>
                                        <tr>
                                            <td><span class="style3">Mobile of Contact Person:</span></td>
                                            <td><span id="sprytextfield9">
                                                    <label>
                                                        <input type="text" name="txtCPMobile" id="txtCPMobile" />
                                                    </label>
                                                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="style3">Upload Image:</span></td>
                                            <td><label>
                                                    <input type="file" name="txtFile" id="txtFile" />
                                                </label></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td><label>
                                                    <input type="submit" name="button" id="button" value="Submit" />
                                                </label></td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                            <div class="TabbedPanelsContent">
                                <table width="100%" border="1" bordercolor="#E3B71A" >
                                    <tr>
                                        <th height="32" bgcolor="#E3B71A" class="style6"><div align="left" class="style9 style2 style4"><strong>Id</strong></div></th>
                                        <th bgcolor="#E3B71A" class="style6"><div align="left" class="style9 style2 style4"><strong>Name</strong></div></th>
                                        <th height="32" bgcolor="#E3B71A" class="style6"><div align="left" class="style9 style2 style4"><strong>Gender</strong></div></th>
                                        <th bgcolor="#E3B71A" class="style6"><div align="left" class="style9 style2 style4"><strong>Height</strong></div></th>
                                        <th height="32" bgcolor="#E3B71A" class="style6"><div align="left" class="style9 style2 style4"><strong>Weight</strong></div></th>
                                        <th bgcolor="#E3B71A" class="style6"><div align="left" class="style9 style2 style4"><strong>Contact Person</strong></div></th>
                                        <th bgcolor="#E3B71A" class="style6"><div align="left" class="style9 style2 style4"><strong>Address</strong></div></th>
                                        <th bgcolor="#E3B71A" class="style6"><div align="left" class="style9 style2 style4"><strong>City</strong></div></th>
                                        <th bgcolor="#E3B71A" class="style6"><div align="left" class="style9 style2 style4"><strong>Mobile</strong></div></th>
                                        <th bgcolor="#E3B71A" class="style6"><div align="left" class="style9 style2 style4"><strong>Photo</strong></div></th>
                                        <th bgcolor="#E3B71A" class="style6"><div align="left" class="style12 style2 style4">Delete</div></th>
                                    </tr>
<?php
// Establish Connection with Database
$con = mysqli_connect("localhost", "root");
// Select Database
mysqli_select_db($con,"cms");
// Specify the query to execute
$sql = "select * from missingperson_tbl where Station_Name='" . $_SESSION['Name'] . "'  ";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
while ($row = mysqli_fetch_array($result)) {
    $Id = $row['Person_Id'];
    $Name = $row['First_Name'] . " " . $row['Middle_Name'] . " " . $row['Last_Name'];
    $Gender = $row['Gender'];
    $Height = $row['Height'];
    $Weight = $row['Weight'];
    $Contact_Person = $row['Contact_Person'];
    $Contact_Address = $row['Contact_Address'];
    $Contact_City = $row['Contact_City'];
    $Contact_Mobile = $row['Contact_Mobile'];
    $Photo = $row['Photo'];
    ?>
                                        <tr>
                                            <td class="style6"><div align="left" class="style9 style5 style4 style3"><strong><?php echo $Id; ?></strong></div></td>
                                            <td class="style6"><div align="left" class="style9 style5 style4 style3"><strong><?php echo $Name; ?></strong></div></td>
                                            <td class="style6"><div align="left" class="style9 style5 style4 style3"><strong><?php echo $Gender; ?></strong></div></td>
                                            <td class="style6"><div align="left" class="style9 style5 style4 style3"><strong><?php echo $Height; ?></strong></div></td>
                                            <td class="style6"><div align="left" class="style9 style5 style4 style3"><strong><?php echo $Weight; ?></strong></div></td>
                                            <td class="style6"><div align="left" class="style9 style5 style4 style3"><strong><?php echo $Contact_Person; ?></strong></div></td>
                                            <td class="style6"><div align="left" class="style9 style5 style4 style3"><strong><?php echo $Contact_Address; ?></strong></div></td>
                                            <td class="style6"><div align="left" class="style9 style5 style4 style3"><strong><?php echo $Contact_City; ?></strong></div></td>
                                            <td class="style6"><div align="left" class="style9 style5 style4 style3"><strong><?php echo $Contact_Mobile; ?></strong></div></td>
                                            <td class="style6"><div align="left" class="style9 style5 style4 style3"><strong><img src="../Documents/<?php echo $Photo; ?>" height="100" width="100" /></strong></div></td>

                                            <td class="style6"><div align="left" class="style9 style5 style4"><strong><a href="DeleteMissing.php?MissingId=<?php echo $Id; ?>">Delete</a></strong></div></td>
                                        </tr>
    <?php
}
// Retrieve Number of records returned
$records = mysqli_num_rows($result);
?>
                                    <?php
// Close the connection
                                    mysqli_close($con);
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <div class="cleaner"></div>
                </div> <!-- end of section_w760 -->

            </div> <!-- end of templatemo_content -->
<?php
include "Footer.php";
?>

        </div> <!-- end of templatemo_wrapper -->
        <script type="text/javascript">
        <!--
            var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
            var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
            var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
            var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
            var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
            var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
            var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
            var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
            var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8");
            var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
            var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9");
        //-->
        </script>
    </body>
</html>