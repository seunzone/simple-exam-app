<?php
	$score=0;
	$x=1;
	$sql="SELECT answer FROM questions WHERE exam_type = '{$_POST['q_type']}'";	
	require"connect.php";
	$results=mysqli_query($con, $sql);
	while($row=mysqli_fetch_assoc($results)){
			if($row['answer']==$_POST[$x]){
				 ++$score;
				}
			++$x;
	}
	$score = 20 * $score;
	echo "You scored:<br> {$score} /100";
?>