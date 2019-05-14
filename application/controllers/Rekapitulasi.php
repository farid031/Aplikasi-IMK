<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekapitulasi extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if($this->session->userdata('status') == FALSE || $this->session->userdata('level') != 1 ){
				redirect(base_url("login"));
		}
		$this->load->library('PHPExcel');
		ini_set('max_execution_time', 0);
	//	$this->load->library('Pdf');
	 }

	public function index()
	{
		ini_set('max_execution_time', 0);
		$data['conten'] = 'conten/rekapitulasi';
		$data['nama'] = $this->session->userdata('nama');
		$data['level'] = $this->session->userdata('level');
		$data['title'] = 'Rekapitulasi';
		$data['pasar'] = $this->M_data->get_data('epasar');
		$data['lokasi'] = $this->M_data->get_data('lokasi');

		/*$data['data_retribusi'] = $this->db->query("SELECT * FROM epasar WHERE id_bayar = '$id'");*/
		$this->load->view('template/conten',$data);
	}

	public function detail_rekap($id)
	{
		$data['conten'] = 'conten/detail_rekap';
		$data['nama'] = $this->session->userdata('nama');
		$data['level'] = $this->session->userdata('level');
		$data['title'] = 'Rekapitulasi (Nama Lokasi)';
		$data['rekap'] = $this->M_data->LokasiPajak($id);
		$data['jumlah'] = $this->M_data->total_rekap($id);
		$this->load->view('template/conten',$data);
	}

	public function detail_rekap_lokasi()
	{
		$data['conten'] = 'conten/detail_rekap_lokasi';
		$data['nama'] = $this->session->userdata('nama');
		$data['level'] = $this->session->userdata('level');
		$data['title'] = 'Detail Rekapitulasi';
		//$data['gtotal'] = $this->M_data->getTotal($date,$lok);
		$this->load->view('template/conten',$data);
	}


	public function view_update($id){
		$data['conten'] = 'conten/cetak_bayar';
		$data['data_retribusi'] = $this->db->query("SELECT * FROM epasar WHERE id_bayar = '$id'");
		$this->load->view('conten/cetak_bayar', $data);	
	}

	public function add_data(){
		$args = $this->input->post();
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');
		$pasar = 'Pasar Sepanjang';
		$pemungut = 'Dono';
		$setor = 2000;
		$data = array(
			'id_bayar'			=> $this->M_data->no_trans(),
			'nama_pasar'		=> $pasar,
			'jml_setor'			=> $setor,
			'petugas_pemungut'	=> $pemungut,
			'dibayar_pada'		=> $date
		);
		redirect('dashboard');
	}

	public function import_excel(){
		$config['upload_path'] = './assets/excel/';
		$config['allowed_types'] = 'xlsx|xls';

		$this->load->library('upload');
		$this->upload->initialize($config);  

		if (! $this->upload->do_upload()){
			$this->session->set_flashdata("gagal","<center><strong>Import Data GAGAL !!!</strong></center>");
			redirect('rekapitulasi');
				// print_r('gagal');
		}else{
			$data = array('upload_data' => $this->upload->data());
	        $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
	        $filename = $upload_data['file_name'];
	        $this->M_data->upload_excel($filename);
	        unlink('./assets/form'.$filename);
	        $this->session->set_flashdata("berhasil","<center><strong>Import Data BERHASIL!!!</strong></center>");
			redirect('rekapitulasi');
		}
	}
}
