<?php 
require('loader.php');

class Users extends BaseController{
   
    public function __construct() {      
        return $this->index();
    }
    public function index(){
        return $this->load_view('user_create');
    }
}

return (new Users())->index();