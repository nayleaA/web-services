<?php
   class UsuarioRepository {
    private static $_intance = [];
        
    private mysqli $mysqli;

    private function __construct() {
      $host = $_ENV['DB_HOST'];
      $user = $_ENV['DB_USER'];
      $password = $_ENV['DB_PASSWORD'];
      $database = $_ENV['DB_DATABASE'];
       
      $this->mysqli = new mysqli($host, $user,$password,$database);

      $this->createTable();
    
    }
    
    public static function getInstance(): UsuarioRepository {
        $class = static::class;
        if ( !isset( $_intance[ $class ] ) ){
            $_intance[ $class ] = new static();
        }

        return $_intance[ $class ];
    }

    public function getMysqli(): mysqli {
        return $this->mysqli;
    }

    public function createTable(): void {
    }
}    
?>