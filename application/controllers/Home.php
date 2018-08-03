<?php
require('loader.php');

class Home extends BaseController{
  
    public function index(){
        return $this->load_view('home');
    }
}

return (new Home())->index();