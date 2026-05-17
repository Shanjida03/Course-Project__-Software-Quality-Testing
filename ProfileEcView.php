<?php
include("../Controller/ProfileEcCNTRL.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>eBallot</title>
</head>
<center>


<?php
include('../Model/head.php');
 ?>
 
<body>
  
    
<form action="" method="post" enctype="multipart/form-data">


      <h3>Update Profile</h3>
      <br><br>
      <table>
        <tr>
        <td>Please choose a file : <input type="file" id = "myfile"></td>
        </tr>
        <tr>
        <td>Current Password: <input type="text" name="pass"></td>
        </tr>
        <tr>
        <td>New Password: <input type="text" name="npass"></td>
        </tr>
        <tr> 
        <td>Confirm Password: <input type="text" name="cpass"></td>
        <tr>
      </table>  
<input type="submit" name="submit" value="Save">
<br><br>
</form>
</center>

<br><br>
<?php
    include('../Model/foot.php');
     ?>
</body>
</html>