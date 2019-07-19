<?php 
	function Theunit($kd)
	{
		$CI =& get_instance();

		$uk = $CI->db->query("SELECT unit from tbl_unit where kd_unit = '".$kd."'")->row()->unit;
		return $uk;
	}
	function Theposisi($kd)
	{
		$CI =& get_instance();

		$uk = $CI->db->query("SELECT posisi from tbl_posisi where id_posisi = '".$kd."'")->row()->posisi;
		return $uk;
	}
	function Thekategori($kd)
	{
		$CI =& get_instance();

		$uk = $CI->db->query("SELECT kategori from tbl_kategori where id_kategori = '".$kd."'")->row()->kategori;
		return $uk;
	}
	function Thederajad($kd)
	{
		$CI =& get_instance();

		$uk = $CI->db->query("SELECT derajad from tbl_derajad where id_drj = '".$kd."'")->row()->derajad;
		return $uk;
	}
	function Theclass($kd)
	{
		$CI =& get_instance();

		$uk = $CI->db->query("SELECT klasifikasi from tbl_klasifikasi where id_class = '".$kd."'")->row()->klasifikasi;
		return $uk;
	}
	function Theapprove($kd)
	{
		$CI =& get_instance();

		$uk = $CI->db->query("SELECT persetujuan from tbl_persetujuan where id_approval = '".$kd."'")->row()->persetujuan;
		return $uk;
	}
	function datetimeIdn($date)
	{
		$BulanIndo = array("","Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
	 	$split = explode(' ', $date);
	 	$spli = explode('-', $split[0]);
		return  $split[1] . ' / ' . $spli[2] . '-' . $spli[1]. '-' . $spli[0];
	}
	function dateIdn($date)
	{
		$BulanIndo = array("","Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
	 	$split = explode(' ', $date);
	 	$spli = explode('-', $split[0]);
		return   $spli[2] . ' ' . $BulanIndo[ (int)$split[1] ]. ' ' . $spli[0];
	}