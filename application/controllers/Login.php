<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
        parent :: __construct();
    /*    if ($this->session->userdata('status')==true || $this->session->userdata('level')==1) {
        	redirect('login');*/
        /*$this->load->library(array('ckeditor'));*/
     //   $this->load->library('PHPExcel');
    }

	public function index()
	{
		$this->load->view('login');
	}

  public function login_form(){
    $username = $this->input->post('username');
    $password = md5($this->input->post('password'));
    // petugas
    $where1 = array(
      'username' => $username,
      'password' => $password,
      'level' => 1
      );
    $cek1 = $this->M_data->get_data_by_id("user",$where1);
    //operator
    $where2 = array(
      'username' => $username,
      'password' => $password,
      'level' => 2
      );
    $cek2 = $this->M_data->get_data_by_id("user",$where2);

    if($cek1->num_rows() > 0){
      foreach ($cek1->result() as $row){
        $id   = $row->id_user;
        $nama = $row->nama;
        $level = $row->level;
      }
      $data_session = array(

        'status' => true,
        'level'  => $level,
        'id'     => $id,
        'nama'   => $nama
      );

      $this->session->set_userdata($data_session);
      redirect(base_url("dashboard"));
    }elseif ($cek2->num_rows() > 0){
      foreach ($cek2->result() as $row){
        $id = $row->id_user;
        $nama = $row->nama;
        $level = $row->level;
      }
      $data_session = array(
        'status'  => true,
        'level'   => $level,
        'id'      => $id,
        'nama'    => $nama
      );

      $this->session->set_userdata($data_session);
      redirect(base_url("dashboard"));
    }else{
      redirect(base_url('dashboard'));
    }
  }

    function keluar()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
