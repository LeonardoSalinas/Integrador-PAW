<?php
namespace App\Site\Controllers;

class Home extends BaseController{
  
    public function index(){
        return $this->load_view('home');
    }
}