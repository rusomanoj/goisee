<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homecon extends CI_Controller{
    
    public function index(){

	 $this->load->model('basemodel');
	      $data['see']=$this->basemodel->get_fun();
            $this->load->view('home',$data);
	    $this->load->helper('url');
    }
    
 
    
	
}


?>
