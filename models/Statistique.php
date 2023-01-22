<?php
require_once __DIR__.'/../config/database.php';

class Statistique extends Database
{

    public function count($table,$row){

        $sql= "SELECT COUNT($row) FROM $table";
        $result = $this->con->query($sql);
        return $result;
     }
    
    
     
}
