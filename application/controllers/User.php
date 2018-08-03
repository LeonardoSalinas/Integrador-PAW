<?php 
namespace App\Site\Controllers;
use App\Core\Models\DataBase\UsuarioCRUD;
use App\Core\GlobalApp;

class User extends BaseController{
   
    public function index(){
        $users = array('users' => $this->get());
        $this->load_view('user_view', $users);
    }
    
    public function create(){
        $this->load_view('user_create');
    }
    
    public function insert(){
        $params = [
            'nombre' => filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING),
            'apellido' => filter_input(INPUT_POST, 'apellido', FILTER_SANITIZE_STRING),
            'dni' => filter_input(INPUT_POST, 'dni'),
            'telefono' => filter_input(INPUT_POST, 'telefono'),
            'email' => filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL)
        ];
        if ($this->validate($params) == FALSE){
            $error = array('error' => 'Datos del formulario incorrectos');          
            return $this->load_view('user_create', $error);
        }
        $db = new UsuarioCrud(GlobalApp::get('db_pdo'));
        $db->insertUsuario($params);
        $this->load_view('user_create');
    }
    
    private function validate($params){
        if(filter_var($params['email'], FILTER_VALIDATE_EMAIL) === false){
            return FALSE;
        }
        
        if(filter_var($params['dni'], FILTER_VALIDATE_INT) === false){
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
        $db = new UsuarioCrud(GlobalApp::get('db_pdo'));
        return $db->selectUsuario($params);
    }
    
    public function delete(){
        $id =[
            'field' => 'id_usuario',
            'value' => filter_input(INPUT_GET, 'id_usuario', FILTER_SANITIZE_STRING)
        ];
        $db = new UsuarioCrud(GlobalApp::get('db_pdo'));
        $db->deleteUsuario($id);
        $this->index();
    }
}