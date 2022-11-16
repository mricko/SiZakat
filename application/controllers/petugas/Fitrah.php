<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fitrah extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if($this->session->userdata('status') == FALSE || $this->session->userdata('level') != 4 ){
				redirect(base_url("login"));
			}
		$this->load->library('Pdf');
	 }

	public function index()
	{

		$data = [
			'name'		=> $this->session->userdata('nama'),
			'lengkap'	=> $this->session->userdata('lengkap'),
			'conten'	=> 'conten_petugas/zakat_fitrah',
			'title'		=> 'Zakat Fitrah',
			'fitrah'	=> $this->M_data->zakat_fitrah(),
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

	public function tambah_data_zakat_fitrah()
	{
		$date = date("Y-m-d");
		$table='tbl_zakat_fitrah';
		$data= array('nama_pemberi_zakat' 	=> $this->input->post('pemberi_zakat'),
						'besaran_jiwa' 		=> $this->input->post('jiwa'),
						'beras' 			=> $this->input->post('beras'),
						'uang' 				=> $this->input->post('uang'),
						'alamat' 			=> $this->input->post('alamat'),
						'tanggal'			=> $date,
						'petugas'			=> $this->input->post('petugas')
						 );
		$this->M_data->simpan_data($table,$data);
		$this->session->set_flashdata('fitrah', 'Ditambahkan');
		redirect('petugas/Fitrah');
	}

	function vedit($id)
	{
		$data['name'] 			= $this->session->userdata('nama');
		$data['lengkap'] 		= $this->session->userdata('lengkap');
		$data['conten'] = 'conten_petugas/edit_zakat_fitrah';
		$data['title'] = "Edit Data";
		$data['edit_data'] = $this->M_data->get_data_by_id('tbl_zakat_fitrah', array('id_zakat_fitrah'=> $id));
		$this->load->view('template_petugas/conten',$data);
	}

	public function update_data($id){
		$date = date("Y-m-d");
		$table='tbl_zakat_fitrah';
		$data= array(
						'nama_pemberi_zakat' => $this->input->post('pemberi_zakat'),
						'besaran_jiwa' => $this->input->post('jiwa'),
						'beras' => $this->input->post('beras'),
						'uang' => $this->input->post('uang'),
						'alamat' => $this->input->post('alamat'),
						'petugas' => $this->input->post('petugas'),
						'tanggal' => $date
						 );
		$this->M_data->update_data($table,$data,array('id_zakat_fitrah' => $id));
		$this->session->set_flashdata('fitrah', 'Diubah');
		redirect('petugas/Fitrah');
	}

	/*public function cetak_laporan_fitrah($id){
		$date = date("Y-m-d");
		$title_page = 'Laporan Zakat Fitrah'.$date;
		$data['cetak_laporan_fitrah'] = $this->M_data->get_data_by_id('tbl_zakat_fitrah', array('id_zakat_fitrah'=> $id));
		$html= $this->load->view('conten/laporan_zakat_fitrah', $data,true);
		$this->pdf->pdf_create($html,$title_page,'A4','portaid');
	}*/

	public function hapus_data($id){
		$table = 'tbl_zakat_fitrah';
		$where = array('id_zakat_fitrah' => $id);
		$this->M_data->hapus_data($table,$where);
		$this->session->set_flashdata('fitrah', 'Dihapus');
		redirect('petugas/Fitrah');
	}

	public function print_kwitansi_fitrah($id)
	{
		$data['name'] 			= $this->session->userdata('nama');
		$data['lengkap'] 		= $this->session->userdata('lengkap');
		$data['ttd']			= $this->M_data->get_data('tbl_master_laporan');
		$data['data_peserta'] = $this->M_data->get_data_by_id('tbl_zakat_fitrah', array('id_zakat_fitrah' => $id));
		$muzaki = $this->M_data->get_data_by_id('tbl_zakat_fitrah', array('id_zakat_fitrah' => $id));
		foreach ($muzaki->result() as $row) {
			$nama = $row->nama_pemberi_zakat;
			$fitrah_beras = $row->beras;
			$fitrah_uang  = $row->uang;
		}
		$title_page = 'Kwitansi_' . $nama;
		$data['data_master'] = $this->M_data->get_data_by_id('tbl_master_kwitansi', array('id_kwitansi' => 1));
		$html = $this->load->view('conten_petugas/print_kwitansi_fitrah', $data, true);
		$this->pdf->pdf_create($html, $title_page, 'A4', 'portraid');
	}
}
