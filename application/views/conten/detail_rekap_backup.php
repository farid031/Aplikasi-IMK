<div id="page-wrapper">
<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Detail Rekapitulasi</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
<div class="row">
    &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-danger" onclick="goBack()">Kembali</button>
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Rekapitulasi
                </div>
                
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover"><!-- id="dataTables-example" -->
                        <thead>
                            <tr>
                                <th>Nama Lokasi</th>
                                <th>Bulan</th>
                                <th>Jumlah Setor</th>
                                <th width="10%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            for ($i=12; $i >= 1 ; $i--) {
                                if($i < 10){
                                    $i = "0".$i;
                                }?> 
                            <tr class="odd gradeX">
                                <td>
                                    <?php 
                                    $x = 0;
                                    foreach ($rekap->result() as $row) {
                                        if ($x == 0) {
                                            echo $lok = $row->nama_lokasi;
                                            $x++;
                                        } else {
                                            echo "&nbsp;";
                                        }
                                    }
                                 ?>
                                </td>
                                <td><?php echo completeFormatMonthIndo_helper($i) ?></td>
                                <td class="center"><?php 
                                    $data = $this->db->query("SELECT SUM(jml_setor) AS jumlah FROM epasar WHERE nama_lokasi='$lok';");
                                    foreach ($data->result() as $row) {
                                        echo "Rp ".number_format($row->jumlah,0,",",".").",-";
                                    } ?></td>
                                <td><button type="button" class="btn btn-primary"><i class="fa fa-list"></i> Detail</button> </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    
                </div>
                
            </div>
            
        </div>
        
    </div>
</div>

<script>
function goBack() {
  window.history.back();
}
</script>