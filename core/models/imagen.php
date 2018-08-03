<?php
namespace App\Core\Models\DataBase;

class ImagenCRUD extends QueryBuilder{

    public function insertImagen($params){
        return $this->insert('imagen', $params);
    }
    
    public function updateImagen($params){
        return $this->update('imagen', $id, $params);
    }
    
     public function deleteImagen($params){
        return $this->select('imagen', $id);
    }
    
    public function selectImagen($params){
        return $this->select('imagen', $params);
    }
}