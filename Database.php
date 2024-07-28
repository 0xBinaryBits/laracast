<?php
class Database{
    public $connection;
    
    public function __construct($config,$username="",$password=""){
        $dsn="mysql:". http_build_query($config,'',';');
        $this->connection = new PDO($dsn,$username,$password,[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
       
    
    public function query($command,$param=[]){
        
        $statement=$this->connection->prepare("$command");
        $statement->execute($param);
        return $statement;
    }
    
}
?>