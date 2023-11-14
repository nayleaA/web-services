<?php
   class Usuario {
      private int $id_usuario;
      private string $nombre;
      private string $contra;
   }

   public function __construct(
    int $id_usuario=-1,
    string $nombre,
    string $contra ){
        $this->id_usuario=$id_usuario;
        $this->nombre=$nombre;
        $this->contra=$contra;
   }
?>