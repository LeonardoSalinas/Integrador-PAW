<?php
require('loader.php');

class Image_upload extends BaseController{
        
    protected $id = 0;
    
    public function index(){
        $this->load_view('image_upload');
         if (isset($_GET["id_casa"]))
            $id = $_GET["id_casa"];
    }
}

return (new Image_upload())->index();

