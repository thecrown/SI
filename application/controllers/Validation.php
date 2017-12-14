<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validation extends CI_Controller {

	public function index()
	{
		$this->load->view('Admin/Admin_login');		
	}
	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		if($this->form_validation->run()==false){
			$message['err_msg']='Username and Password May Wrong';
			$this->session->set_flashdata($message);
			redirect($this->input->server('HTTP_REFERER'));
		}else{
			$result = $this->Login_model->login();
			if($result == true){
				redirect('Admin');
			}else{
				$message['err_msg']='Username and Password May Wrong';
				$this->session->set_flashdata($message);
				redirect($this->input->server('HTTP_REFERER'));	
			}
			
		}
	}
	public function logout(){
		$this->Login_model->destroySession();
		redirect('Login');
	}
	public function Daftar(){
		$this->form_validation->set_rules('nama', 'Nama', 'trim|xss_clean');
		$this->form_validation->set_rules('Jeniskelamin', 'JenisKelamin', 'trim|xss_clean');
		$this->form_validation->set_rules('Agama', 'Agama', 'trim|xss_clean');
		$this->form_validation->set_rules('kotalahir', 'Kota Lahir', 'trim|xss_clean');
		$this->form_validation->set_rules('tanggallahir', 'Tanggal Lahir', 'trim|xss_clean');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|xss_clean');
		$this->form_validation->set_rules('kodepos', 'Kode Pos', 'trim|xss_clean');
		$this->form_validation->set_rules('hp', 'hp', 'trim|xss_clean');
		$this->form_validation->set_rules('namaayah', 'namaayah', 'trim|xss_clean');
		$this->form_validation->set_rules('pekerjaanayah', 'pekerjaanayah', 'trim|xss_clean');
		$this->form_validation->set_rules('namaibu', 'namaibu', 'trim|xss_clean');
		$this->form_validation->set_rules('pekerjaanibu', 'pekerjaanibu', 'trim|xss_clean');
		$this->form_validation->set_rules('hportu', 'hportu', 'trim|xss_clean');
		$this->form_validation->set_rules('penghasilanayah', 'penghasilanayah', 'trim|xss_clean');
		$this->form_validation->set_rules('penghasilanibu', 'penghasilanibu', 'trim|xss_clean');
		$this->form_validation->set_rules('namasekolah', 'namasekolah', 'trim|xss_clean');
		$this->form_validation->set_rules('nomerinduk', 'nomerinduk', 'trim|xss_clean');
		$this->form_validation->set_rules('tahunlulus', 'tahunlulus', 'trim|xss_clean');
		$this->form_validation->set_rules('prestasi', 'prestasi', 'trim|xss_clean');
		$this->form_validation->set_rules('Nilai', 'Nilai', 'trim|xss_clean');
		$this->form_validation->set_rules('kondisikesehatan', 'kondisikesehatan', 'trim|xss_clean');
		if($this->form_validation->run()==false){
			$message['err_msg']=validation_errors();
			$this->session->set_flashdata($message);
			redirect($this->input->server('HTTP_REFERER'));
		}else{
			$result = $this->Admin_model->insert_Pendaftar();
			if($result == true){
				$message['err_msg']="input data berhasil";
				$this->session->set_flashdata($message);
				redirect($this->input->server('HTTP_REFERER'));
			}else{
				$message['err_msg']="input data gagal";
				$this->session->set_flashdata($message);
				redirect($this->input->server('HTTP_REFERER'));
			}
		}

	}

}

/* End of file Validation.php */
/* Location: ./application/controllers/Validation.php */