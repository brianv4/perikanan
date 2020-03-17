<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Overview extends CI_Controller {
    public function __construct() //untuk memanggil kelas model yang akan kita gunakan pada setiap function.
    {
		parent::__construct();
		$this->load->model("user_model");
		if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
	}

	public function index() //fungsi index
	{
        // load view admin/overview.php
        $this->load->view("admin/overview");
	}
}
