<?php
class BaseController {
   
    protected $tipo_usuario;
    protected $session;

    
    private function load_partial($view, $data = NULL){
        extract($data);
        return require ('../../application/views/' . $view);
    }
    
    public function load_view($view, $data = NULL){
        $this->load_partial('templates/head.php', $data[]);
        $this->load_partial('templates/_nav_admin.php');
        $this->load_partial($view . '.php', $data);
        $this->load_partial('templates/footer.php');
    }
    
    function redirect($path){
        header("Location: /{$path}");
    }
        
}