<?php
//While Loop
$i = 11;
while($i <=10){
	echo "While " . $i . "<br />\n";
	$i++;
}

//Do While Loop
$j = 11;
do{
	echo "Do While " . $j . "<br />\n";
	$j++;
}while ($j <= 10);

//For Loop
for ($k=0; $k <= 10; $k++) { 
 	# code...
 	echo "For++ " . $k . "<br />\n";
 } 


for ($k=0; $k <= 10; ++$k) { 
 	# code...
 	echo "++For " . $k . "<br />\n";
 } 

$a1 = array(45, 94, 81, 41, 82);

$length = count($a1);        //For counting the length of array

for($i=0; $i<$length; $i++){
	
	if($a1[$i] <= 100 && $a1[$i] >= 80){
		
		echo $a1[$i] . " makes grade of A <br />"; 
	
	} else if ($a1[$i] < 80 && $a1[$i] >= 70){
		
		echo $a1[$i] . " makes grade of B <br />"; 
	
	} else if ($a1[$i] < 70 && $a1[$i] >= 60){
		
		echo $a1[$i] . " makes grade of C <br />"; 
	
	} else if ($a1[$i] < 60 && $a1[$i] >= 50){
		
		echo $a1[$i] . " makes grade of D <br />"; 
	
	} else if ($a1[$i] > 100 || $a1[$i] < 0){
		
		echo "Marks not correct <br />"; 
	
	} else {
		
		echo $a1[$i] . " makes grade of F <br />"; 
	
	}

}


//For Each Loop

$a1 = array(45, 94, 81, 41, 82);

foreach ($a1 as $marks) {
	# code...
	if($marks <= 100 && $marks >= 80){
		
		echo $marks . " makes grade of A <br />"; 
	
	} else if ($marks < 80 && $marks >= 70){
		
		echo $marks . " makes grade of B <br />"; 
	
	} else if ($marks < 70 && $marks >= 60){
		
		echo $marks . " makes grade of C <br />"; 
	
	} else if ($marks < 60 && $marks >= 50){
		
		echo $marks . " makes grade of D <br />"; 
	
	} else if ($marks > 100 || $marks < 0){
		
		echo "Marks not correct <br />"; 
	
	} else {
		
		echo $marks . " makes grade of F <br />"; 
	
	}
}

echo "<br />";



function calculate_grade($grade_array = array()) {
	foreach ($grades_array as $grade) {
		# code...
		switch ($grade){

		}
	}
}

$grade_array = array('A' , 'B' , 'C' , 'D' , 'E');

calculate_grade($grade_array);


#scope two local and globle 
#local is defined inside the function and globle is outside the function.

#function declaration and function calling....?????

function div($a = Null , $b = Null){
	return $a / $b;

}

$div = div(12 , 2);

var_dump($div);








