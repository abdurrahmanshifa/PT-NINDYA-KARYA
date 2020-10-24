<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_barang extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
    }

    public function data_barang(){
    	$this->db->select('*');
    	$this->db->from('Tb_barang');
    	return $this->db->get()->result();
    }

}
?>