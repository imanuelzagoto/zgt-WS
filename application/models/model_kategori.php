<?php

class Model_kategori extends CI_Model{
	public function data_semua_promo()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'semua_promo'));
	}

	public function data_sayuran()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'sayuran'));
	}

	public function data_makanan()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'makanan'));
	}

	public function data_minuman()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'minuman'));
	}

	public function data_bahan()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'bahan'));
	}

	public function data_telur()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'telur'));
	}

	public function data_daging()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'daging'));
	}

	public function data_sosis()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'sosis'));
	}

	public function data_semua_kategori()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'semua_kategori'));
	}
}