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
                            <form role="form" method="post" action="<?php echo base_url('setting/tambah_lokasi') ?>" id="basic_validate">
                            <div class="table-responsive">
                                <div class="form-group">
                                    <label>Nama Lokasi</label>
                                    <input class="form-control" placeholder="Nama Lokasi" type="text" name="lokasi">
                                </div>
                                <div class="form-group">
                                    <label>Harga Tiket Masuk</label>
                                    <input class="form-control" placeholder="Harga Tiket Masuk" type="number" name="harga">
                                </div>
                                <button type="submit" class="btn btn-success btn-sm">Tambah</button>
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
                            Daftar Lokasi
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lokasi</th>
                                            <th>Harga Tiket Masuk</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $x=1;
                                        $no=1;
                                        foreach ($lokasi->result() as $row) { 
                                            $id = $row->id_lokasi;
                                            ?>
                                        
                                        <tr>
                                            <td><?php echo $x++; ?></td>
                                            <td><?php echo $row->nama_lokasi; ?></td>
                                            <td>
                                                <?php $jml = number_format($row->harga,0,",",".");
                                                if ($jml == 0) {
                                                    echo "Rp ".number_format($row->harga,0,",",".").",-";
                                                } else {
                                                    echo "Rp ".number_format($row->harga,0,",",".").".000,-";
                                                } ?>
                                            </td>
                                            <td><center> <button type="button" class="btn btn-warning"><i class="fa fa-edit" data-toggle="modal" data-target="#myModal<?php echo $no++;?>"></i> Edit</button> <a href="<?php echo base_url('Setting/hapus_lokasi/'.$id) ?>" onclick="return confirm('Yakin Ingin Menghapus Lokasi Ini?')"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button></a></center></td> 
                                        </tr>

                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
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


<?php
 $y=1;
   foreach ($lokasi->result() as $row){
?>
<div class="modal fade" id="myModal<?php echo $y++ ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-bg">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Edit Lokasi</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?php echo base_url('Setting/update_lokasi/'.$row->id_lokasi) ?>">
          <div class="form-group">
                <label>Nama Lokasi</label>
                <input class="form-control" name='lokasi' value="<?php echo $row->nama_lokasi; ?>" required>
                <br>
                <label>Harga Tiket Masuk</label>
                <input class="form-control" name='harga' value="<?php echo $row->harga; ?>" required>
          </div>
          <button type="reset" class="btn btn-default btn-xs"><i class=" fa fa-refresh "></i> Reset</button>
          <button type="submit" class="btn btn-primary btn-xs"><i class="fa fa-edit "></i> Edit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php $no++;} ?>