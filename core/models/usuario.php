<?php
namespace App\Core\Models\DataBase;

class UsuarioCRUD extends QueryBuilder{

    public function insertUsuario($params){
        return $this->insert('usuario', $params);
    }
    
    public function updateUsuario($params){
        return $this->update('usuario', $id, $params);
    }
    
     public function deleteUsuario($params){
        return $this->delete('usuario', $params);
    }
    
    public function selectUsuario($params = NULL){
        return $this->select('usuario', $params);
    }
}