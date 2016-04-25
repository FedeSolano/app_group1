<li><a href="?real=1&idfiltre=A">A</a></li>
<li><a href="?real=1&idfiltre=B">B</a></li>
<li><a href="?real=1&idfiltre=C">C</a></li>
<li><a href="?real=1&idfiltre=D">D</a></li>
<?php
$condition = "";
if(isset($_GET['idfiltre']) && ctype_alpha($_GET['idfiltre']){
	$filtre = $_GET['idfiltre'];
}

if(isset($filtre)){
	$condition = "WHERE nom LIKE '$filtre%'"
}

$sql = "$condition";
?>