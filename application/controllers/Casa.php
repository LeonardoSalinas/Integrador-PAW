<?php
namespace App\Site\Controllers;
use App\Core\Models\DataBase\CasaCRUD;
use App\Core\GlobalApp;

class Casa extends BaseController{
    
    public function index(){
        $casas = array('casas' => $this->get());
        $this->load_view('casas_view', $casas);
    }
    
    public function create(){
        $users = array('users' => [
            'field' => 'id_usuario',
            'value' => filter_input(INPUT_GET, 'id_usuario', FILTER_SANITIZE_STRING)
        ])
                ;
        $this->load_view('casa_create', $users);
    }
    
    public function insert(){
        $params = [
            'id_usuario' => filter_input(INPUT_GET, 'id_usuario'),
            'direccion' => filter_input(INPUT_POST, 'direccion', FILTER_SANITIZE_STRING),
            'ciudad' => filter_input(INPUT_POST, 'ciudad', FILTER_SANITIZE_STRING),
            'transaccion' => filter_input(INPUT_POST, 'transaccion', FILTER_SANITIZE_STRING),
            'tipo' => filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING),
            'metros2' => filter_input(INPUT_POST, 'metros2'),
            'ambientes' => filter_input(INPUT_POST, 'ambientes'),
            'dormitorios' => filter_input(INPUT_POST, 'dormitorios'),
            'patio' => filter_input(INPUT_POST, 'patio', FILTER_SANITIZE_STRING),
            'garage' => filter_input(INPUT_POST, 'garage', FILTER_SANITIZE_STRING),
            'coordenadas' => filter_input(INPUT_POST, 'coordenadas', FILTER_SANITIZE_STRING),
            'precio' => filter_input(INPUT_POST, 'precio'),
            'estado' => filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING),
            'ubicacion' => filter_input(INPUT_POST, 'ubicacion', FILTER_SANITIZE_STRING)
        ];
        if ($this->validate($params) == FALSE){
            $error = array('error' => 'Datos del formulario incorrectos');          
            return $this->load_view('casa_create', $error);
        }
        $db = new CasaCrud(GlobalApp::get('db_pdo'));
        
        $db->insertCasa($params);
        $users = array('users' => [
            'field' => 'id_usuario',
            'value' => filter_input(INPUT_GET, 'id_usuario', FILTER_SANITIZE_STRING)
        ]);
        $this->load_view('casa_create', $users);
    }
    
    private function validate($params){
        if(filter_var($params['metros2'], FILTER_VALIDATE_INT) === false){
            return FALSE;
        }
        
        if(filter_var($params['ambientes'], FILTER_VALIDATE_INT) === false){
            return FALSE;
        }
        
        if(filter_var($params['dormitorios'], FILTER_VALIDATE_INT) === false){
            return FALSE;
        }
        
        if(filter_var($params['precio'], FILTER_VALIDATE_INT) === false){
            return FALSE;
        }
        
        foreach($params as $key => $value){
            if ($value == '' && !$key == 'precio' && !$key == 'coordenadas')
                return FALSE;
        }
        
        if($params['transaccion']!= 'Alquiler' && $params['transaccion']!= 'Venta' && $params['transaccion']!= 'Ambos')
            return FALSE;
        
        if($params['tipo'] != 'Casa' && $params['tipo'] != 'Casa-Quinta' 
            && $params['tipo'] != 'Departamento' && $params['tipo'] != 'Terreno' 
            && $params['tipo'] != 'Negocio' && $params['tipo'] != 'Deposito')
            return FALSE;
        
        if($params['ubicacion'] != 'Centrica' && $params['ubicacion'] != 'Urbana' && $params['ubicacion'] != 'Lejana')
            return FALSE;
        
        if($params['estado'] != 'Excelente' && $params['estado'] != 'Buena' 
                && $params['estado'] != 'Intermedia' && $params['estado'] != 'Mala')
        return FALSE;
        
        if(($params['garage'] != 'Si' && $params['garage'] != 'No') 
                || ($params['patio'] != 'Si' && $params['patio'] != 'No'))
            return FALSE;
        
        return TRUE;
    }
    
    public function get($params = NULL){
        
        $db = new CasaCrud(GlobalApp::get('db_pdo'));
        
        return $db->selectCasa($params);
    }
    
    public function delete(){
        $id =[
            'field' => 'id_casa',
            'value' => filter_input(INPUT_GET, 'id_casa', FILTER_SANITIZE_STRING)
        ];
        $db = new UsuarioCrud(GlobalApp::get('db_pdo'));
        $db->deleteCasa($id);
        $this->index();
    }
    
    public function detail(){
        $id =[
            'id_casa' => filter_input(INPUT_GET, 'id_casa', FILTER_SANITIZE_STRING)
        ];
        
        $casas = array('casas' => $this->get($id));
        
        $this->load_view('casa_detail', $casas);
    }
}