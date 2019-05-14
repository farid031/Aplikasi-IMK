
<?php 
foreach ($lokasi_sekarang->result() as $row) {
    $lokasi_sekarang = $row->nama_lokasi;
}

$query = $this->db->query("SELECT * FROM lokasi WHERE nama_lokasi = '$lokasi_sekarang'");
foreach ($query->result() as $row) {
    $jml = number_format($row->harga,0,",",".");
    if ($jml == 0) {
        $harga = number_format($row->harga,0,",",".");
    } else {
        $harga = number_format($row->harga,0,",",".").".000";
    }
}
date_default_timezone_set('Asia/Jakarta');

$where = $this->db->query("SELECT MAX(id_bayar) AS id_bayar FROM epasar");
foreach ($where->result() as $row) {
    $id       = $row->id_bayar;
}

$query = $this->db->query("SELECT * FROM epasar WHERE id_bayar = '$id'");
foreach ($query->result() as $row) {
    $id_bayar       = $row->id_bayar;
    $lokasi     = $row->nama_lokasi;
    $setor          = $row->jml_setor;
    $tgl          = $row->dibayar_pada;
}
?>
<script>
    function printContent(el){
        var restorepage = document.body.innerHTML;
        var printcontent = document.getElementById(el).innerHTML;
        document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = restorepage;
    }
</script>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Cetak Pembayaran</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div id="print" class="print" style="width: 162px; " border="1px">
        <form method="post" action="<?php echo base_url('dashboard/add_data'); ?>">
            <table width="100%">
                <tr>
                    <td style="text-align: center; font-weight: bold;"><img src="<?php echo base_url('assets/images/jtp.png'); ?>" width="48px" height="30px"></td>
                    <td style="font-size: 13px; text-align: center; border-bottom: 1px; font-weight: bold;" colspan="2"><br>Tiket Wisata<br>Jatim Park Group</td>
                </tr>
                <tr>
                    <td colspan="2">----------------------------------</td>
                </tr>
            </table>
            <table style="border-bottom: 1px;" width="100%">
                <tr>
                    <td colspan="2" style="font-size: 20px; text-align:center; padding-bottom: 10px; font-weight: bold;">
                        Rp<input style="border:none; text-align: center; width: 75px;" type="text" name="nominal" value="<?php echo $harga; ?>" readonly="yes">,-
                    </td>
                </tr>
                <tr>
                    <td style="font-size: 13px">No</td>
                    <td style="font-size: 13px;"> :
                        <input style="border:none; width: 95px; font-weight: bold;" type="text" name="id_bayar" value="<?php echo $no_trans; ?>" readonly="yes"></td>
                </tr>
                <tr>
                    <td style="font-size: 11px">Lokasi</td>
                    <td style="font-size: 11px"> :
                        <input style="border:none; width: 95px;" type="text" name="lokasi" value="<?php echo $lokasi_sekarang; ?>" readonly="yes" />
                    </td>
                </tr>
                <tr>
                    <td style="font-size: 11px">Tgl Bayar</td>
                    <td style="font-size: 11px"> :
                        <input style="border:none; width: 105px;" type="text" name="tgl" value="<?php echo date('2019-01-31 H:i:s'); ?>" readonly="yes" /></td>
                </tr>
            </table>
        </div> <br>
        <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</button>
        <button class="btn btn-primary" onclick="printContent('print')"><i class="fa fa-print"></i> Cetak</button>
       </form>
</div>