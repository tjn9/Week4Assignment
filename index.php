<?php
	$date =  date('Y-m-d', time());
	echo "The value of \$date: ".$date."<br>";
	$tar = "2017/05/24";
	echo "The value of \$tar: ".$tar."<br>";
	
	$year = array("2012", "396", "300","2000", "1100", "1089");
	echo "The value of \$year:";
	print_r($year); 

	echo "<br><br>";

	$date = str_replace("-", "/", $date);
	echo "2) ".$date."<br>";

	echo "<br>";
	if ($date > $tar)
		echo "3) date compared to tar: The future"."<br>";
	else if ($date < $tar)
		echo "3) date compared to tar: The past"."<br>";
	else
		echo "3) date compared to tar: Oops"."<br>";

	echo "<br>";

	echo "4) ";

	$i = strpos($date, "/") . ", ". strpos($date, "/", 5);
	echo "Positions at: ".$i;

	echo "<br><br>";

	$date = str_replace("/", " ", $date);
	echo $date."<br>";

	echo "<br>";

	echo "5) ";

	$date = explode(" ", $date);

	echo "Number of 'words': ".sizeof($date);

	echo "<br><br>";
	
	echo "6) ";

	$randomString = "Can you read this?";
	echo "Random String: ".$randomString;
	echo "<br>";
	print("Length of string: ".strlen($randomString)); 

	echo "<br><br>";

	echo "7) ";
	$testChar = substr($randomString, 0, 1);
	$val = ord($testChar);
	echo "Value of C: ".$val;

	echo "<br><br>";

	echo "8) ";
	$date = implode("/", $date);
	$partDate = substr($date, -2);
	echo "Last two characters of date: ".$partDate;

	echo "<br><br>";

	echo "9) ";
	$date = explode("/", $date);
	print_r($date);

	echo "<br><br>";

	echo "10) ";

	foreach ($year as $value) 
	{
		if ((((int)$year % 4) == 0) && ((((int)$year % 100) != 0) || (((int)$year % 400) == 0)))
			echo "True <br>";
		else
			echo "False <br>";
	}

?>