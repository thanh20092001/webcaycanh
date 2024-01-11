<?php

class DB{
   
        private $host = "localhost";
        private $dbname = "btlphp";
        private $user = "root";
        private $pass = "";
        public $conn;
    
    // Create connection
    
        public function connect(){
            $dsn = 'mysql:host='.$this->host.';dbname='.$this->dbname;
            $conn = new PDO($dsn,$this->user,$this->pass);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
            return $conn;
        }
            
   

   /* public $con;
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "btlphp";

    function __construct(){
        $this->con = mysqli_connect($this->servername, $this->username, $this->password);
        mysqli_select_db($this->con, $this->dbname);
        mysqli_query($this->con, "SET NAMES 'utf8'");
    }*/

}

?>