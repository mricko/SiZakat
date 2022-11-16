<?php
class M_data extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }
  function get_data($table)
  {
    return $this->db->get($table);
  }
  function get_data_by_id($table, $where)
  {
    return $this->db->get_where($table, $where);
  }
  function simpan_data($table, $data)
  {
    $this->db->insert($table, $data);
  }
  function update_data($table, $data, $where)
  {
    $this->db->update($table, $data, $where);
  }
  function hapus_data($table, $where)
  {
    $this->db->delete($table, $where);
  }
  function cek_login($table, $where)
  {
    return $this->db->get_where($table, $where);
  }

  public function upload_data_penerima($filename)
  {
    ini_set('memory_limit', '-1');
    $inputFileName = './assets/doc/' . $filename;
    try {
      $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
    } catch (Exception $e) {
      die('Error loading file :' . $e->getMessage());
    }

    $worksheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
    $numRows = count($worksheet);

    for ($i = 2; $i < ($numRows + 1); $i++) {

      $ins = array(
        "nama_penerima"        => $worksheet[$i]["B"],
        "ket_penerima"         => $worksheet[$i]["C"],
        "koordinator"          => $worksheet[$i]["D"]

      );
      $this->db->insert('tbl_penerima_zakat', $ins);
    }
  }

  public function jumlah_koor()
  {
    $query = $this->db->query("SELECT * FROM tbl_koordinator");
    return $query->num_rows();
  }

  public function jumlah_user()
  {
    $query = $this->db->query("SELECT * FROM tbl_user");
    return $query->num_rows();
  }

  public function jumlah_fitrah()
  {
    $query = $this->db->query("SELECT * FROM tbl_zakat_fitrah");
    return $query->num_rows();
  }

  public function jumlah_uang_fitrah()
  {
    $data = $this->db->query("SELECT SUM(uang) AS total_uang FROM tbl_zakat_fitrah");
    return $data;
  }


  public function jumlah_maal()
  {
    $query = $this->db->query("SELECT * FROM tbl_zakat_maal");
    return $query->num_rows();
  }

  public function jumlah_beras_fitrah()
  {
    $data = $this->db->query("SELECT SUM(beras) AS total_beras FROM tbl_zakat_fitrah");
    return $data;
  }

  public function jumlah_zakat_maal()
  {
    $data = $this->db->query("SELECT SUM(nominal_zakat) AS total_maal FROM tbl_zakat_maal");
    return $data;
  }

   public function qurban()
  {
    $data = $this->db->query("SELECT * FROM tbl_qurban ORDER BY id_qurban DESC");
    return $data;
  }

  public function total_nominal_donatur()
  {
    return $this->db->query("SELECT SUM(nominal) as total FROM tbl_donatur");
  }

  public function donatur()
  {
    return $this->db->query("SELECT * FROM tbl_donatur")->num_rows();
  }

  function jumlah_laporan_zakat_fitrah()
  {
    $data = $this->db->query("SELECT SUM(beras) AS total_beras, SUM(uang) AS total_uang FROM tbl_zakat_fitrah");
    return $data;
  }

  public function total_maal()
  {
    $data = $this->db->query("SELECT SUM(nominal_zakat) AS total FROM tbl_zakat_maal WHERE kategori_zakat = 'maal'");
    return $data;
  }

  public function total_ps()
  {
    $data = $this->db->query("SELECT SUM(nominal_zakat) AS total FROM tbl_zakat_maal WHERE kategori_zakat = 'ps'");
    return $data;
  }

  public function total_is()
  {
    $data = $this->db->query("SELECT SUM(nominal_zakat) AS total FROM tbl_zakat_maal WHERE kategori_zakat = 'is'");
    return $data;
  }

  public function total_fidyah()
  {
    $data = $this->db->query("SELECT SUM(nominal_zakat) AS total FROM tbl_zakat_maal WHERE kategori_zakat = 'fidyah'");
    return $data;
  }

  public function zakat_maal()
  {
    $data = $this->db->query("SELECT a.id_zakat_maal, a.nama_pemberi_zakat, a.kategori_zakat, a.nominal_zakat, a.alamat, a.tanggal, a.petugas1, a.petugas2, a.keterangan, b.id_koor, b.nama_koor, b.alamat_koor FROM tbl_zakat_maal AS a LEFT JOIN tbl_koordinator AS b ON a.petugas2 = b.id_koor order by id_zakat_maal DESC");
    return $data;
  }

  public function lap_zakat_maal()
  {
    $data = $this->db->query("SELECT a.id_zakat_maal, a.nama_pemberi_zakat, a.kategori_zakat, a.nominal_zakat, a.alamat, a.tanggal, a.petugas1, a.petugas2, b.id_koor, b.nama_koor, b.alamat_koor FROM tbl_zakat_maal AS a LEFT JOIN tbl_koordinator AS b ON a.petugas2 = b.id_koor");
    return $data;
  }

  public function zakat_fitrah()
  {
    $data = $this->db->query("SELECT * FROM tbl_zakat_fitrah ORDER BY id_zakat_fitrah DESC");
    return $data;
  }

  public function penerima_zakat_koor($id)
  {
    $data = $this->db->query("SELECT 
                                a.id_penerima, 
                                a.nama_penerima, 
                                a.ket_penerima, 
                                a.koordinator, 
                                b.id_ket_penerima, 
                                b.nama_ket, 
                                c.id_koor, 
                                c.nama_koor, 
                                c.alamat_koor 
                              FROM 
                                tbl_penerima_zakat AS a 
                                LEFT JOIN tbl_master_penerima AS b ON a.ket_penerima = b.id_ket_penerima 
                                LEFT JOIN tbl_koordinator AS c ON a.koordinator = c.id_koor
                                WHERE c.id_koor = $id");
    return $data;
  }

  public function penerima_zakat_rt($id)
  {
    $data = $this->db->query("SELECT 
                                a.id_penerima, 
                                a.nama_penerima, 
                                a.ket_penerima, 
                                a.koordinator, 
                                b.id_ket_penerima, 
                                b.nama_ket, 
                                c.id_koor, 
                                c.nama_koor, 
                                c.alamat_koor 
                              FROM 
                                tbl_penerima_zakat AS a 
                                LEFT JOIN tbl_master_penerima AS b ON a.ket_penerima = b.id_ket_penerima 
                                LEFT JOIN tbl_koordinator AS c ON a.koordinator = c.id_koor
                                WHERE c.id_koor = $id");
    return $data->num_rows();
  }

  public function penerima_rt01()
  {
    $data = $this->db->query("SELECT 
                                a.id_penerima, 
                                a.nama_penerima, 
                                a.ket_penerima, 
                                a.koordinator, 
                                b.id_ket_penerima, 
                                b.nama_ket, 
                                c.id_koor, 
                                c.nama_koor, 
                                c.alamat_koor 
                              FROM 
                                tbl_penerima_zakat AS a 
                                LEFT JOIN tbl_master_penerima AS b ON a.ket_penerima = b.id_ket_penerima 
                                LEFT JOIN tbl_koordinator AS c ON a.koordinator = c.id_koor
                                WHERE c.alamat_koor = 'RT01'");
    return $data->num_rows();
  }

  public function penerima_rt02()
  {
    $data = $this->db->query("SELECT 
                                a.id_penerima, 
                                a.nama_penerima, 
                                a.ket_penerima, 
                                a.koordinator, 
                                b.id_ket_penerima, 
                                b.nama_ket, 
                                c.id_koor, 
                                c.nama_koor, 
                                c.alamat_koor 
                              FROM 
                                tbl_penerima_zakat AS a 
                                LEFT JOIN tbl_master_penerima AS b ON a.ket_penerima = b.id_ket_penerima 
                                LEFT JOIN tbl_koordinator AS c ON a.koordinator = c.id_koor
                                WHERE c.alamat_koor = 'RT02'");
    return $data->num_rows();
  }

  public function penerima_rt03()
  {
    $data = $this->db->query("SELECT 
                                a.id_penerima, 
                                a.nama_penerima, 
                                a.ket_penerima, 
                                a.koordinator, 
                                b.id_ket_penerima, 
                                b.nama_ket, 
                                c.id_koor, 
                                c.nama_koor, 
                                c.alamat_koor 
                              FROM 
                                tbl_penerima_zakat AS a 
                                LEFT JOIN tbl_master_penerima AS b ON a.ket_penerima = b.id_ket_penerima 
                                LEFT JOIN tbl_koordinator AS c ON a.koordinator = c.id_koor
                                WHERE c.alamat_koor = 'RT03'");
    return $data->num_rows();
  }

  public function penerima_rt18()
  {
    $data = $this->db->query("SELECT 
                                a.id_penerima, 
                                a.nama_penerima, 
                                a.ket_penerima, 
                                a.koordinator, 
                                b.id_ket_penerima, 
                                b.nama_ket, 
                                c.id_koor, 
                                c.nama_koor, 
                                c.alamat_koor 
                              FROM 
                                tbl_penerima_zakat AS a 
                                LEFT JOIN tbl_master_penerima AS b ON a.ket_penerima = b.id_ket_penerima 
                                LEFT JOIN tbl_koordinator AS c ON a.koordinator = c.id_koor
                                WHERE c.alamat_koor = 'RT18'");
    return $data->num_rows();
  }

  public function penerima_rt19()
  {
    $data = $this->db->query("SELECT 
                                a.id_penerima, 
                                a.nama_penerima, 
                                a.ket_penerima, 
                                a.koordinator, 
                                b.id_ket_penerima, 
                                b.nama_ket, 
                                c.id_koor, 
                                c.nama_koor, 
                                c.alamat_koor 
                              FROM 
                                tbl_penerima_zakat AS a 
                                LEFT JOIN tbl_master_penerima AS b ON a.ket_penerima = b.id_ket_penerima 
                                LEFT JOIN tbl_koordinator AS c ON a.koordinator = c.id_koor
                                WHERE c.alamat_koor = 'RT19'");
    return $data->num_rows();
  }

  public function penerima_rt20()
  {
    $data = $this->db->query("SELECT 
                                a.id_penerima, 
                                a.nama_penerima, 
                                a.ket_penerima, 
                                a.koordinator, 
                                b.id_ket_penerima, 
                                b.nama_ket, 
                                c.id_koor, 
                                c.nama_koor, 
                                c.alamat_koor 
                              FROM 
                                tbl_penerima_zakat AS a 
                                LEFT JOIN tbl_master_penerima AS b ON a.ket_penerima = b.id_ket_penerima 
                                LEFT JOIN tbl_koordinator AS c ON a.koordinator = c.id_koor
                                WHERE c.alamat_koor = 'RT20'");
    return $data->num_rows();
  }

  public function lap_penerima_zakat($rt)
  {
    $data = $this->db->query("SELECT 
                                a.id_penerima, 
                                a.nama_penerima, 
                                a.ket_penerima, 
                                a.koordinator, 
                                b.id_ket_penerima, 
                                b.nama_ket, 
                                c.id_koor, 
                                c.nama_koor, 
                                c.alamat_koor 
                              FROM 
                                tbl_penerima_zakat AS a 
                                LEFT JOIN tbl_master_penerima AS b ON a.ket_penerima = b.id_ket_penerima 
                                LEFT JOIN tbl_koordinator AS c ON a.koordinator = c.id_koor
                                WHERE c.alamat_koor = '$rt'");
    return $data;
  }

  public function berat($rt)
  {
    $data = $this->db->query("SELECT 
                                a.id_penerima, 
                                a.nama_penerima, 
                                a.ket_penerima, 
                                a.koordinator, 
                                b.id_ket_penerima, 
                                b.nama_ket, 
                                c.id_koor, 
                                c.nama_koor, 
                                c.alamat_koor 
                              FROM 
                                tbl_penerima_zakat AS a 
                                LEFT JOIN tbl_master_penerima AS b ON a.ket_penerima = b.id_ket_penerima 
                                LEFT JOIN tbl_koordinator AS c ON a.koordinator = c.id_koor
                                WHERE c.alamat_koor = '$rt' and a.ket_penerima = 1");
    return $data->num_rows();
  }

  public function ringan($rt)
  {
    $data = $this->db->query("SELECT 
                                a.id_penerima, 
                                a.nama_penerima, 
                                a.ket_penerima, 
                                a.koordinator, 
                                b.id_ket_penerima, 
                                b.nama_ket, 
                                c.id_koor, 
                                c.nama_koor, 
                                c.alamat_koor 
                              FROM 
                                tbl_penerima_zakat AS a 
                                LEFT JOIN tbl_master_penerima AS b ON a.ket_penerima = b.id_ket_penerima 
                                LEFT JOIN tbl_koordinator AS c ON a.koordinator = c.id_koor
                                WHERE c.alamat_koor = '$rt' and a.ket_penerima = 2");
    return $data->num_rows();
  }

  public function sabilillah($rt)
  {
    $data = $this->db->query("SELECT 
                                a.id_penerima, 
                                a.nama_penerima, 
                                a.ket_penerima, 
                                a.koordinator, 
                                b.id_ket_penerima, 
                                b.nama_ket, 
                                c.id_koor, 
                                c.nama_koor, 
                                c.alamat_koor 
                              FROM 
                                tbl_penerima_zakat AS a 
                                LEFT JOIN tbl_master_penerima AS b ON a.ket_penerima = b.id_ket_penerima 
                                LEFT JOIN tbl_koordinator AS c ON a.koordinator = c.id_koor
                                WHERE c.alamat_koor = '$rt' and a.ket_penerima = 3");
    return $data->num_rows();
  }

  public function panitia()
  {
    return $this->db->query("
        SELECT
        a.id_panitia,
        a.nama_panitia,
        a.jabatan_panitia,
        a.alamat,
        a.kontak,
        a.foto_panitia,
        b.id_alamat,
        b.alamat AS nama_alamat,
        c.id_jabatan,
        c.nama_jabatan 
      FROM
        tbl_panitia AS a
        LEFT JOIN tbl_master_alamat AS b ON a.alamat = b.id_alamat
        LEFT JOIN tbl_jabatan AS c ON a.jabatan_panitia = c.id_jabatan
        ");
  }

  public function penerima_zakat()
  {
    $data = $this->db->query("SELECT 
                                a.id_penerima, 
                                a.nama_penerima, 
                                a.ket_penerima, 
                                a.koordinator, 
                                b.id_ket_penerima, 
                                b.nama_ket, 
                                c.id_koor, 
                                c.nama_koor, 
                                c.alamat_koor 
                              FROM 
                                tbl_penerima_zakat AS a 
                                LEFT JOIN tbl_master_penerima AS b ON a.ket_penerima = b.id_ket_penerima 
                                LEFT JOIN tbl_koordinator AS c ON a.koordinator = c.id_koor");
    return $data;
  }

  public function pagination_penerima()
  {
    // $number,$offset
    $this->db->select('*');
    $this->db->from('tbl_penerima_zakat');
    $this->db->join('tbl_master_penerima', 'tbl_penerima_zakat.ket_penerima = tbl_master_penerima.id_ket_penerima', 'LEFT');
    $this->db->join('tbl_koordinator', 'tbl_penerima_zakat.koordinator = tbl_koordinator.id_koor', 'LEFT');
    $query = $this->db->get();
    return $query;
    // $this->db->limit($number,$offset);
    // $this->db->like('judul_buku', 'both');
    // $this->db->from('tbl_buku');
    // $query = $this->db->get();
    // return $query->result(); 
  }

  public function hasil_kriteria()
  {
    return $this->db->query("SELECT * FROM tbl_spk_kriteria ORDER BY id_kriteria DESC LIMIT 1 ");
  }

  public function hasil_ghorim()
  {
    return $this->db->query("SELECT * FROM tbl_alt_ghorim ORDER BY id_alt_ghorim DESC LIMIT 1 ");
  }

  public function hasil_budak()
  {
    return $this->db->query("SELECT * FROM tbl_alt_budak ORDER BY id_alt_budak DESC LIMIT 1 ");
  }

  public function hasil_miskin()
  {
    return $this->db->query("SELECT * FROM tbl_alt_miskin ORDER BY id_alt_miskin DESC LIMIT 1 ");
  }

  public function hasil_ibnu_sabil()
  {
    return $this->db->query("SELECT * FROM tbl_alt_ibnu_sabil ORDER BY id_alt_ibnu_sabil DESC LIMIT 1 ");
  }

  public function hasil_mualaf()
  {
    return $this->db->query("SELECT * FROM tbl_alt_mualaf ORDER BY id_alt_mualaf DESC LIMIT 1 ");
  }

  public function hasil_rank()
  {
    return $this->db->query("SELECT * FROM tbl_rank ORDER BY id_rank DESC LIMIT 1 ");
  }
}
