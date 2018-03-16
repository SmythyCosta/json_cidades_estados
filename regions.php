<?php 
include"connection.php";
$q = 'SELECT * FROM regiao ORDER BY id';
$r = mysqli_query($dbc, $q);
$regions = array();

while ( $obj = mysqli_fetch_array($r, MYSQLI_ASSOC) ) {
    
    $regions[] = array(
			'codigo'	    => $obj['id'],
			'nome'			=> $obj['nome'],
		);
}

echo( json_encode( $regions ) ); 

//example access
//http://localhost/json_cidades/regions.php
