<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Qurban extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if($this->session->userdata('status') == FALSE || $this->session->userdata('level') != 4 ){
				redirect(base_url("login"));
			}
		/*$this->load->library('Pdf');*/
	 }

	public function index()
	{

		$data = [
			'name'		=> $this->session->userdata('nama'),
			'lengkap'	=> $this->session->userdata('lengkap'),
			'conten'	=> 'conten_petugas/qurban',
			'title'		=> 'Qurban',
			'fitrah'	=> $this->M_data->qurban(),
			'header_css'=> array(
				'assets/template/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css',
				'assets/template/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css',
				'assets/template/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css',
				'assets/template/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css',
				'assets/template/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css',
			),
			'footer_js' => array(
				'assets/template/vendors/datatables.net/js/jquery.dataTables.min.js',
				'assets/template/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js',
				'assets/template/vendors/datatables.net-buttons/js/dataTables.buttons.min.js',
				'assets/template/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js',
				'assets/template/vendors/datatables.net-buttons/js/buttons.flash.min.js',
				'assets/template/vendors/datatables.net-buttons/js/buttons.html5.min.js',
				'assets/template/vendors/datatables.net-buttons/js/buttons.print.min.js',
				'assets/template/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js',
				'assets/template/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js',
				'assets/template/vendors/datatables.net-responsive/js/dataTables.responsive.min.js',
				'assets/template/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js',
				'assets/template/vendors/datatables.net-scroller/js/dataTables.scroller.min.js',
				'assets/template/vendors/jszip/dist/jszip.min.js',
				'assets/template/vendors/pdfmake/build/pdfmake.min.js',
				'assets/template/vendors/pdfmake/build/vfs_fonts.js',
				'assets/js/sweetalert2.all.min.js',
				'assets/js/alert.js'
			)
		];
		$this->load->view('template_petugas/conten',$data);
	}

	public function tambah_qurban()
	{
		$date = date("Y-m-d");
		$table='tbl_qurban';
		$data= array(
						'mudhohi' 			=> $this->input->post('mudhohi_qurban'),
						'alamat' 		    => $this->input->post('alamat'),
						'status' 			=> $this->input->post('status'),
						'hewan'				=> $this->input->post('hewan'),				
						'petugas'			=> $this->input->post('petugas')
						 );
		$this->M_data->simpan_data($table,$data);
		$this->session->set_flashdata('qurban', 'Ditambahkan');
		redirect('petugas/qurban');
	}

	

	public function edit_data($id)
	{
		$date = date("Y-m-d");
		$table = 'tbl_qurban';
		$data = array(
					'mudhohi' 			=> $this->input->post('mudhohi_qurban'),
					'alamat' 		    => $this->input->post('alamat'),
					'status' 			=> $this->input->post('status'),
					'hewan'				=> $this->input->post('hewan'),				
					'petugas'			=> $this->input->post('petugas')
		);
		$this->M_data->update_data($table, $data, array('id_qurban' => $id));
		$this->session->set_flashdata('qurban', 'Diubah');
		redirect('petugas/qurban');
	}

	public function hapus_data($id)
	{

		$table = 'tbl_qurban';
		$where = array('id_qurban' => $id);
		$this->M_data->hapus_data($table,$where);
		$this->session->set_flashdata('fitrah', 'Dihapus');
		redirect('petugas/qurban');
	}


	public function cetak_kupon()
	{

		$data['title'] 			= 'Cetak Kupon Kurban';
		//$data['cetak_kupon']	= $this->M_data->get_data('tbl_zakat_fitrah');
		$data['kop']			= $this->M_data->get_data('tbl_master_laporan');
		//$data['total']			= $this->M_data->jumlah_laporan_zakat_fitrah();
		$data['lokasi']			= $this->M_data->get_data('tbl_master_lokasi');
		$this->load->view('conten_petugas/cetak_kupon',$data);
	}

}
