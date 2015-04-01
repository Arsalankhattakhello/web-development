<?php
//while loop
$i = 0;

while ($i <=10) {
	echo "while" . $i . "<br /> \n" ;
	$i++;
}

//Do while loop
$j = 0;

do{
	echo "DoWhile" . $j . "<br /> \n";
	$j++;
}	while ( $j<= 10) ;


//For loop

for ($k=0; $k < 10; $k++){
	echo "For: " . $k . "<br /> \n";
}


/*
	* 1.create an array of marks

	*/

/*	$a1 = array();
	$a1[0] = 45;
	$a1[1] = 94;
	$a1[2] = 81;
	$a1[3] = 41;
	$a1[4] = 82;

	
	$length = count($a1);           //For counting the length of array
	for($i=0; $i<$length; $i++){   // Here If $i is less then from length so Check out the Statments until its true.
		if ($a[$i]<=100 && $a[$i] >= 80){

			echo $a1[$i] . "makes grade of A <br />"; 

		} else if ($a1[$i] > 70){

			echo $a1[$i] . "makes grade of B <br />"; 

		} else if ($a1[$i] > 60){

			echo $a1[$i] . "makes grade of C <br />"; 

		} else if ($a1[$i] > 50){

			echo $a1[$i] . "makes grade of D <br />"; 

		} else {

			echo $a1[$i] . "makes grade of F <br />"; 

		}
	}


*/
	function calculate_grade($marks_array = array()){
		foreach($marks_array as $marks)
		{
			if ($marks <=100 && $marks >= 80) {
				echo $marks . "  Makes grade of A<br />";
			}
			else if ($marks < 80 && $marks >= 70){
				echo $marks . "  Makes grade of B<br />";
			}
			else if ($marks < 70 && $marks >= 60){
				echo $marks . "  Makes grade of C <br />";
			}
			else if ($marks < 60 && $marks >= 50)
				echo $marks . "Makes grade of D<br />";
			else{
				echo $marks . "FAil<br/ >";
			}
		}

	}
	$marks_array = array (54,45,75,97,59,67);

	calculate_grade($marks_array);

	echo "<br />";

	$marks_array = array (50,42,95,37,43,61);

	calculate_grade($marks_array);

	echo "<br />";

#associative array through whileloop...
	$a3 = array(
		array("Company" => "Honda", "Car" => "city", "Engine" => "VVTi" ),
		array("Company" => "Toyota", "Car" => "corolla", "Engine" => "SSg")
		);
	$length = count($a3);

	$i=0;

	while ($i < $length){
		if ( $a3[$i]["Company"] == "Honda" ) {
			# code...
		echo $a3[$i]["Company"] . " has " . $a3[$i]["Car"] . " car which have " . $a3[$i]["Engine"] . " <br />";
	}
		$i++;
	}


function div($a = Null , $b = Null){
	return $a / $b;

}

$div = div(12 , 2);

var_dump($div);



function remider($a = Null , $b = Null){
	return $a % $b;

}

$remider = remider(13 , 2);

var_dump($remider);

function mul($a = Null , $b = Null){
	return $a * $b;

}

$mul = mul(12 , 2);

var_dump($mul);

function sub($a = Null , $b = Null){
	return $a - $b;

}

$sub = sub(12 , 2);

var_dump($sub);