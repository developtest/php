<?php
	include_once '../data/db.php';
	include_once '../class/person.php';
	include_once '../class/person.php';
	include_once '../class/person.php';
	
	$oPersona = new cPersona(); 
	$oPersona = new cPersona(); 
	$oPersona = new cPersona(); 
	$oPersona = new cPersona(); 

	$var	= $oPersona->getPerson();

	if (isset($var)) 
	{
		echo 'null';
	} 

	$varchiky = $oPersona->checkToken();

	

	/* 
        ----------------------
                 USUARIO -> CRUD
        ----------------------
*/

        //Guarda Nuevo Usuario
        if ( $option == 'nUsuario' ) {
                //parametros
                $nombre                   = $_POST['name'];
                $apellido                 = $_POST['apellido'];
                $user                         = $_POST['user'];
            $password                 = $_POST['password'];
            $estado                   = $_POST['estado'];
            $id_privilegio        = $_POST['id_privilegio'];
                //$password  = base64_encode($usuario->encriptar($password));
                
                $params = array($nombre, $apellido, $user, $password, $estado, $id_privilegio);
                $save   = $usuario->nuevo($params);
                if ( $save ) {
                        echo "done";
                } else {
                        echo "error";
                }

                $var	= $oPersona->getPerson();

				if (isset($var)) 
				{
					echo 'null';
				} 
        }

        // Modificar usuario
        if ( $option == 'mUsuario' ) 
        {
                //parametros
                 
                $nombre                   = $_POST['name'];
                $apellido                 = $_POST['apellido'];
                $user                         = $_POST['user'];
            $password                 = $_POST['password'];
            $estado                   = $_POST['estado'];
            $id_privilegio        = $_POST['id_privilegio'];
            $id_usuario                = $_POST['id_usuario'];
                //$password  = base64_encode($usuario->encriptar($password));
                
                $params = array($nombre, $apellido, $user, $password, $estado, $id_privilegio, $id_usuario);
                $update = $usuario->modificar($params);
                if ( $update ) {
                        echo "done";
                } else {
                        echo "error";
                } 
        }

        //Eliminar Usuario
        if ( $option == 'eUsuario' ) {
            //parametros
            $idUsuario = $_GET['id_usuario'];
            $delete    = $usuario->eliminar($idUsuario);
            if ( $delete ) {
                echo "done";
            } else {
                echo "error";
            }
                }






?>