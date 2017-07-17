<!DOCTYPE html>
<html>
<head>
<!-- CSS FILES -->
<link rel="stylesheet" href="../css/main.css"/>

</head>


<body>
	<div class="myDiv" align="center">
		<h1>Examination App</h1>
			<form action="results.php" method="POST">
				<!-- Question 1 -->
				<h2>1. Who is the President of Nigeria</h2> 
				 <input type="radio" name="quest1" value="buhari">Mohamadu Buhari
				 <input type="radio" name="quest1" value="fela">Fela Anikulapo
				 <input type="radio" name="quest1" value="kante">Ngolo Kante <br>
				 <!-- Question 2 -->
				 <h2>2. What is the Square root of 25?</h2> 
				 <input type="radio" name="quest2" value="seven">7
				 <input type="radio" name="quest2" value="five">5
				 <input type="radio" name="quest2" value="ten">10 <br>
				 
				  <!-- Question 3 -->
				 <h2>3. The unit of lenght is ______</h2> 
				 <input type="radio" name="quest3" value="seconds">Seconds
				 <input type="radio" name="quest3" value="newton">Newton
				 <input type="radio" name="quest3" value="metres">Metres <br>
				 
				   <!-- Question 4 -->
				 <h2>4. CSS stands for:</h2> 
				 <input type="radio" name="quest4" value="wrong">Complete Colour Set
				 <input type="radio" name="quest4" value="css">Cascading Style Sheet
				 <input type="radio" name="quest4" value="wrongAgain">Metres <br>
				 
				 <!-- Question 5 -->
				 <h2>5. HTML stands for "Hypertext Markup Language"</h2> 
				 <input type="radio" name="quest5" value="true">True
				 <input type="radio" name="quest5" value="false">False <br>
				
				<br><button class="myButton">Submit Answer</button>
			</form>
	</div>
</body>

</html> 