<?php
namespace App\Site\Controllers;
use App\Core\Models\DataBase\MensajeCRUD;
use App\Core\GlobalApp;

class Contact extends BaseController{
  
    public function index(){
        $messages = array('messages' => $this->get());
        $this->load_view('mensajes_view', $messages);
    }
    
    
    public function create(){
        $this->load_view('contact');
    }
    
    public function insert(){
        $date = new \DateTime();
        
        $params = [
            'nombre' => filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING),
            'email' => filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL),
            'telefono' => filter_input(INPUT_POST, 'telefono'),
            'texto' => filter_input(INPUT_POST, 'mensaje', FILTER_SANITIZE_STRING),
            'fecha' => $date->format('Y-m-d H:i:s')
        ];
        if ($this->validate($params) == FALSE){
            $error = array('error' => 'Datos del formulario incorrectos');          
            return $this->load_view('contact', $error);
        }
        $db = new MensajeCrud(GlobalApp::get('db_pdo'));
        $db->insertMensaje($params);
        $this->load_view('contact');
    }
    
    private function validate($params){
        if(filter_var($params['email'], FILTER_VALIDATE_EMAIL) === false){
            return FALSE;
        }
        
        if(filter_var($params['telefono'], FILTER_VALIDATE_INT) === false){
            return FALSE;
        }
        
        foreach($params as $posts){
            if ($posts == '')
                return FALSE;
        }
        return TRUE;
    }
    
    private function get($params = NULL){
        $db = new MensajeCrud(GlobalApp::get('db_pdo'));
        return $db->selectMensaje($params);
    }
    
    public function delete(){
        $id =[
            'field' => 'id_mensaje',
            'value' => filter_input(INPUT_GET, 'id_mensaje', FILTER_SANITIZE_STRING)
        ];
        $db = new MensajeCrud(GlobalApp::get('db_pdo'));
        $db->deleteMensaje($id);
        $this->index();
    }
    
}