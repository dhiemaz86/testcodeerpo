<?php 
 
class Home extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		
		}

		$this->load->model('m_menu');
		$this->load->model('m_kategori');
		$this->load->library('upload');
		
	}
 
	function index(){
		$x['data'] = $this->m_menu->hot_promo();
		$this->load->view('v_home', $x);
	}

}