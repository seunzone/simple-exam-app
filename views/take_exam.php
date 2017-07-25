<!DOCTYPE html>
<html>
<head>
<!-- CSS FILES -->
<link rel="stylesheet" href="../css/main.css"/>

</head>


<body>
	<div class="myDiv" align="center">
		<form action="results.php" method="POST">
			<?php 
			
				require"../logics/functions.php";
				questions($_POST['q_type']);
			?><br><br>
		<input type="submit" class="myButton" name="submit">
	</div>
</body>

</html> 