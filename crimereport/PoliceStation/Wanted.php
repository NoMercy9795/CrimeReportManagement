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
        <link href="../SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            <!--
            .style3 {color: #000000}
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
                    <h2>Manage Most Wanted</h2>
                    <div id="TabbedPanels1" class="TabbedPanels">
                        <ul class="TabbedPanelsTabGroup">
                            <li class="TabbedPanelsTab style1 style2" tabindex="0">Enter Most Wanted Person</li>
                            <li class="TabbedPanelsTab style2 style1" tabindex="0">Display Most Wanted Persons</li>
                        </ul>
                        <div class="TabbedPanelsContentGroup">
                            <div class="TabbedPanelsContent">
                                <form action="InsertWanted.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                                    <table width="100%" height="290" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td><span class="style3">Name of Most Wanted:</span></td>
                                            <td><span id="sprytextfield1">
                                                    <label>
                                                        <input type="text" name="txtName" id="txtName" />
                                                    </label>
                                                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="style3">Location of Most Wanted:</span></td>
                                            <td><span id="sprytextfield2">
                                                    <label>
                                                        <input type="text" name="txtLocation" id="txtLocation" />
                                                    </label>
                                                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="style3">Crime Done By Most Wanted:</span></td>
                                            <td><span id="sprytextarea1">
                                                    <label>
                                                        <textarea name="txtCrime" id="txtCrime" cols="35" rows="3"></textarea>
                                                    </label>
                                                    <span class="textareaRequiredMsg">A value is required.</span></span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="style3">Description of Most Wanted:</span></td>
                                            <td><span id="sprytextarea2">
                                                    <label>
                                                        <textarea name="txtDesc" id="txtDesc" cols="35" rows="3"></textarea>
                                                    </label>
                                                    <span class="textareaRequiredMsg">A value is required.</span></span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="style3">Upload Photo:</span></td>
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
                                        <th bgcolor="#E3B71A" class="style6"><div align="left" class="style9 style2 style4"><strong>Wanted Name</strong></div></th>
                                        <th height="32" bgcolor="#E3B71A" class="style6"><div align="left" class="style9 style2 style4"><strong>Location</strong></div></th>
                                        <th bgcolor="#E3B71A" class="style6"><div align="left" class="style9 style2 style4"><strong>Crime</strong></div></th>
                                        <th height="32" bgcolor="#E3B71A" class="style6"><div align="left" class="style9 style2 style4"><strong>Description</strong></div></th>
                                        <th bgcolor="#E3B71A" class="style6"><div align="left" class="style9 style2 style4"><strong>Photo</strong></div></th>
                                        <th bgcolor="#E3B71A" class="style6"><div align="left" class="style12 style2 style4">Delete</div></th>
                                    </tr>
<?php
// Establish Connection with Database
$con = mysqli_connect("localhost", "root");
// Select Database
mysqli_select_db($con,"cms");
// Specify the query to execute
$sql = "select * from mostwanted_tbl where Station_Name='" . $_SESSION['Name'] . "'";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
while ($row = mysqli_fetch_array($result)) {
    $Id = $row['Wanted_Id'];
    $Name = $row['Wanted_Name'];
    $Loc = $row['Wanted_Location'];
    $Crime = $row['Wanted_Crime'];
    $Desc = $row['Wanted_Desc'];
    $Photo = $row['Wanted_Image'];
    ?>
                                        <tr>
                                            <td class="style6"><div align="left" class="style9 style5 style4 style3"><strong><?php echo $Id; ?></strong></div></td>
                                            <td class="style6"><div align="left" class="style9 style5 style4 style3"><strong><?php echo $Name; ?></strong></div></td>
                                            <td class="style6"><div align="left" class="style9 style5 style4 style3"><strong><?php echo $Loc; ?></strong></div></td>
                                            <td class="style6"><div align="left" class="style9 style5 style4 style3"><strong><?php echo $Crime; ?></strong></div></td>
                                            <td class="style6"><div align="left" class="style9 style5 style4 style3"><strong><?php echo $Desc; ?></strong></div></td>
                                            <td class="style6"><div align="left" class="style9 style5 style4 style3"><strong><img src="../Documents/<?php echo $Photo; ?>" width="125" height="125" /></strong></div></td>
                                            <td class="style6"><div align="left" class="style9 style5 style4"><strong><a href="DeleteWanted.php?WantedId=<?php echo $Id; ?>">Delete</a></strong></div></td>
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
            var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
            var sprytextarea2 = new Spry.Widget.ValidationTextarea("sprytextarea2");
        //-->
        </script>
    </body>
</html>