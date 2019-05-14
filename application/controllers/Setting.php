<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		if($this->session->userdata('status') == FALSE || $this->session->userdata('level') != 1 ){
				redirect(base_url("login"));
		}
	//	$this->load->library('Pdf');
	 }

	public function index()
	{
		$data['conten'] = 'conten/user';
		$data['nama'] = $this->session->userdata('nama');
		$data['level'] = $this->session->userdata('level');
		$data['title'] = 'Setting User';
		$data['user'] = $this->M_data->get_data('user');
		$this->load->view('template/conten',$data);
	}

	public function tambah_user(){
		$this->form_validation->set_rules('pass', 'Password', 'required');
		$this->form_validation->set_rules('repass', 'Password', 'required|matches[pass]');

		if ($this->form_validation->run() == TRUE) {
			$table='user';
			$user = $this->input->post('user');
			$level = $this->input->post('level');
			$pass = $this->input->post('pass');
			$repass = $this->input->post('repass');
			$data= array(   'username' => $user,
							'password' => md5($pass),
							'nama' => $this->input->post('nama'),
							'level' => $level
							 );
			$this->M_data->simpan_data($table,$data);
			$this->session->set_flashdata('berhasil', 'Username berhasil dibuat.');
			redirect('Setting');
		} else {
			$this->form_validation->set_message('Setting', 'Pasword Tidak cocok');
			$this->session->set_flashdata('gagal', 'Password tidak cocok.');
			redirect('Setting');
		}

		
	}


	public function update_user($id){
		$table='user';
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');
		$repass = $this->input->post('repass');

		$data= array('username' => $user,
					'password' 	   => md5(md5($pass)),
					'nama' 		   => $this->input->post('nama')
					 );
		$this->M_data->update_data($table,$data,array('id_user' => $id));
		redirect('Setting');
	}

	public function lokasi()
	{
		$data['conten'] = 'conten/lokasi';
		$data['nama'] = $this->session->userdata('nama');
		$data['level'] = $this->session->userdata('level');
		$data['title'] = 'Setting Lokasi';
		$data['lokasi'] = $this->M_data->get_data('lokasi');
		$this->load->view('template/conten',$data);
	}

	public function tambah_lokasi(){
		$table='lokasi';
		$data= array('nama_lokasi' => $this->input->post('lokasi'),
			         'harga'	   => $this->input->post('harga')
					);
		$this->M_data->simpan_data($table,$data);
		redirect('Setting/lokasi');
	}

	public function update_lokasi($id){
		$table='lokasi';
		$data= array('nama_lokasi' 	=> $this->input->post('lokasi'),
					 'harga'	    => $this->input->post('harga')
					);
		$this->M_data->update_data($table,$data,array('id_lokasi' => $id));
		redirect('Setting/lokasi');
	}

	public function hapus_lokasi($id){
		$table = 'lokasi';
		$this->M_data->hapus_data($table,array('id_lokasi' => $id));
		redirect('Setting/lokasi');
	}

	public function hapus_user($id){
		$table = 'user';
		$this->M_data->hapus_data($table,array('id_user' => $id));
		redirect('Setting');
	}

	public function lokasi_sekarang(){
		$data['conten'] = 'conten/lokasi_sekarang';
		$data['nama'] = $this->session->userdata('nama');
		$data['level'] = $this->session->userdata('level');
		$data['title'] = 'Setting Lokasi Sekarang';
		$data['lokasi'] = $this->M_data->get_data('lokasi');
		$data['lokasi_sekarang'] = $this->M_data->get_data('setting_lokasi');
		$this->load->view('template/conten',$data);
	}

	public function update_lokasi_sekarang(){
		$table= 'setting_lokasi';
		$user = $this->input->post('lokasi_sekarang');

		$data= array('nama_lokasi' => $this->input->post('lokasi_sekarang'));
		$this->M_data->update_data($table,$data,array('id_lokasi' => 'sekarang'));
		redirect('Setting/lokasi_sekarang');

		
	}

}
