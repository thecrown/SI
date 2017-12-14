<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	public function index(){
		$data['page']= 'Front/Halaman_utama';
		$this->load->view('Front/Navs_Header',$data);
	}
	public function Tentang(){
		$data['page']= 'Front/Halaman_Tentang';
		$this->load->view('Front/Navs_Header',$data);
	}
	public function Pendaftaran(){
		$data['page']= 'Front/Halaman_Pendaftaran';
		$this->load->view('Front/Navs_Header',$data);
	}

}

/* End of file Front.php */
/* Location: ./application/controllers/Front.php */