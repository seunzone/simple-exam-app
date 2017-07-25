<!DOCTYPE html>
<html>
<head>
<!-- CSS FILES -->
<link rel="stylesheet" href="../css/main.css"/>

</head>


<body>
	<div class="myDiv" align="center">
		<h1>Examination App</h1>
			<form action="../logics/store_exam.php" method="POST">
				<div class="questions">
				<label>Question Type:</label>
				<input type="text" name="q_type"><br>
				</div>

				<div class="questions">
				<label>Q 1:</label>
				<input type="text" name="q1"><br>
				</div>

					<label>option A:</label>
					<input type="text" name="q1a"><br>
					<label>option B:</label>
					<input type="text" name="q1b"><br>
					<label>option C:</label>
					<input type="text" name="q1c"><br>
					<label>answer:</label>
					<input type="text" name="q1answer"><br>
				<div class="questions">
					<label>Q 2:</label>
					<input type="text" name="q2"><br>
				</div>
					<label>option A:</label>
					<input type="text" name="q2a"><br>
					<label>option B:</label>
					<input type="text" name="q2b"><br>
					<label>option C:</label>
					<input type="text" name="q2c"><br>
					<label>answer:</label>
					<input type="text" name="q2answer"><br>
				<div class="questions">
				<label>Q 3:</label>
				<input type="text" name="q3"><br>
				</div>
					<label>option A:</label>
					<input type="text" name="q3a"><br>
					<label>option B:</label>
					<input type="text" name="q3b"><br>
					<label>option C:</label>
					<input type="text" name="q3c"><br>
					<label>answer:</label>
					<input type="text" name="q3answer"><br>
				<div class="questions">
				<label>Q 4:</label>
				<input type="text" name="q4"><br>
				</div>
					<label>option A:</label>
					<input type="text" name="q4a"><br>
					<label>option B:</label>
					<input type="text" name="q4b"><br>
					<label>option C:</label>
					<input type="text" name="q4c"><br>
					<label>answer:</label>
					<input type="text" name="q4answer"><br>
				<div class="questions">
				<label>Q 5:</label>
				<input type="text" name="q5"><br>
				</div>
					<label>option A:</label>
					<input type="text" name="q5a"><br>
					<label>option B:</label>
					<input type="text" name="q5b"><br>
					<label>option C:</label>
					<input type="text" name="q5c"><br>
					<label>answer:</label>
					<input type="text" name="q5answer"><br>
				<br><button class="myButton">Submit Answer</button>
			</form>
	</div>
</body>

</html> 