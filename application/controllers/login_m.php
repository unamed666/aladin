<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Login_m extends CI_Controller {
 
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('member/m_member');
		
	}
 
	public function index()
	{
		$data = array(
            'judul' => "Silahkan Masuk",
			'alamat' => "",
        ); 
	
		$this->load->view('v_header',$data);
		$this->load->view('member/v_login');
		$this->load->view('v_footer');
	}
 
	public function proses()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if($this->m_member->login_user($username,$password))
		{
			redirect('shopping');
		}
		else
		{
			$this->session->set_flashdata('error','Username & Password salah');
			redirect('login_m');
		}
	}
 
	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('alamat');
		$this->session->unset_userdata('notelp');
		$this->session->unset_userdata('is_login');
		redirect('login_m');
    }

 
	
 
}