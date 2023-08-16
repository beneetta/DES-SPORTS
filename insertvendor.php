<?php

include 'config.php';


$email = $_POST["username"];
$pwd = $_POST["pwd"];

if($mysqli->query("INSERT INTO vendor ( email, password) VALUES('$email', '$pwd')")){
	echo 'Data inserted';
	echo '<br/>';
}

header ("location:loginV.php");

?>

<?php

