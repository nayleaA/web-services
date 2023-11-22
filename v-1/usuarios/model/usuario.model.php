<?php
    class Usuario {
        public int $id_usuario;
        public string $nombre;
        public string $email;
        public string $password;

        public function __construct(
            int $id_usuario = -1, 
            string $nombre,
            string $email,
            string $password
        ) {
            $this->id_usuario = $id_usuario;
            $this->nombre = $nombre;
            $this->email = $email;
            $this->password = $password;
        }
        public function getId(): int {
            return $this->id_usuario;
        }
        public function setId( string $id_usuario ): void {
            $this->id_usuario = $id_usuario;
        }

        public function getUsuario(): string {
            return $this->nombre;
        }
        public function setUsuario( string $nombre ): void {
            $this->nombre = $nombre;
        }

        
        public function getPassword(): string {
            return $this->password;
        }
        public function setPassword( string $password ): void {
            $this->password = $password;
        }

        public function getEmail(): string {
            return $this->email;
        }
        public function setEmail( string $email ): void {
            $this->email = $email;
        }
    }
?>