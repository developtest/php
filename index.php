<?php
	include_once '../data/db.php';
	include_once '../class/person.php';

	$oPersona = new cPersona(); 

	 /* 
        ----------------------
                 PRIVILEGIO -> CRUD
        ----------------------
*/
                // Guardar Privilegio
                if($option=="nPrivilegio")
                {
                        $privilegio = $_POST['privilegio'];

                        $pack =  array($privilegio);

                        $save = $oPrivilegio->nuevo($pack);
                        if ($save) 
                        {
                                echo "done";
                        } else {
                                echo "error";
                        }

                }

                // Modificar privilegio 
                if ( $option == 'mPrivilegio' ) 
                {
                        //parametros 
                        $privilegio         = $_POST['privilegio']; 
                        $id_privilegio        = $_POST['id_privilegio'];

                        $pack = array($privilegio, $id_privilegio);
                        $update = $oPrivilegio->modificar($pack);        
                        if ( $update ) {
                                echo "done";
                        } else {
                                echo "error";
                        } 
                }

                //Eliminar Usuario
                if ( $option == 'ePrivilegio' ) {
                    //parametros
                    $id_privilegio = $_GET['id_privilegio'];
                    $delete    = $oPrivilegio->eliminar($id_privilegio);
                    if ( $delete ) {
                        echo "done";
                    } else {
                        echo "error";
                    }
                }
 
?>