<?php
    if(!isset($path_components[$path_index])){
        header(HTTP_CODE_400);
        exit();
    }

    switch ($path_components[$path_index]) {
        case 'tareas':
        require_once("");
            break;
        
        case 'usuarios':
             require_once("");
            break;
        
        //login y registro de usuarios
        case 'auth':
            require_once("");
        break;
                
                
        default:
            # code...
            break;
    }
?>
