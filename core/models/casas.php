<?php
namespace App\Core\Models\DataBase;

class CasaCRUD extends QueryBuilder {

    public function insertCasa($params){
        return $this->insert('casa', $params);
    }
    
    public function updateCasa($params){
        return $this->update('casa', $id, $params);
    }
    
     public function deleteCasa($params){
        return $this->delete('casa', $params);
    }
    
    public function selectCasa($params){
        
        return $this->select('casa',    $params);
    }
}
