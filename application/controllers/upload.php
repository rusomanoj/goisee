
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller {
    

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	function index()
	{
		$this->load->view('upload_form', array('error' => ' ' ));
	}

	function do_upload()
	{
		$config['upload_path'] = './image/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '10000';
//		$config['max_width']  = '1024';
//		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('upload_form', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			$this->load->view('upload_success', $data);
		}
		
		 $image_data = $this->upload->data();
		 $this->load->model('basemodel');
		$data = array(
		    
                    'name' => $image_data['file_name'],
		   
                   'path' => $image_data['full_path']=str_replace("/Applications/MAMP/htdocs", "localhost", "/Applications/MAMP/htdocs/goisee/image/".$image_data['file_name'].""),
		    
                    'thumb_path'=> $image_data['file_path']=str_replace("/Applications/MAMP/htdocs", "localhost", "/Applications/MAMP/htdocs/goisee/image/") . 'thumbs/'. $image_data['file_name'],
               
                     );

		     $this->basemodel->set_fun($data);
//		     $data['path']=$this->basemodel->get_fun();
//		     $this->load->view('home', $data);		     
		    
         
	}
	
//	function do_show(){
//	    
//	    
//	     $data['path']=$this->load->model('basemodel');
//	    $data['path']=$this->basemodel->get_fun();
//           
//	}
	
	
	
}
?>