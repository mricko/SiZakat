<?php 

/**
 * 
 */
class M_Penerima extends CI_Model
{
	
	public function getAllPenerima()
	{
		return $this->db->query("
								SELECT 
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
	}

	public function getPenerima($limit, $start)
	{
		// return $this->db->get('tbl_penerima_zakat', $limit, $start);
		return $this->db->query('
								SELECT
								a.id_penerima,
								a.nama_penerima,
								a.ket_penerima,
								a.koordinator,
								b.nama_ket,
								c.nama_koor
								FROM
								tbl_penerima_zakat AS a
								LEFT JOIN tbl_master_penerima AS b ON a.ket_penerima = b.id_ket_penerima
								LEFT JOIN tbl_koordinator AS c ON a.koordinator = c.id_koor');
	}

	public function countAllPenerima()
	{
		return $this->db->get('tbl_penerima_zakat')->num_rows();
	}
}