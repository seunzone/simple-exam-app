<?php
 // CREATE TABLE questions(
// 	id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
//     questions text NOT NULL,
//     exam_type varchar(300) NOT  NULL,
//     option_a text NOT NULL,
//     option_b text NOT NULL,
//     option_c text NOT NULL,
//     answer text NOT NULL
//     );


if(empty($_POST['q_type']) || 
	empty($_POST['q1']) || 
	empty($_POST['q1a']) || 
	empty($_POST['q1b']) || 
	empty($_POST['q1c']) ||
	empty($_POST['q1answer'])||
	empty($_POST['q2']) || 
	empty($_POST['q2a']) || 
	empty($_POST['q2b']) || 
	empty($_POST['q2c']) ||
	empty($_POST['q2answer'])||
	empty($_POST['q3']) || 
	empty($_POST['q3a']) || 
	empty($_POST['q3b']) || 
	empty($_POST['q3c']) ||
	empty($_POST['q3answer'])||
	empty($_POST['q4']) || 
	empty($_POST['q4a']) || 
	empty($_POST['q4b']) || 
	empty($_POST['q4c']) ||
	empty($_POST['q4answer'])||
	empty($_POST['q5']) || 
	empty($_POST['q5a']) || 
	empty($_POST['q5b']) || 
	empty($_POST['q5c']) ||
	empty($_POST['q5answer'])
	)
{
	die ("<a href='/movement/simple-exam-app/views/set_exam.php'>Please complete all the form fields </a>");
}


// question one
$q_type= $_POST['q_type'];
$q1 = $_POST['q1'];
$q1a = $_POST['q1a'];
$q1b = $_POST['q1b'];
$q1c = $_POST['q1c'];
$q1answer = $_POST['q1answer'];
// question two
$q2 = $_POST['q2'];
$q2a = $_POST['q2a'];
$q2b = $_POST['q2b'];
$q2c = $_POST['q2c'];
$q2answer = $_POST['q2answer'];
// question three
$q3 = $_POST['q3'];
$q3a = $_POST['q3a'];
$q3b = $_POST['q3b'];
$q3c = $_POST['q3c'];
$q3answer = $_POST['q3answer'];
// question four
$q4 = $_POST['q4'];
$q4a = $_POST['q4a'];
$q4b = $_POST['q4b'];
$q4c = $_POST['q4c'];
$q4answer = $_POST['q4answer'];
// question five
$q5 = $_POST['q5'];
$q5a = $_POST['q5a'];
$q5b = $_POST['q5b'];
$q5c = $_POST['q5c'];
$q5answer = $_POST['q5answer'];



$sql = "INSERT INTO  questions (exam_type, questions, option_a, option_b,  option_c, answer) 
		VALUES  ('$q_type', '$q1', '$q1a', '$q1b', '$q1c', '$q1answer' ),
				 ('$q_type', '$q2', '$q2a', '$q2b', '$q2c', '$q2answer' ),
				('$q_type', '$q3', '$q3a', '$q3b', '$q3c', '$q3answer' ),
				('$q_type', '$q4', '$q4a', '$q4b', '$q4c', '$q4answer' ),
				('$q_type', '$q5', '$q5a', '$q5b', '$q5c', '$q5answer' );
		INSERT INTO exam_type (exam_type)
		VALUES 	('$q_type')";

require "connect.php";

 if($results= mysqli_multi_query($con, $sql))
 {
 	
 	echo "saved successfully";

 }

 else{
 	die("something is really wrong");
 }

	
?>


