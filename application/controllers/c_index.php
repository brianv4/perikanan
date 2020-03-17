<?php 

class C_index extends CI_Controller{

	function __construct(){	 //untuk memanggil kelas model atau helper yang akan kita gunakan pada setiap function.
		parent::__construct();		
		$this->load->model('m_index');
				$this->load->helper('url');
				$this->load->helper('html');
	}

	function index(){
		$data['products'] = $this->m_index->tampil_data()->result();
		$this->load->view('v_katalok',$data); //memanggil pada menu view "v_katalog"
	}
}