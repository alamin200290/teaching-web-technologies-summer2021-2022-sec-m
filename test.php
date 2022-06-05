<?php 

	$name = "alamin";
	$cgpa = 4.00;
	$id = 1;
	$status = true;

	//echo $name;
	//print($name);

	//$student = array(1, 'alamin', 'alamin@aiub.edu');
	$student = [1, 'alamin', 'alamin@aiub.edu'];
	
	$students = [
					[1, 'alamin', 'alamin@aiub.edu'],
					[2, 'xyz', 'xyz@aiub.edu'],
					[3, 'abc', 'abc@aiub.edu']
				];

	$students = [ 
					's1'=>['id'=>1, 'name'=>'alamin', 'email'=>'alamin@aiub.edu'], 
					's2'=>['id'=>2, 'name'=>'xyz', 'email'=>'xyz@aiub.edu'] 
				];

	//echo $students['s3']['email'];

	//echo $student[0];
	//$student[1];

	//$student = ['id'=>1, 'name'=>'alamin', 'email'=>'alamin@aiub.edu'];
	//echo $student['name'];

/*	for ($i=0; $i <10 ; $i++) { 
		echo "alamin\r\n";
	}*/

	foreach ($students as $s) {
		echo "<h1>".$s['email']."-".$s['name']."</h1><br>";
	}

/*	function sum($a, $b){
		return $a+$b;
	}

	echo sum(5,6);*/

/*	if(){

	}else{
		
	}*/
?>





