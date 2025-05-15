<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aladin extends CI_Controller {

    function __construct(){
            parent::__construct();
            $this->load->helper('html');
            $this->load->helper('url');
    }

    public function index(){ 
        $data = array(
            'judul' => "Sultana Catering",
			'alamat' => "Alfamidi Desa.cibadak 🏬 Perumahan Dramaga Pratama🏘️",
        ); 
        $this->load->view('v_header',$data);
        $this->load->view('v_aladin');
        $this->load->view('v_footer');
    }
    
    function about(){
    $data = array(
            'judul' => "Tentang Kami",
            'alamat' => ""
        ); 
        $this->load->view('v_header',$data);
        $this->load->view('v_about');
        $this->load->view('v_footer');
    }

    function menu(){
        $data = array(
                'judul' => "Menu",
                'alamat' => ""
            ); 
            $this->load->view('v_header',$data);
            $this->load->view('v_menu');
            $this->load->view('v_footer');
        }
} 