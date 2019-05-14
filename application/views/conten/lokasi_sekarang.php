<?php
    foreach ($lokasi_sekarang->result() as $row) {
        $lok = $row->nama_lokasi;
    }
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Setting Lokasi</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <!-- /.row -->
    <div class="row">

        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Setting Lokasi
                </div>
                <!-- /.panel-heading -->
                    
                <div class="panel-body">
                    <form role="form" method="post" action="<?php echo base_url('setting/update_lokasi_sekarang') ?>" id="basic_validate">
                    <div class="table-responsive">
                        <div class="form-group">
                            <label>Nama Lokasi Sekarang</label>
                            <select name="lokasi_sekarang">
                                <option value="none" selected="yes">Pilih Lokasi</option>
                                <?php foreach ($lokasi->result() as $row) { ?>
                                    <option value="<?php echo $row->nama_lokasi; ?>"> <?php echo $row->nama_lokasi; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success btn-sm">Ubah Lokasi</button>
                    </div>
                    <!-- /.table-responsive -->
                </form>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>

        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Lokasi Sekarang
                </div>
                <!-- /.panel-heading -->

                <?php
                    $query = $this->db->query("SELECT * FROM lokasi WHERE nama_lokasi = '$lok'");
                    foreach ($query->result() as $row) {
                        $jml = number_format($row->harga,0,",",".");
                        if ($jml == 0) {
                            $hrg = "Rp ".number_format($row->harga,0,",",".").",-";
                        } else {
                            $hrg =  "Rp ".number_format($row->harga,0,",",".").".000,-";
                        }
                    }
                ?>
                <div class="panel-body" style="text-align: center;">
                    <label style="font-size: 25px; font-weight: bold;">Lokasi Sekarang</label><br>
                    <span style="font-size: 25px;"><?php echo $lok; ?></span><br>
                    <label style="font-size: 25px; font-weight: bold;">Harga Lokasi Sekarang</label><br>
                    <span style="font-size: 25px;"><?php echo $hrg; ?></span><br>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>


        <!-- /.col-lg-6 -->
        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
    <!-- /.row -->
    <!-- /.row -->


</div>