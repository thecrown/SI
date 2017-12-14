<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_dashbord extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('user_id')!=true){
			redirect('Login');
		}
	}
	public function index()
	{	
		$data['pendaftar'] =$this->Admin_model->countPendaftar();		 
		$data['lolos']=$this->Admin_model->countLolos();
		 //die(var_dump($data['lolos']));		
		$data['ditolak']= $this->Admin_model->countDitolak();		
		$data['header']='Admin/Navs_Header';
		$data['footer']='Admin/Navs_footer';		
		$this->load->view('Admin/dashboard',$data);		
	}
	public function DaftarCalonPendaftar(){
		$data['header']='Admin/Navs_Header';
		$data['footer']='Admin/Navs_footer';
		$data['pendaftar']=$this->Admin_model->getPendaftar();		
		$this->load->view('Admin/CalonPendaftar',$data);			
	}
	public function OrangtuaCalon(){
		$data['header']='Admin/Navs_Header';
		$data['footer']='Admin/Navs_footer';
		$data['orangtua']=$this->Admin_model->getOrangTua();		
		$this->load->view('Admin/OrangtuaCalon',$data);
	}
	public function PendidikanCalon(){
		$data['header']='Admin/Navs_Header';
		$data['footer']='Admin/Navs_footer';
		$data['pendidikan']=$this->Admin_model->getPendidikan();		
		$this->load->view('Admin/PendidikanCalon',$data);
	}
	public function GantiPassword(){
		$data['header']='Admin/Navs_Header';
		$data['footer']='Admin/Navs_footer';		
		$this->load->view('Admin/GantiPassword',$data);
	}
	public function verifpassword(){
		$this->form_validation->set_rules('password', 'Password', 'trim|xss_clean');
		$this->form_validation->set_rules('password2','Password','trim|xss_clean|matches[password]');
		if($this->form_validation->run()==false){
			$message['err_msg']=validation_errors();
			$this->session->set_flashdata($message);
			redirect($this->input->server('HTTP_REFERER'));
		}else{
			$result = $this->Admin_model->update_password();
			if($result == true){
				$message['err_msg']="Ganti password berhasil";
				$this->session->set_flashdata($message);
				redirect($this->input->server('HTTP_REFERER'));
			}else{
				$message['err_msg']="Ganti Password gagal";
				$this->session->set_flashdata($message);
				redirect($this->input->server('HTTP_REFERER'));
			}
		}
	}
	public function Detail($id){
		$data['header']='Admin/Navs_Header';
		$data['footer']='Admin/Navs_footer';
		$data['detail']=$this->Admin_model->getAllData($id);		
		$this->load->view('Admin/Detailview',$data);
	}
	public function Acc($id)
	{
		$result = $this->Admin_model->getDataHasil($id);
		if($result==true){
			$message['err_msg']="Ganti status berhasil";
			$this->session->set_flashdata($message);
			redirect('HasilSeleksi');
		}else{
			$message['err_msg']="Ganti status gagal";
			$this->session->set_flashdata($message);
			redirect('HasilSeleksi');
		}
	}
	public function HasilSeleksi(){
		$data['header']='Admin/Navs_Header';
		$data['footer']='Admin/Navs_footer';
		$data['acc']=$this->Admin_model->SelectDataHasil();		
		$this->load->view('Admin/HasilSeleksi',$data);
	}
	public function GantiUsername(){
		$data['header']='Admin/Navs_Header';
		$data['footer']='Admin/Navs_footer';		
		$this->load->view('Admin/GantiUsername',$data);	
	}
	public function verifusername(){
		$this->form_validation->set_rules('oldusername', 'Username Lama', 'trim|xss_clean');
		$this->form_validation->set_rules('newusername','Username Baru','trim|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|xss_clean');

		if($this->form_validation->run()==false){
			$message['err_msg']=validation_errors();
			$this->session->set_flashdata($message);
			redirect($this->input->server('HTTP_REFERER'));
		}else{
			$result = $this->Admin_model->update_username();
			if($result == true){
				$message['err_msg']="Ubah Username berhasil";
				$this->session->set_flashdata($message);
				redirect($this->input->server('HTTP_REFERER'));
			}else{
				$message['err_msg']="Ubah Username gagal";
				$this->session->set_flashdata($message);
				redirect($this->input->server('HTTP_REFERER'));
			}
		}
	}
	public function CetakPDF()
	{
		$this->load->library('pdf_report');
		$data=$this->Admin_model->SelectDataHasil();
		$this->load->view('admin/v_report',['data'=>$data]);
		
	}

}

/* End of file Admin_dashbord.php */
/* Location: ./application/controllers/Admin_dashbord.php */