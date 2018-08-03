<?php
require('loader.php');
class Home_create extends BaseController{
        
    protected $id = 0;
    
    public function index(){
        $this->load_view('home_create');
         if (isset($_GET["id_usuario"]))
            $id = $_GET["id_usuario"];
    }
}

return (new Home_create())->index();