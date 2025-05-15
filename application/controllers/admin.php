<?php 
 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->helper('html');
		$this->load->helper('url');
		if($this->session->userdata('status') != "login"){
		redirect(base_url("login"));
	 
		}
	}
 
	function index(){
		$this->load->view('admin/v_admin');
	}
}