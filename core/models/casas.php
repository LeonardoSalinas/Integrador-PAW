<?php
namespace App\Core\Models\DataBase;

class CasasCRUD extends QueryBuilder {

    public function insertCasa($params){
        return $this->insert('casa', $params);
    }
    
    public function updateCasa($params){
        return $this->update('casa', $id, $params);
    }
    
     public function deleteCasa($params){
        return $this->select('casa', $id);
    }
    
    public function selectCasa($params){
        return $this->select('casa',    $params);
    }
}
