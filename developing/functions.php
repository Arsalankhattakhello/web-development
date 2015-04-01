<?php
function redirect_to($location = Null)
{
	# code...
if ($location != Null){
	header("Location: . $location"); // pre define function HEADER

	exit;
}
}


redirect_to("http://www.google.com.pk");



function calculate_grade($marks = array()){
foreach($marksarray as $marks)
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
$a = array (54,45,75,97,59,67);
calculate_grade($a);