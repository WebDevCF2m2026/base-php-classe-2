<?php
$fruits = ["pomme", "poire", "banane", "fraise", "cerise"];
//echo $fruits[0];
$langages = ["un"=>"PHP", "deux"=>"MySQL", "trois"=>"JavaScript"];
foreach($langages as $key => $value){
	echo "$key)$value".PHP_EOL;
	echo '$key)$value'.PHP_EOL;
}
$json = json_encode($langages);

var_dump($langages,$json);
echo count($langages);

$mot = "Bonjour";
echo $mot[3];