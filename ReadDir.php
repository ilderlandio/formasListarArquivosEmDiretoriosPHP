<?php
$path = "cadastros";

$files = dir($path);

echo "Forma 01 <br> <hr>"; 

while($f = $files->read()){
	if(!is_dir($f)){  // retira os pontinhos  '.' e '..'
	   echo $f."<br>";
	}
}
echo "<hr>";
echo "Forma 02 <br>"; 

$vetor = scandir($path); 
$remove = array('.','..');

var_dump($vetor);

$fils = array_diff($vetor,$remove); 

for($i=2; $i <= count($fils); $i++) { 
	echo $fils[$i]."<br>"; 
}

echo "<hr>";
echo "Forma 03 <br>"; 

$fil = scandir($path); 

$remove = array('.','..');

$size = count($fil); 

for ($i=0; $i < $size; $i++) { 
	if(!in_array($fil[$i],$remove)){
		echo $fil[$i]."<br>";
	}
}

echo "<hr>";
echo "Forma 04 <br>"; 

$file = scandir($path); 

$remove = array('.','..');

var_dump($file); 

foreach($file as $arquivo) {
	if(!in_array($arquivo,$remove)){
		echo $arquivo."<br>";
	}
}
