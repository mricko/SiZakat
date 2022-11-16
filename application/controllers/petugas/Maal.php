<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Maal extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') == FALSE || $this->session->userdata('level') != 4) {
			redirect(base_url("login"));
		}
		$this->load->library('Pdf');
	}

	public function index()
	{

		$data = [
			'name'		=> $this->session->userdata('nama'),
			'lengkap'	=> $this->session->userdata('lengkap'),
			'conten'	=> 'conten_petugas/zakat_maal',
			'title'		=> 'Zakat Mall, Infaq dan Shodaqoh',
			'maal'		=> $this->M_data->zakat_maal(),
			'petugas'	=> $this->M_data->get_data('tbl_koordinator'),
			'header_css' => array(
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

		$this->load->view('template_petugas/conten', $data);
	}

	public function tambah_data_zakat_maal()
	{
		$date = date("Y-m-d");
		$table = 'tbl_zakat_maal';
		$data = array(
			'nama_pemberi_zakat' 	=> $this->input->post('pemberi_zakat'),
			'kategori_zakat' 	=> $this->input->post('kategori'),
			'nominal_zakat'		=> $this->input->post('nominal'),
			'alamat' 			=> $this->input->post('alamat'),
			'petugas1'			=> $this->input->post('petugas1'),
			'petugas2'			=> $this->input->post('petugas2'),
			'tanggal'			=> $date,
			'keterangan'		=> $this->input->post('ket')
		);
		$this->M_data->simpan_data($table, $data);
		$this->session->set_flashdata('maal', 'Ditambah');
		redirect('petugas/Maal');
	}

	public function update_data_maal($id)
	{
		$date = date("Y-m-d");
		$table = 'tbl_zakat_maal';
		$data = array(
			'nama_pemberi_zakat' => $this->input->post('pemberi_zakat'),
			'kategori_zakat' 	 => $this->input->post('kategori'),
			'nominal_zakat' 	 => $this->input->post('nominal'),
			'alamat' 			 => $this->input->post('alamat'),
			'petugas1' 			 => $this->input->post('petugas1'),
			'petugas2' 			 => $this->input->post('petugas2'),
			'tanggal' 			 => $date,
			'keterangan'		=> $this->input->post('ket')
		);
		$this->M_data->update_data($table, $data, array('id_zakat_maal' => $id));
		$this->session->set_flashdata('maal', 'Diubah');
		redirect('petugas/Maal');
	}

	public function hapus_data($id)
	{
		$table = 'tbl_zakat_maal';
		$where = array('id_zakat_maal' => $id);
		$this->M_data->hapus_data($table, $where);
		$this->session->set_flashdata('maal', 'Dihapus');
		redirect('petugas/Maal');
	}

	public function print_kwitansi($id)
	{
		$data['name'] 			= $this->session->userdata('nama');
		$data['lengkap'] 		= $this->session->userdata('lengkap');
		$data['ttd']			= $this->M_data->get_data('tbl_master_laporan');
		$data['data_peserta'] = $this->M_data->get_data_by_id('tbl_zakat_maal', array('id_zakat_maal' => $id));
		$peserta = $this->M_data->get_data_by_id('tbl_zakat_maal', array('id_zakat_maal' => $id));
		foreach ($peserta->result() as $row) {
			$nama = $row->nama_pemberi_zakat;
			$nominal = $row->nominal_zakat;
		}
		$title_page = 'Kwitansi_' . $nama;
		$data['data_master'] = $this->M_data->get_data_by_id('tbl_master_kwitansi', array('id_kwitansi' => 1));
		$html = $this->load->view('conten_petugas/print_kwitansi', $data, true);
		$this->pdf->pdf_create($html, $title_page, 'A4', 'portraid');
	}
}
