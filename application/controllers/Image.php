<?php
namespace App\Site\Controllers;
use App\Core\Models\DataBase\ImagenCRUD;
use App\Core\GlobalApp;

class Image extends BaseController{
  
    public function index(){
        $images = array('images' => $this->get());
        $this->load_view('imagee_upload', $images);
    }
    
    public function create(){
        $this->load_view('image_upload');
    }
    
    public function upload(){
        $target = "images/" . basename($_FILES["upload"]["name"]);
        $date = new \DateTime();
        $params = [
            'id_casa' => filter_input(INPUT_GET, 'id_casa'),
            'descripcion' => filter_input(INPUT_POST, 'descripcion', FILTER_SANITIZE_STRING),
            'nombre' => $target
        ];
        
        print var_dump($params);
        
        if ($this->validate($params) == FALSE){
            $id =[
            'field' => 'id_casa',
            'value' => filter_input(INPUT_GET, 'id_imagen', FILTER_SANITIZE_STRING)
        ];
            $error = array('error' => 'Datos del formulario incorrectos');          
            return $this->load_view('image_upload', $error, $id);
        }
        
        if (!move_uploaded_file($_FILES["upload"]["tmp_name"], $target)){
        
            $error = array('error' => 'No se pudo cargar la imagen');          
            return $this->load_view('image_upload', $error);
        }
        
        print 'hasta aca estoy';
        $db = new MensajeCrud(GlobalApp::get('db_pdo'));
        $db->insertMensaje($params);
        $this->load_view('contact');
    }   
    
    private function validate($params){        
        $n = 0;
        foreach($params as $posts){
            if ($posts == ''){
                print $posts;
                $n++;
            return FALSE;}
        }
        return TRUE;
    }
    
    private function get($params = NULL){
        $db = new ImagenCrud(GlobalApp::get('db_pdo'));
        return $db->selectImagen($params);
    }
    
    public function delete(){
        $id =[
            'field' => 'id_imagen',
            'value' => filter_input(INPUT_GET, 'id_imagen', FILTER_SANITIZE_STRING)
        ];
        $db = new ImagenCrud(GlobalApp::get('db_pdo'));
        $db->deleteImagen($id);
        $this->index();
    }
}
    
