<?php
require_once __DIR__.'/../config/database.php';

class Crud extends Database
{

    protected function insert($table,$para=array()){
        $table_columns = implode(',', array_keys($para));
        $table_value = implode("','", $para);

        $sql="INSERT INTO $table($table_columns) VALUES('$table_value')";

        $result = $this->con->query($sql); 
        return $result;
    }

    protected function update($table,$para=array(),$id){

        foreach ($para as $key => $value) {
            $args[] = "$key = '$value'"; 
        }

        $sql="UPDATE  $table SET " . implode(',', $args);

        $sql .=" WHERE id=$id";
        $result = $this->con->query($sql);
        return $result;
    }

    protected function delete($table,$id){
        $sql="DELETE FROM $table";
        $sql .=" WHERE $id ";
        
        $result = $this->con->query($sql);
        return $result;
    }


    protected function select($table,$rows="*",$where = null){
        
            if ($where != null) {
                $sql="SELECT $rows FROM $table WHERE $where";
            }else{
                $sql="SELECT $rows FROM $table";
            }
        
        $result = $this->con->query($sql);
        $res = $result ->fetchALL();
        return $res;
    }
    
    
}
