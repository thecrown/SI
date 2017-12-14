<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function insert_Pendaftar(){
		$datasiswa=array(
				'nama_siswa'=>$this->input->post('nama'),
				'jenis_kelamin'=>$this->input->post('Jeniskelamin'),
				'kota_lahir'=>$this->input->post('kotalahir'),
				'tgl_lahir'=>$this->input->post('tanggallahir'),
				'alamat_siswa'=>$this->input->post('alamat'),
				'kode_pos'=>$this->input->post('kodepos'),
				'agama'=>$this->input->post('Agama'),
				'no_hp'=>$this->input->post('hp'),
				'kondisi_kesehatan'=>$this->input->post('kondisikesehatan'),
				'status'=>1
		);
		$query1 = $this->db->insert('tabel_siswa', $datasiswa);
		$id_siswa = $this->db->get_where('tabel_siswa',$datasiswa)->row();
		
		$dataortu = array(
			'id_siswa'=>$id_siswa->id_siswa,
			'nama_ayah'=>$this->input->post('namaayah'),
			'nama_ibu'=>$this->input->post('namaibu'),
			'pekerjaan_ayah'=>$this->input->post('pekerjaanayah'),
			'pekerjaan_ibu'=>$this->input->post('pekerjaanibu'),
			'penghasilan_ayah'=>$this->input->post('penghasilanayah'),
			'penghasilan_ibu'=>$this->input->post('penghasilanibu'),
			'no_hp'=>$this->input->post('hportu')
		);
		$query2 = $this->db->insert('tabel_ortu', $dataortu);
		$datapendidikan=array(
			'id_siswa'=>$id_siswa->id_siswa,
			'nama_sekolah'=>$this->input->post('namasekolah'),
			'NIS'=>$this->input->post('nomerinduk'),
			'tanggal_lulus'=>$this->input->post('tahunlulus'),
			'nilai_siswa'=>$this->input->post('Nilai'),
			'prestasi'=>$this->input->post('prestasi')
		);
		$query3 = $this->db->insert('tabel_pendidikan', $datapendidikan);
		if($query1 && $query2 && $query3 == true){
			return true;
		}else{
			return false;
		}
	}
	public function getPendaftar(){
		return $this->db->get('tabel_siswa')->result();
	}
	public function getOrangTua(){
		return $this->db->get('ortu_view')->result();
	}
	public function getPendidikan(){
		return $this->db->get('pendidikan_view')->result();	
	}
	public function update_password(){
		$data =array(
			'password'=>md5($this->input->post('password'))
		);
		$where =array(
			'id_user'=>$this->session->userdata('user_id')
		);
		$query = $this->db->update('tabel_user', $data,$where);
		if($query == true){
			return true;
		}else{
			return false;
		}
	}
	public function getAllData($id){
		$where = array(
			'id_siswa'=>$id
		);
		return $this->db->get_where('detail_view',$where)->result();		
	}
	public function getDataHasil($id){
		$data =array(
			'id_siswa'=>$id,
			'status'=>$this->input->post('Hasil'),
		);
		$query = $this->db->insert('tabel_diterima',$data);
		$where = array(
			'id_siswa'=>$id
		);
		$data2 =array(
			'status'=>0
		);
		$query2 = $this->db->update('tabel_siswa', $data2,$where);
		if($query && $query2 == true){
			return true;
		}else{
			return false;
		}
	}
	public function SelectDataHasil(){
		return $this->db->get('acc_tabel')->result();
	}
	public function update_username(){
		$where = array(
			'username'=>$this->input->post('oldusername'),
			'password'=>md5($this->input->post('password'))
		);

		$data = $this->db->get_where('tabel_user',$where);
		
		if($data->num_rows()>=1){
			$data =array(
				'username'=>$this->input->post('newusername')
			);

			$return = $this->db->update('tabel_user',$data,$where);
			if($return == true){
				return true;
			}else{
				return false;
			}
		}
	}
	public function countPendaftar(){
		return $this->db->count_all('tabel_siswa');
	}
	public function countLolos(){
		return $this->db->query('SELECT COUNT(status) as jumlah_status FROM `acc_tabel` WHERE status="diterima"')->row();
	}
	public function countDitolak(){
		return $this->db->query('SELECT COUNT(status) as jumlah_status FROM `acc_tabel` WHERE status="ditolak"')->row();
	}

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */