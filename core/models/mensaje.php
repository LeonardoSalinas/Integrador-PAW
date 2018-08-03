<?php
namespace App\Core\Models\DataBase;

class MensajeCRUD extends QueryBuilder{

    public function insertMensaje($params){
        return $this->insert('mensaje', $params);
    }
    
    public function updateMensaje($params){
        return $this->update('mensaje', $id, $params);
    }
    
     public function deleteMensaje($params){
        return $this->select('mensaje', $id);
    }
    
    public function selectMensaje($params){
        return $this->select('mensaje', $params);
    }
}