<?php
include("../Controller/CandidateDetailsVoterCNTRL.php");
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
  <h3>Candidate Details</h3>
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
    <td>Clock</td> <td><a href="Candidate1VoterView.php"><li> See Profile</li></a></td> 
  </tr>
  
  <tr>
    <td>Rayhan Mahmudul</td>
    <td>First Citizens Party</td>
    <td>Lotus</td> <td><a href="Candidate2VoterView.php"><li>See Profile</li></a></td> 
  </tr>
  <tr>
    <td>Asif Siddiqi</td>
    <td>People's Industry Party</td>
    <td>Axe</td> <td><a href="Candidate3VoterView.php"><li>See Profile</li></a></td> 
  </tr>
</table>
<br>
<tr>
  <td>
    Choose Your Symbol  :
  </td>
  <tr>
  <td><input type="radio" Name="cv"> Clock</td>
  <td><input type="radio" Name="cv"> Lotus</td>
  <td><input type="radio" Name="cv"> Axe</td>
</tr>


</tr>
<tr>
  <td>
    <input type="submit" name="vote" value="Vote">
  </td>
</tr>
</center>
<br>
  <?php
include("../Model/foot.php");
 ?>

</body>
</html>

