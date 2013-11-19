<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class basemodel extends CI_Model{
    //put your code here
    
    function set_fun($data){
	 $this->db->insert('photos', $data);//load array to database 
    }
    
    function get_fun()
    {
	$sql = $this->db->query('SELECT path FROM photos');
        return $sql->result();
	
    }
}

?>
