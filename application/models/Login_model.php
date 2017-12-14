<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
	
	public function login(){
		$where = array(
			'username'=>$this->input->post('username'),
			'password'=>md5($this->input->post('password'))
		);

		$query = $this->db->get_where('tabel_user',$where);
		if($query->num_rows()>=1){
			$datas = array(
				'user_id'=>$query->row(0)->id_user,
				'username'=>$query->row(0)->username
			);
			$this->session->set_userdata($datas);
			return true;
		}else{
			return false;
		}

	}
	public function destroySession(){
        $this->session->unset_userdata('user_id');
		$this->session->unset_userdata('username');
		$this->session->sess_destroy();
    }
	

}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */