<?php 
include"connection.php";

$q = "SELECT * FROM bairro WHERE uf='{$_GET['uf']}' ORDER BY id";
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
//http://localhost/json_cidades/neighborhood.php?uf=pb