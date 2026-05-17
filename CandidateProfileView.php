<!DOCTYPE html>
<html>
<body>

<?php
include("../Model/head.php");
?>

<br>
<center>
  <h3>Candidates</h3>
  <br>

<table>
  <tr>
    <th>Name</th>
    <th>Political Party</th>
    <th>Election Symbol</th>
  </tr>
  <tr>
    <td>Shnigdha Paul</td> 
    <td>Southern Future Party</td>
    <td>Clock</td> <td> <a href="CandidateRemovedEcView.php"> <li> Remove Candidate</li> </a> </td>  <td> <a href="UpdateCandidateEcView.php"> <li> Update Candidate </li> </a> </td>
  </tr>
  <tr>
    <td>Rayhan Mahmudul</td>
    <td>First Citizens Party</td>
    <td>Lotus</td> <td> <a href="CandidateRemovedEcView.php"> <li> Remove Candidate</li> </a> </td> <td> <a href="UpdateCandidateEcView.php"> <li> Update Candidate </li> </a> </td>
  </tr>
  <tr>
    <td>Asif Siddiki</td>
    <td>People's Industry Party</td>
    <td>Axe</td> <td> <a href="CandidateRemovedEcView.php"> <li> Remove Candidate</li> </a> </td> <td> <a href="UpdateCandidateEcView.php"> <li> Update Candidate </li> </a> </td>
  </tr>
</table>
<br>

<tr>
  <td>
  <a href="AddCandidateEcView.php"><li> Add Candidate </li> </a>
  </td>
</tr>

</center>
<br>
  <?php
include("../Model/foot.php");
 ?>

</body>
</html>