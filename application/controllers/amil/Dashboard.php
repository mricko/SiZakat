<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if($this->session->userdata('status') == FALSE || $this->session->userdata('level') != 2 ){
				redirect(base_url("login"));
			}
	//	$this->load->library('Pdf');
	 }

	public function index()
	{

		$data['name'] 			= $this->session->userdata('nama');
		$data['lengkap'] 		= $this->session->userdata('lengkap');
		$data['conten'] 		= 'conten_sekretaris/dashboard';
		$data['title'] 			= 'Dashboard';
		$data['jumlah_beras']	= $this->M_data->jumlah_beras_fitrah();
		$data['jumlah_uang']	= $this->M_data->jumlah_uang_fitrah();
		$data['jumlah_maal']	= $this->M_data->jumlah_zakat_maal();
		$data['fitrah']			= $this->M_data->jumlah_fitrah();
		$data['maal']			= $this->M_data->jumlah_maal();
		/*$data['user']			= $this->M_data->jumlah_user();
		$data['koor']			= $this->M_data->jumlah_koor();*/
		$data['rt01']			= $this->M_data->penerima_rt01();
		$data['rt02']			= $this->M_data->penerima_rt02();
		$data['rt03']			= $this->M_data->penerima_rt03();
		$data['rt18']			= $this->M_data->penerima_rt18();
		$data['rt19']			= $this->M_data->penerima_rt19();
		$data['rt20']			= $this->M_data->penerima_rt20();
		$this->load->view('template_sekretaris/conten',$data);
	}
}