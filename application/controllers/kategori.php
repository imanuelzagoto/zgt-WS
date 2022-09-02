<?php

class Kategori extends CI_Controller{
	public function semua_promo()
	{
		$data['semua_promo'] = $this->model_kategori->data_semua_promo()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('semua_promo',$data);
		$this->load->view('templates/footer');
	}

	public function sayuran()
	{
		$data['sayuran'] = $this->model_kategori->data_sayuran()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('sayuran',$data);
		$this->load->view('templates/footer');
	}

    public function makanan()
	{
		$data['makanan'] = $this->model_kategori->data_makanan()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('makanan',$data);
		$this->load->view('templates/footer');
	}

	public function minuman()
	{
		$data['minuman'] = $this->model_kategori->data_minuman()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('minuman',$data);
		$this->load->view('templates/footer');
	} 

	public function bahan()
	{
		$data['bahan'] = $this->model_kategori->data_bahan()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('bahan',$data);
		$this->load->view('templates/footer');
	}

	public function olahan_telur()
	{
		$data['telur'] = $this->model_kategori->data_telur()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('telur', $data);
		$this->load->view('templates/footer');
	}  

	public function daging()
	{
		$data['daging'] = $this->model_kategori->data_daging()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('daging',$data);
		$this->load->view('templates/footer');
	}  
  
    public function sosis()
	{
		$data['sosis'] = $this->model_kategori->data_sosis()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('sosis',$data);
		$this->load->view('templates/footer');
	}  

    public function semua_kategori()
	{
		$data['semua_kategori'] = $this->model_kategori->data_semua_kategori()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('semua_kategori',$data);
		$this->load->view('templates/footer');
	}  
}