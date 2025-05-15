<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    function __construct(){
            parent::__construct();
            $this->load->helper('html');
            $this->load->helper('url');
            $this->load->model('member/m_member');
    }

    public function index(){ 
        $data = array(
            'judul' => "Form Pendaftaran",
			'alamat' => "",
        ); 
        $this->load->view('v_header',$data);
        $this->load->view('member/v_register');
        $this->load->view('v_footer');
    }
    public function proses()
	{
		$this->form_validation->set_rules('username', 'Username','trim|required|min_length[1]|max_length[20]|is_unique[member.username_m]');
		$this->form_validation->set_rules('password', 'Password','trim|required|min_length[1]|max_length[20]');
        $this->form_validation->set_rules('nama', 'Nama','trim|required|min_length[1]|max_length[30]');
        $this->form_validation->set_rules('notelp', 'No.Handphone','trim|required|min_length[1]|max_length[16]');
        $this->form_validation->set_rules('alamat', 'Alamat','trim|required|min_length[1]|max_length[100]');
		if ($this->form_validation->run()==true)
	   	{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
            $nama = $this->input->post('nama');
            $notelp = $this->input->post('notelp');
            $alamat = $this->input->post('alamat'); 
			$this->m_member->register($username,$password,$nama,$notelp,$alamat);
			$this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
			redirect('login_m');
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('register');
		}
	}

}