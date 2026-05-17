<?php
include("../Controller/AddCandidateEcCNTRL.php");
?>

<!DOCTYPE html>
<html>
<body>
  
<?php
include("../Model/head.php");
?>
<br>

<form action="" method="post" enctype="multipart/form-data">  

<center>
  <h3>Add Candidate</h3>
  <br>

<table>
      First Name: <input type="text" name="fname">
      <br><br>
      Last Name: <input type="text" name="lname">
      <br><br>
      Userame: <input type="text" name="uname">
      <br><br>
      Password: <input type="password" name="pass">  
      <br><br>
      National ID No: <input type="text" name="nid">
      <br><br>
      Vison: <input type="text" name="vison"> 
      <br><br>
      Education: <input type="text" name="edu">
      <br><br>
      Experience: <input type="text" name="exp">  

<tr>
  <td>
    Choose Party  :
  </td>
  <tr>
  <td><input type="radio" Name="pp"> Southern Future Party </td>
  <td><input type="radio" Name="pp"> First Citizens Party </td>
  <td><input type="radio" Name="pp"> People's Industry Party </td>
  </tr>
  </td>

<tr>
  <td>
    Choose Symbol  :
  </td>
  <tr>
  <td><input type="radio" Name="cs"> Clock</td>
  <td><input type="radio" Name="cs"> Lotus</td>
  <td><input type="radio" Name="cs"> Axe</td>
  </tr>
  </td>
  </table>

  <br>


    <input type="submit" name="add" value="Add Candidates">


</center>
<br>
  <?php
include("../Model/foot.php");
 ?>

</body>
</html>

