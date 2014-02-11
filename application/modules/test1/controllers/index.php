<?php

class Index extends MX_Controller {
    
    public function __construct() {
        parent::__construct();  
        //echo "<pre>"; print_r($this);            
    }
    
    public function index()
    {
        $this->load->view('index/index');
       // echo "HOLA MUNDO : modules/test1/index/indexAction";exit;
    }
}
