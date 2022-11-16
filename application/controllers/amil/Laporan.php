<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if($this->session->userdata('status') == FALSE || $this->session->userdata('level') != 2 ){
				redirect(base_url("login"));
			}
		$this->load->library('Pdf');
	 }

	public function index()
	{

		$data['name'] 			= $this->session->userdata('nama');
		$data['lengkap'] 		= $this->session->userdata('lengkap');
		$data['conten'] 		= 'conten_sekretaris/laporan_zakat';
		$data['title'] 			= 'Laporan Zakat';
		$data['fitrah']			= $this->M_data->jumlah_fitrah();
		$data['jumlah_beras']	= $this->M_data->jumlah_beras_fitrah();
		$data['jumlah_maal']	= $this->M_data->jumlah_zakat_maal();
		$this->load->view('template_sekretaris/conten',$data);
	}

	public function cetak_laporan_zakat_fitrah()
	{
		/*$title_page = 'Laporan Zakat Fitrah';
		$data['cetak_laporan_fitrah'] = $this->M_data->get_data('tbl_zakat_fitrah');
		$html = $this->load->view('conten/laporan_zakat_fitrah',$data, true);
		$this->pdf->pdf_create($html,$title_page,'A4','portaid');*/
		$data['title'] 			= 'Laporan Zakat Fitrah';
		$data['cetak_laporan_fitrah']			= $this->M_data->get_data('tbl_zakat_fitrah');
		$data['kop']			= $this->M_data->get_data('tbl_master_laporan');
		$data['total']			= $this->M_data->jumlah_laporan_zakat_fitrah();
		$data['lokasi']			= $this->M_data->get_data('tbl_master_lokasi');
		$this->load->view('conten_sekretaris/laporan_zakat_fitrah',$data);
		
	}

	public function cetak_laporan_zakat_maal()
	{
		/*$title_page = 'Laporan Zakat Fitrah';
		$data['cetak_laporan_fitrah'] = $this->M_data->get_data('tbl_zakat_fitrah');
		$html = $this->load->view('conten/laporan_zakat_fitrah',$data, true);
		$this->pdf->pdf_create($html,$title_page,'A4','portaid');*/
		$data['title'] 			= 'Laporan Zakat Maal';
		$data['cetak_laporan_maal']			= $this->M_data->lap_zakat_maal();
		$data['kop']			= $this->M_data->get_data('tbl_master_laporan');
		$data['total_maal']		= $this->M_data->total_maal();
		$data['total_ps']		= $this->M_data->total_ps();
		$data['total_is']		= $this->M_data->total_is();
		$data['total_fidyah']	= $this->M_data->total_fidyah();
		$data['lokasi']			= $this->M_data->get_data('tbl_master_lokasi');
		/*$data['total']			= $this->M_data->jumlah_laporan_zakat_fitrah();*/
		$this->load->view('conten_sekretaris/laporan_zakat_maal',$data);
	}

	public function laporan_penerima_zakat()
	{
		/*$data['name'] 			= $this->session->userdata('nama');
		$data['lengkap'] 		= $this->session->userdata('lengkap');*/
		/*$data['conten'] 		= 'conten/cetak_laporan_penerima';*/
		$data['title'] 			= 'Laporan Penerima Zakat';
		$rt					 	= $this->input->post('rt');
		$data['get_data']		= $this->M_data->lap_penerima_zakat($rt);
		$data['ttd']			= $this->M_data->get_data('tbl_master_laporan');
		$data['berat']			= $this->M_data->berat($rt);
		$data['ringan']			= $this->M_data->ringan($rt);
		$data['sabilillah']		= $this->M_data->sabilillah($rt);
		$data['lokasi']			= $this->M_data->get_data('tbl_master_lokasi');
		$this->load->view('conten_sekretaris/cetak_laporan_penerima',$data);
		
		/*$title_page = 'Laporan Penerima Zakat';
		$rt					 	= $this->input->post('rt');
		$data['get_data']		= $this->M_data->lap_penerima_zakat($rt);
		$data['ttd']			= $this->M_data->get_data('tbl_master_laporan');
		$data['berat']			= $this->M_data->berat($rt);
		$data['ringan']			= $this->M_data->ringan($rt);
		$data['sabilillah']		= $this->M_data->sabilillah($rt);
		$html = $this->load->view('conten/cetak_laporan_penerima',$data, true);
		$this->pdf->pdf_create($html,$title_page,'F4','portaid');*/
	}

}
