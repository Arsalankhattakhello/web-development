<?php
$a = array();
$a[0] = 46;
$a[1] = 56;
$a[2] = 66;
$a[3] = 76;
$a[4] = 36;
$a[5] = 96;
$a[6] = 116;


$length = count($a);
for($i = 0; $i < $length; $i++){
	if ($a[$i]<=100 && $a[$i] >= 80) {
		echo $a[$i] . "Makes grade of A <br />";
	}
	else if ($a[$i] < 80 && $a[$i] >=70 ){
		echo $a[$i] . "Makes grade of B<br />";
	}
	else if($a[$i] < 70 && $a[$i] >= 60){
		echo $a[$i] . "Makes grade of C<br />";
	}
	else if ($a[$i] < 60 && $a[$i] >= 50){
		echo $a[$i] . "Makes grade of D<br />";
	}
	else if($a[$i] > 100 || $a[$i] < 0){
		echo $a[$i] . "Makes Marks incorrect <br />";
	}
	else{
		echo $a[$i] .  " Makes grade Fail";
	}

}
echo "<br /><br />";


# for each loop....

$b = array (54,45,75,97,59,67);
foreach($b as $marks)
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

echo "<br />";

function arsalan()		# through Function...
{

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

}
arsalan();


echo "<br />";

# while loop...
function khan() {


	$i = 0;
	while ($i <= 10) {
		echo "while" . $i . "<br />";
		$i++;
	}


}
khan();

echo "<br />";

# Associative array...

$associative = array ("car1" => "Nisaan", "car2" => "Toyota", "car3" => "honda");

echo $associative["car1"] . "<br />";
echo $associative["car2"] . "<br />";
echo $associative["car3"] . "<br />";
echo "<br />";
/*
function alam()
{
	$b = array (54,45,75,97,59,67);
foreach($b as $marks)
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
alam();


function khann($location = Null)
{
	if ($location != Null) {
		# code...
	header("Location: " . $location);
	exit;
}
}
khann("http://localhost/developing/cv.html");
*/

#associative array through while loop...

	$a3 = array(
	array("Company" => "Dell: ", "Model" => "Core i4 ", "Price" => "50000"),

	array("Company" => "Sony: ", "Model" => "Core i3 ", "Price" => "55000"),

	array("Company" => "HP: ", "Model" => "Core i3 ", "Price" => "52000"),

	array("Company" => "MAC: ", "Model" => "Core i4 ", "Price" => "65000")
	);

	$i=0;

	$length = count($a3);

	while($i < $length) {

	if ($a3[$i]["Company"] == "HP: " || $a3[$i]["Price"] == "55000" || $a3[$i]["Model"] == "Core i4 ") {

			

		echo $a3[$i]["Company"] . "model " . $a3[$i]["Model"] . "and price is " . $a3[$i]["Price"] . "<br />";
	}


	$i++;

	}


echo "<br />";


echo "<br />";


function  factorial($fact){
	$var = $fact;
	while ( $var > 1) {
		# code...
		$fact = $fact * ($var - 1);
		$var = $var - 1; 
	}
	return $fact;
}

echo factorial(3);









