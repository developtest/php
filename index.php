<?php
	include_once '../data/db.php';
	include_once '../class/person.php';

	$oPersona = new cPersona();

	$varchiky = $oPersona->checkToken();

	var_dump($varchiky);

?>