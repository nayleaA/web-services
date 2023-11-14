<?php
    class Usuario {
        public int $id_usuario;
        public string $nombre;
        public string $password;

        public function __construct(
            int $id_usuario = -1, 
            string $nombre,
            string $password
        ) {
            $this->id_usuario = $id_usuario;
            $this->nombre = $nombre;
            $this->password = $password;
        }
    }
?>