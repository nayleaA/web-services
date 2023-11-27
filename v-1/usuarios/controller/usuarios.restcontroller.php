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

            $id=$path_components[$path_index+2];
            //echo $id;
            //completar busqueda por id
            $usuarios=$usuarioRepo->getUsuarioById($id);
            echo json_encode($usuarios);
            break;
        }
        $usuarios=$usuarioRepo->getAllUsuarios();
        echo json_encode($usuarios);
        break;
    case 'POST':
        $fieldsRequired = ['nombre', 'email', 'password'];
        //Definir variables
        $nombre = '';
        $email = '';
        $password = '';

        $json = file_get_contents('php://input');
        $entrada = json_decode($json, true);
        //validar el retorno de JSON
        if ($entrada == null){
            header(HTTP_CODE_400);
            break;
        }

        foreach ($fieldsRequired as $key => $value) {
            if ( !isset($entrada[$value]) ){
                header(HTTP_CODE_400);
                exit();
            }
            $$value = $entrada[$value];
        }
        $usuario = $usuarioRepo->createUsuario(
            $nombre, 
            $email, 
            $password
        );
        echo json_encode($usuario);
        break;
    case 'PUT':
        $id="2";
        $nombre ='Admin4';
        $email ='Admin4@gmail.com';
        $password ='Admin4';

        //rescatar el usuario
        $NuevoUsuario = new Usuario($id,$nombre,$email,$password);

        //enviarlo
        $usuarios=$usuarioRepo->editUsuario( $NuevoUsuario );
        echo json_encode($usuarios);
         break;
    
    case 'DELETE':
        $id='3';
        $usuarios=$usuarioRepo->deleteUsuario( $id );
        echo json_encode($usuarios);
        break;

    default: //Este va a reaccionar cono si fuera verbo OPTIONS
        # code...
        break;
}