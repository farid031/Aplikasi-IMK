<?php
class M_data extends CI_Model {
	function __construct(){
        parent :: __construct();
    }
    function get_data($table){
  		return $this->db->get($table);
  	}
		function get_data_by_id($table,$where) {
          return $this->db->get_where($table,$where);
  	}
		function simpan_data($table,$data){
    	$this->db->insert($table,$data);
    }
		function update_data($table,$data,$where){
    	$this->db->update($table,$data,$where);
    }
    function hapus_data($table,$where){
    	$this->db->delete($table,$where);
    }

    function no_trans(){
        $this->db->select('RIGHT(epasar.id_bayar,7) as kode', FALSE);
        $this->db->order_by('id_bayar','DESC');
        $this->db->limit(1);

        $query=$this->db->get('epasar');

        if ($query->num_rows()!=0) {
           $data=$query->row();
           $kode=intval($data->kode)+1;
        } else {
            $kode=1;
        }
        $date = date('ymd');
        $kode_max = str_pad($kode,7,"0",STR_PAD_LEFT);
        $kode_jadi = $date.$kode_max;
        return $kode_jadi;
   }

  function LokasiPajak($id)
  {
    $data = $this->db->query("SELECT nama_lokasi FROM lokasi WHERE id_lokasi='$id'");
        return $data;
  }

  function join_lokasi(){
      // $this->db->select('*');
      // $this->db->from('epasar');
      // $this->db->join('lokasi', 'epasar.nama_lokasi = lokasi.id_lokasi');
      // $query = $this->db->get();
      // return $query->result();

      $data = $this->db->query("SELECT nama_lokasi FROM lokasi");
      return $data;
    }

    function jumlah_setor($lokasi){
      $data = $this->db->query("SELECT SUM(jml_setor) AS jumlah FROM epasar WHERE nama_lokasi='$lokasi';");
      return $data;
    }

    function total_rekap($lokasi){
      $data = $this->db->query("SELECT SUM(jml_setor) AS jumlah FROM epasar WHERE nama_lokasi='$lokasi';");
      return $data;
    }
    
    public function getTotal($date,$lok)
    {
      $data = $this->db->query("SELECT SUM(jml_setor) AS jumlah FROM epasar WHERE dibayar_pada LIKE '%$date%' AND nama_lokasi='$lok'");
      return $data;
    }

    public function upload_excel($filename){
      ini_set('memory_limit', '-1');
      $inputFileName = './assets/excel/'.$filename;
      try {
        $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
      } catch(Exception $e) {
        die('Error loading file :' . $e->getMessage());
      }

      $worksheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
      $numRows   = count($worksheet);

      for ($i=2; $i < ($numRows+1) ; $i++) {

        $ins = array(
            "id_bayar"     => $worksheet[$i]["B"],
            "nama_lokasi"  => $worksheet[$i]["C"],
            "jml_setor"    => $worksheet[$i]["D"],
            "dibayar_pada" => $worksheet[$i]["E"]
            );
        $db = $this->load->database('default',true);
        $db->insert('epasar',$ins);
      }
    }
}