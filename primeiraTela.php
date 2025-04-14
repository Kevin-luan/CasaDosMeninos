<?php




  

include_once("config.php");

$sql = "SELECT * FROM endereco ORDER BY id  DESC";
$result = $conexao->query($sql);
print_r($result);




?>