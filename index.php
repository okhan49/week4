<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);

echo "<br>";
echo "<br>";

//2.
$date=str_replace("-","/",$date);
echo "The value of \$date: ".$date."<br>";

//3.
if(strcmp($date, $tar)>0){
	echo 'the future'."<br>";
} elseif(strcmp($date, $tar)<0){
	echo 'the past'."<br>";
} else {
	echo 'Opps'."<br>";
}

//4.
echo strpos($date, '/')."<br>";


//5.
echo str_word_count($date)."<br>";

//6.
echo strlen($date)."<br>";


//7.
echo ord($date)."<br>";

//8.
echo substr($date,-2)."<br>";

//9.
$arr=explode('/',$date);
foreach ($arr as $value	) {
	echo $value.' ';
}


//10.


	echo '<br>Is it a leap year?<br>';
foreach ($year as $value){
	switch (false){
		case ($value%400==0):
				echo $value.' is  a leap year<br>';
				echo $value.' is  a leap year<br>';
				break;
		case ($value%100==0):
				echo $value.' is NOT a leap year<br>';
				break;
		case ($value%4==0):
				echo $value.' is  a leap year<br>';
				break;
		default:
				echo $value.' is NOT a leap year<br>';
	}
}

?>