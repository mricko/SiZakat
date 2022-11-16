<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$data = [
	      'title' => 'Login Page'
    ];
		$this->load->view('conten_sekretaris/login', $data);
	}

	public function login_form(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('pass'));
		// admin
		$where1 = array(
			'username' => $username,
			'password' => $password,
			'level' => 1
			);
		$cek1 = $this->M_data->get_data_by_id("tbl_user",$where1);
		//sekretaris
		$where2 = array(
			'username' => $username,
			'password' => $password,
			'level' => 2
			);
		$cek2 = $this->M_data->get_data_by_id("tbl_user",$where2);

		// Petugas Piket lv4
		$where3 = array(
			'username' => $username,
			'password' => $password,
			'level' => 4
			);
		$cek3 = $this->M_data->get_data_by_id("tbl_user",$where3);

		// Koordinator
		$where4 = array(
			'username' => $username,
			'password' => $password,
			'level'	   => 3
		);
		$cek4 = $this->M_data->get_data_by_id("tbl_koordinator", $where4);

		if($cek1->num_rows() > 0){
			foreach ($cek1->result() as $row){
				$id = $row->id_user;
				$nama = $row->nama_user;
				$lengkap = $row->nama_lengkap;
			}
			$data_session = array(
				'status' 	=> true,
				'level' 	=> 1,
				'id'		=> $id,
				'nama'		=> $nama,
				'lengkap'	=> $lengkap

			);
			$this->session->set_userdata($data_session);
			redirect(base_url("admin/dashboard"));
		}elseif ($cek2->num_rows() > 0){
			foreach ($cek2->result() as $row){
				$id = $row->id_user;
				$nama = $row->nama_user;
				$lengkap = $row->nama_lengkap;
			}
			$data_session = array(
				'status' 	=> true,
				'level' 	=> 2,
				'id_petugas'=> $id,
				'nama'		=> $nama,
				'lengkap'	=> $lengkap
			);

			$this->session->set_userdata($data_session);
			redirect(base_url("amil/dashboard"));
		}elseif ($cek3->num_rows() > 0) {
			foreach ($cek3->result() as $row){
				$id = $row->id_user;
				$nama = $row->nama_user;
				$lengkap = $row->nama_lengkap;
			}
			$data_session = array(
				'status' 	=> true,
				'level' 	=> 4,
				'id_petugas'=> $id,
				'nama'		=> $nama,
				'lengkap'	=> $lengkap
			);

			$this->session->set_userdata($data_session);
			redirect(base_url("petugas/dashboard"));
		}elseif ($cek4->num_rows() > 0) {
			foreach ($cek4->result() as $row){
				$id 	= $row->id_koor;
				$nama 	= $row->panggilan_koor;
				$lengkap= $row->nama_koor;
			}
			$data_session = array(
				'status' 	=> true,
				'level' 	=> 3,
				'id_koor'	=> $id,
				'nama'		=> $nama,
				'lengkap'	=> $lengkap
			);

			$this->session->set_userdata($data_session);
			redirect(base_url("koor/dashboard"));
		}
		else{
			$this->session->set_flashdata('flash', 'Salah');

			redirect(base_url('Login'));
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
