<!DOCTYPE html>
<html>
<head>
	
	<title>Dashboard (Admin)</title>
</head>
<body>
	<?php

include("../Model/head.php");
?>
<br>
        <form action="" method="post" enctype="multipart/form-data">
		<center>
			<table>
				<tr>
					<td><h1>Admin Dashboard</h1></td>
				</tr>
                <tr>
					<td><h3><li><a href="ProfileAdminView.php">Profile</li></a></h3></td>
				</tr>
				<tr>
					<td><h3><li><a href="VoterAdminView.php">Voter</li></a></h3></td>
				</tr>
				<tr>
					<td><h3><li><a href="EcAdminView.php">Election Comission (EC)</li></a></h3></td>
				</tr>
				<tr>
					<td><h3><li><a href="VotingTimeView.php">Voting Time</a></li></h3></td>
				</tr>
				<tr>
					<td><h3><li><a href="ResultAdminView.php">Publish Result</a></li></h3></td>
				</tr>
			</table>
		</center>
		<br>
			<?php
include("../Model/foot.php");
 ?>

</body>
</html>