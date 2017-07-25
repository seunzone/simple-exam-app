<!DOCTYPE html>
<html>
<head>
<!-- CSS FILES -->
<link rel="stylesheet" href="css/main.css"/>

</head>


<body>
	<div class="myDiv" align="center">
					
		<a href="http://localhost/movement/simple-exam-app/views/set_exam.php">
			<button class="myButton">Set questions</button>
		</a><br><br><br>
					
		<form action="views/take_exam.php" method="POST">
			<select name="q_type">
				<?php 
                  require "logics/functions.php";
                  select_questions();
                ?>
			</select><br>
			<input type="submit" name="submit" value="Answer questions" class="myButton">
		</form>
	</div>
</body>

</html> 

