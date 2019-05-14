<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel2json extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if($this->session->userdata('status') == FALSE || $this->session->userdata('level') != 1 ){
				redirect(base_url("login"));
			}
	//	$this->load->library('Pdf');
	 }

	public function index()
	{
		$data['conten'] = 'conten/excel2json';
		$data['title'] = 'Excel to JSON';
		$data['nama'] = $this->session->userdata('nama');
		$data['level'] = $this->session->userdata('level');
		/*$data['data_retribusi'] = $this->db->query("SELECT * FROM epasar WHERE id_bayar = '$id'");*/
		$this->load->view('template/conten',$data);
	}


	public function view_update($id){
		$data['conten'] = 'conten/cetak_bayar';
		$data['data_retribusi'] = $this->db->query("SELECT * FROM epasar WHERE id_bayar = '$id'");
		$this->load->view('conten/cetak_bayar', $data);	
	}

	/*public function tambah_data(){
		$table='epasar';
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');
		$setor = 2000;
		$data = array(  'id_bayar'	  => $this->input->post('id_trans'),
						'nama_lokasi' => $this->input->post('lokasi'),
						'jml_setor' => $setor,
						'dibayar_pada' => $date
						 );
		$this->M_data->simpan_data($table,$data);
		redirect('dashboard');
	}*/

	public function add_data(){
		$args = $this->input->post();
		date_default_timezone_set('Asia/Jakarta');
		$date  = $this->input->post('tgl');
		$pasar = $this->input->post('lokasi');
		$setor = $this->input->post('nominal');
		$id_bayar = $this->input->post('id_bayar');
		$data  = array(
			'id_bayar'			=> $id_bayar,
			'nama_lokasi'		=> $pasar,
			'jml_setor'			=> $setor,
			'dibayar_pada'		=> $date
		);
		/*$id = $data['id_bayar'];
		$lihat['data_retribusi'] = $this->db->query("SELECT * FROM epasar WHERE id_bayar = '$id'");*/
		$this->db->insert('epasar', $data);
		//redirect('dashboard/view_update/'.$id);
		redirect('dashboard');
	}
}
