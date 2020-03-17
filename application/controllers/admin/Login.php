<?php

class Login extends CI_Controller
{
    public function __construct() //untuk memanggil kelas model atau library yang akan kita gunakan pada setiap function.
    {
        parent::__construct();
        $this->load->model("user_model");
        $this->load->library('form_validation');
        // $this->output->enable_profiler(TRUE);
    }

    public function index() //memnaggil kelas index 
    {
        if ($this->input->post()) { //menambahkan data 
            if ($this->user_model->doLogin()) redirect(site_url('admin')); //menuju ke halaman admin
        }
        $this->load->view("admin/login_page.php");  //menuju ke halaman login page pada directori admin
    }

    public function logout()    //fungsi logout yang akan kembali pada halaman c_index
    {
        $this->session->sess_destroy();
        redirect(site_url('c_index'));
    }

    public function test()
    {
        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode(array('foo' => 'bar')));
    }
}
