<?php 

$arrayName1 = array(
	array(
		'abc',
		'lmno',
		     20,
	),
	array(
		'defg',
		'pqrst',
		     80,
	),
	array(
		'hijk',
		'uvw',
		   0.70,
	),

 );

$numCount = 0;
$numSum = 0;

$charCount = 0;
$charSum = 0;

foreach ($arrayName1 as $test1){
	$numCount++;
	$numSum += $test1[2];	

	$charCount++;
	$charSum += strlen($test1[0]);
};
$numTotal = $numSum / $numCount;
$charTotal = $charSum / $charCount;
echo var_dump($arrayName1);
echo  "_________________________________________" . PHP_EOL;

echo "de gemmiddelde prijs = " . round($numTotal, 2) . PHP_EOL;
echo "de gemmiddelde letters = " . round($charTotal, 2);
 ?>