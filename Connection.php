<?php

class Connection{
    
    public $conn;

    public function __construct() {
       $this->conn = new PDO("mysql:host=localhost;dbname=exam","root","") ;
       
       
    }
    
    public function insertTask($task){
        
        try{
            
            $statement = $this->conn->prepare("INSERT INTO Task(task) VALUES (:task)");
        
        $statement->execute(array(
            
            ':task' => $task,
                )
                );
                echo 'Inserted';
            
        } catch (\Exception $e){
            echo "error".$e->getMessage();
            
        }
        
        
            
        }
        
        public function getAll($query){
            $statement = $this->conn->prepare($query);
            $statement->execute();
            return $statement->fetchALL();
    
        
        
    }
    
    public function update($query,$array){
            $statement = $this->conn->prepare($query);
            $statement->execute($array);
            echo "Updated";
    
        
        
    }
    
    
    
}
?>