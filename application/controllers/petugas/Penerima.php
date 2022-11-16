<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penerima extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if($this->session->userdata('status') == FALSE || $this->session->userdata('level') != 4 ){
				redirect(base_url("login"));
			}
	//	$this->load->library('Pdf');
			$this->load->library('PHPExcel');
	 }

	public function index()
	{

		$data = [
			'name'		=> $this->session->userdata('nama'),
			'lengkap'	=> $this->session->userdata('lengkap'),
			'conten'	=> 'conten_petugas/penerima_zakat',
			'title'		=> 'Data Penerima Zakat',
			'koor'		=> $this->M_data->get_data('tbl_koordinator'),
			'master_penerima' => $this->M_data->get_data('tbl_master_penerima'),
			'penerima'	=> $this->M_data->penerima_zakat(),
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

	public function tambah_penerima()
	{
		$table='tbl_penerima_zakat';
		$data= array(	
						'nama_penerima'  => $this->input->post('nama_penerima'),
						'ket_penerima' 	 => $this->input->post('ket_penerima'),
						'koordinator' 	 => $this->input->post('koor')
						 );
		$this->M_data->simpan_data($table,$data);
		$this->session->set_flashdata('penerima', 'Ditambah');
		redirect('petugas/penerima');
	}

	public function update_data_penerima($id)
	{
		$table='tbl_penerima_zakat';
		$data= array(	'nama_penerima'  => $this->input->post('nama_penerima'),
						'ket_penerima' 	 => $this->input->post('ket_penerima'),
						'koordinator' 	 => $this->input->post('koor')
						 );
		$this->M_data->update_data($table,$data,array('id_penerima' => $id));
		$this->session->set_flashdata('penerima', 'Diubah');
		redirect('petugas/penerima');
	}

	public function hapus_data_penerima($id)
	{
		$table = 'tbl_penerima_zakat';		
		$where = array('id_penerima' => $id);
		$this->M_data->hapus_data($table,$where);
		$this->session->set_flashdata('penerima', 'Dihapus');
		redirect('petugas/penerima');
	}

	public function import(){
		$config['upload_path'] = './assets/doc/';
		$config['allowed_types'] = 'xlsx|xls';

		$this->load->library('upload', $config);

		if (! $this->upload->do_upload()){
		$this->session->set_flashdata("gagal","GAGAL");
		redirect('petugas/penerima');
		}else{
		$data = array('upload_data' => $this->upload->data());
        $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
        $filename = $upload_data['file_name'];
        $this->M_data->upload_data_penerima($filename);
        unlink('./assets/doc/'.$filename);
     	$this->session->set_flashdata("berhasil","BERHASIL");
		redirect('petugas/penerima');}
	}
}