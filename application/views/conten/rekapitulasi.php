

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Rekapitulasi Pembayaran</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-12" align="center">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Rekapitulasi
                </div>
                
                <div class="panel-body">
                    
                    <div class="col-lg-4 col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa  fa-5x"></i>
                                </div>
                                <div class="col-xs-12 text-right">
                                    <!-- $query = $this->db->query("SELECT SUM(jml_setor) AS total FROM epasar"); -->
                                    <?php
                                        $date = date('Y-m-d');
                                        $query = $this->db->query("SELECT SUM(jml_setor) AS total FROM epasar WHERE dibayar_pada LIKE '%$date%'");
                                        foreach ($query->result() as $row) {
                                            $jml = number_format($row->total,0,",",".");
                                            if ($jml == 0) {
                                                $jumlah = "Rp ".number_format($row->total).",-";
                                            } else {
                                                $jumlah = "Rp ".number_format($row->total).".000,-";
                                            }
                                        }
                                    ?>
                                    <div class="huge"><?php echo $jumlah; ?></div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Rekap Harian</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa  fa-5x"></i>
                                </div>
                                <div class="col-xs-12 text-right">
                                    <?php
                                        $query = $this->db->query("SELECT SUM(jml_setor) AS total FROM epasar");
                                        foreach ($query->result() as $row) {
                                            $jml = number_format($row->total,0,",",".");
                                            if ($jml == 0) {
                                                $jumlah_bln = "Rp ".number_format($row->total,0,",",".").",-";
                                            } else {
                                                $jumlah_bln = "Rp ".number_format($row->total,0,",",".").".000,-";
                                            }
                                        }
                                    ?>
                                    <div class="huge"><?php echo $jumlah_bln; ?></div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Rekap Bulanan</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa  fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <?php
                                    $query = $this->db->query("SELECT SUM(jml_setor) AS total FROM epasar");
                                    foreach ($query->result() as $row) {
                                        $jumlah = $row->total;
                                    }
                                    ?>
                                    <div class="huge"><?php echo "Rp ".number_format($jumlah,0,",",".").",-"; ?></div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Rekap Tahunan</span> <br> <span>2019</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div> -->

                    
                </div>
                
            </div>
            
        </div>
        
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Rekapitulasi Lokasi
                </div>
                
                <div class="panel-body">                    

                <?php foreach ($lokasi->result() as $row) { ?> 
                    
                
                <div class="col-lg-4">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <?php
                                echo $lok = $row->nama_lokasi;
                                $id_lok = $row->id_lokasi;
                            ?>
                        </div>
                        <div class="panel-body">
                            <div style="align-content: center; font-size: 16px">
                                <?php
                                   $jml_setor = $this->M_data->jumlah_setor($lok);
                                ?>
                                <div class="huge">
                                    <?php foreach($jml_setor->result() as $row){
                                        $jml = number_format($row->jumlah,0,",",".");
                                        if ($jml == 0) {
                                            echo "Rp ".number_format($row->jumlah,0,",",".").",-";
                                        } else {
                                            echo "Rp ".number_format($row->jumlah,0,",",".").".000,-";
                                        }
                                    } ?></div>
                            </div>
                        </div>
                        <a href="<?php echo base_url('Rekapitulasi/detail_rekap/'.$id_lok) ?>">
                            <div class="panel-footer">
                                <span class="pull-left">Lihat Detail</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            <?php } ?>
                    
                </div>
                
            </div>
            
        </div>
        
    </div>


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Rekapitulasi
                </div>
                <?php
                      if($this->session->flashdata('gagal')==TRUE){ ?>
                            <div class="alert alert-danger">
                              <?php echo $this->session->flashdata('gagal') ?>
                            </div>
                      <?php } ?>
                      <?php
                      if($this->session->flashdata('berhasil')==TRUE){ ?>
                            <div class="alert alert-success">
                              <?php echo $this->session->flashdata('berhasil') ?>
                       </div>
                    <?php } ?>

                    <table width="100%">
                          <tr>
                            <td colspan="2"><label for="#">Upload file Data berformat Microsoft Excel Worksheet (.xlsx)</label></td>
                          </tr>
                          <tr>
                            <form enctype="multipart/form-data" accept-charset="utf-8" method="post" action="<?php echo base_url('Rekapitulasi/import_excel') ?>">
                            <td><input type="file" name="userfile" class="form-control" required></td>
                            <td><button type="submit" class="btn btn-primary" name="button">Simpan</button></td>
                            </form>
                          </tr>
                        </table><br><br>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No. Transaksi</th>
                                <th>Lokasi</th>
                                <th>Jumlah Setor</th>
                                <th>Tanggal Bayar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            ini_set('max_execution_time', 0);
                            error_reporting(E_ALL);
                            ini_set('display_errors', 1);
                            $x=1;
                            foreach ($pasar->result() as $row) { ?>
                            <tr class="odd gradeX">
                                <td><?php echo $x++; ?></td>
                                <td><?php echo $row->id_bayar; ?></td>
                                <td><?php echo $row->nama_lokasi; ?></td>
                                <td class="center"><?php $jml = number_format($row->jml_setor,0,",",".");
                                        if ($jml == 0) {
                                            echo "Rp ".number_format($row->jml_setor,0,",",".").",-";
                                        } else {
                                            echo "Rp ".number_format($row->jml_setor,0,",",".").".000,-";
                                        } ?></td>
                                <td><?php echo date('d-m-Y H:i:s', strtotime($row->dibayar_pada)); ?></td>
                                <td>
                                    <a href="<?php echo base_url('dashboard/view_update/'.$row->id_bayar); ?>"> <button type="button" class="btn btn-primary"><i class="fa fa-print"></i> Cetak</button></a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    
                </div>
                
            </div>
            
        </div>
        
    </div>
</div>