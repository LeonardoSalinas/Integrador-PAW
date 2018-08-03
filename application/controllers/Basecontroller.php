<?php

namespace App\Site\Controllers;
use App\Core\Helper;

class BaseController {
   
    protected $tipo_usuario;
    protected $session;

    
    private function load_partial($view, $data = []){
        return Helper::view($view, $data);
    }
    
    public function load_view($view, $data = []){
        $this->load_partial('templates/head');
        $this->load_partial('templates/_nav_admin', $data);
        $this->load_partial($view, $data);
        $this->load_partial('templates/footer');
    }   
}