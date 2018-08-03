<?php
require('loader.php');
require('../models/mensaje.php');

class Contact extends BaseController{
  
    public function index(){
        return $this->load_view('contact');
    }
    
    public function newMensaje(){
        print "la concha de dios";exit;
        /*
        $mensaje = [
            'nombre' => $_POST['nombre'],
            'email' => $_POST['email'],
            'telefono' => $_POST['tel'],
            'texto' => $_POST['mensaje'],
            'fecha' => new DateTime()
            ];
        
        $conn = Connection::getConnection($config);
        $msj = new MensajeCRUD($conn);
        $msj->insertMensaje($mensaje);
        $conn = NULL;*/
    }
}

return (new Contact())->index();