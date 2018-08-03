<?php

namespace App\Core\Models\DataBase;

class QueryBuilder {    
    protected $conn;
    
    public function __construct(PDO $pdo) {
        $this->conn = $pdo;
    }
    
    protected function insert($table, $params){
        $sql = "INSERT INTO " . $table;
        $fields = '';
        $values = '';
        foreach($params as $field => $value){
            $fields .= $field . ", ";
            $values .= ":" . $field . ", ";
        }
        $fields = substr($fields, 0, -2);
        $values = substr($values, 0, -2);

        $sql .= "(". $fields . ") VALUES (" . $values . ")";
        try{
            $stmt = $this->conn->prepare($sql);
            foreach($params as $field => $value){
                $stmt->bindParam(':'. $field, $value);
            }
            $stmt->execute();
            return $this->conn->lastInsertId();
        } catch(PDOException $e){
            return $sql . "<br>" . $e->getMessage();  
        }
    }
    
    protected function update($table, $id, $params){
        $sql = "UPDATE " . $table . " SET ";
        foreach($params as $field => $value){
            $sql .= $field . " = :" . $field . ", ";       
        }
        $sql = substr($sql, 0, -2);
        $sql .= " WHERE " . $id['field'] . " = " . $id['field'];
        try{
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':' . $id['field'], $id['value']);
            foreach($params as $field => $value){
                $stmt->bindParam(':'. $field, $value);
            }
            $stmt->execute();
            return "Success";
        } catch (PDOException $e) {
            return $sql . "<br>" . $e->getMessage();  
        }
    }
    
    protected function delete($table, $id){
        $sql = "UPDATE " . $table . " SET deleted_at = :deleted_at";
        $sql .= " WHERE " . $id['field'] . " = " . $id['field'];
        $deleted_at = new DateTime();
        try{
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':' . $id['field'], $id['value']);
            $stmt->bindParam(":deleted_at", $deleted_at);
            $stmt->execute();
            return "Success";
        } catch (PDOException $e) {
            return $sql . "<br>" . $e->getMessage(); 
        }
    }
    
    protected function select($table, $params = NULL){
        $sql = "SELECT * from " . $table;
        if(!$params == NULL){
            $sql .= " WHERE ";
            foreach($params as $field => $value){
                $sql .= $field . " = :" . $field . " AND ";
            }
            $sql = substr($sql, 0, -5);
        }
        try{
            $stmt = $this->conn->prepare($sql);
            if(!$params == NULL){
                foreach($params as $field => $value){
                    $stmt->bindParam(':'. $field, $value);
                }
            }
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            return $sql . "<br>" . $e->getMessage();
        }
    }
}