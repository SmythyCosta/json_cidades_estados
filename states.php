<?php 
include"connection.php";

$q = "SELECT * FROM estado WHERE regiao={$_GET['regiao']} ORDER BY id";
$r = mysqli_query($dbc, $q);
$states = array();

while ( $obj = mysqli_fetch_array($r, MYSQLI_ASSOC) ) {
    
    $states[] = array(
		'codigo'	    => $obj['id'],
		'nome'			=> $obj['nome'],
	);
}

echo( json_encode( $states ) ); 

//example access
//http://localhost/json_cidades/states.php?regiao=4
