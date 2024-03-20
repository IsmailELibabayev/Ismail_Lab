<!DOCTYPE html>
<html>
<body>

<?php

$name = "Lunatic";

$password = "13545";

$entered_uname = "Lunatic";

$entered_password = "71171";

$say = 1;

do {

	if ($say < 4) {
	
	if ($entered_uname == $name && $entered_password == $password) {
	
		echo "Sisteme daxil olundu";
	
		break;
		
} 
else {
		
	echo "$say";
		
	echo "Sifr? v?ya istifad?ci ad? s?hvdir!<br>";
	
		$say++;
	
	}
	} 
else {
		echo "Hesab bloklandi!";
	
	break;

	}
}

while ($say <= 4);
?>

</body>
</html>