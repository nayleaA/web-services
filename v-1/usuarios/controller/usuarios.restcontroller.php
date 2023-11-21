<?php
require_once("./v-1/usuarios/repositori/usuario.repository.php");

$usuarioRepo=UsuarioRepository::getInstance();

switch ($request_method) {
    case 'GET':
        if(isset($path_components[$path_index+1])){ 
            if($path_components[$path_index+1] != "byid"){
                header(HTTP_CODE_400);
                break;
            }

            $path_components[$path_index+2];
            //completar busqueda por id
            break;
        }
        $usuarios=$usuarioRepo->getAllUsuarios();
        echo json_encode($usuarios);

        break;
    case 'POST':
        # code...
        break;
    case 'PUT':
         # code...
         break;
    
    case 'DELETE':
        # code...
        break;

    default: //Este va a reaccionar cono si fuera verbo OPTIONS
        # code...
        break;
}