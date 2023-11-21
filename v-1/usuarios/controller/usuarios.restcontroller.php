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

            $path_components[$path_components+2];
            //completar busqueda por id
            break;
        }
        $usuarios=$usuarioRepo->getAllUsuarios();
        echo json_encode($usuarios);

        break;
    case 'POST':
        # code...
        break;
    default:
        # code...
        break;
}