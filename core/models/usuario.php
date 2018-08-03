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
        return $this->select('usuario', $id);
    }
    
    public function selectUsuario($params){
        return $this->select('usuario', $params);
    }
}