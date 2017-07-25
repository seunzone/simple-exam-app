<?php 

	function questions($type){
		$sql= "SELECT * FROM questions WHERE exam_type = '{$type}'";
		Echo "<h3>Chemistry 101</h3>";
		require"connect.php";
		$number= 0;
		$results = mysqli_query($con, $sql);
		 while ($row=mysqli_fetch_assoc($results)){
		 	echo "<br>";
		 	echo "<br>" ;
		 	echo ++$number. ". " . $row['questions'];
		 	echo "<input type='hidden' name='q_type' value='{$row['exam_type']}''>";
		 	echo "<br> A <input type='radio' value='{$row['option_a']}' name='{$number}'> {$row['option_a']} <br>";
		 	echo "<br> B<input type='radio' value='{$row['option_b']}' name={$number}> {$row['option_b']} <br>";
		 	echo "<br> C<input type='radio' value='{$row['option_c']}' name={$number}> {$row['option_c']}<br>";
		 	echo "<br> Answer. ". $row['answer'];
		 }
	}
	function select_questions(){
		$sql= "SELECT * FROM exam_type";
		echo $sql;
		require"connect.php";
		$results = mysqli_query($con, $sql);
		while ($row=mysqli_fetch_assoc($results)) {
			echo "<option value='{$row['exam_type']}'>" . $row['exam_type'] . "</option>" ."<br>";
		}
		
	}

?>