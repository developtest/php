<?php
	include_once '../data/db.php';
	include_once '../class/person.php';

	$oPersona = new cPersona(); 

	$var	= $oPersona->getPerson();

	if (isset($var)) 
	{
		echo 'null';
	} 

	$varchiky = $oPersona->checkToken();

	var_dump($varchiky);

?>