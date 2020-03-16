<?php 

class C_index extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_index');
				$this->load->helper('url');
				$this->load->helper('html');
	}

	function index(){
		$data['products'] = $this->m_index->tampil_data()->result();
		$this->load->view('v_katalok',$data);
	}
}