<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Biodata Dosen</h1>



                 <div class="row">
                <div class="col-lg-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Import Data Peserta
                        </div>
                        <div class="panel-body">


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


                            <div class="row">
                                <div class="col-lg-6">
                                    <form method="post" action="<?php echo base_url('Dosen/import') ?>" enctype="multipart/form-data" accept-charset="utf-8">
                                        <div class="form-group">
                                            <label>File Excell .xlsx</label>
                                            <input class="form-control" type="file" name="userfile" required>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-sm">Input</button>
                                        <button type="reset" class="btn btn-primary btn-sm">Reset</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">
                                            <center>
                                            <a href="<?php echo base_url('assets/form/format_upload_data_dosen_ubhara.xlsx') ?>"><button type="button" class="btn btn-primary btn-lg"><i class="fa fa-download"> Download Format Excel</i></button></a>
                                            </center>
                                        </div>
                                        <div class="panel-footer">
                                            
                                        </div>
                                    </div>
                                </div>  
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    </div>
                </div>
            




                        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Biodata Dosen
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <form role="form" method="post" action="<?php echo base_url('Dosen/tambah_data_dosen') ?>">
                                <div class="col-lg-6">
                                    
                                        <div class="form-group">
                                            <label>Nama PT</label>
                                            <input type="text" class="form-control" name="pt"  placeholder="PT: 071010 Universitas Bhayangkara Surabaya">
                                        </div>
                                        <div class="form-group">
                                            <label>NIDN</label>
                                            <input type="text" class="form-control" name="nidn" pattern="[0-9]+" title="NIDN Hanya Angka"  placeholder="1234567890">
                                        </div>
                                        <div class="form-group">
                                            <label>NIP</label>
                                            <input type="text" class="form-control" name="nip" pattern="[0-9]+" title="NIP Hanya Angka"  placeholder="1234567890">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Dosen</label>
                                            <input type="text" class="form-control" name="nama"   placeholder="M Afif">
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select class="form-control" name="kelamin" >
                                                <option value="">-- Pilih Satu --</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input type="text" class="form-control" name="tempat_lahir"   placeholder="Surabaya">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="date" class="form-control" name="tgl_lahir"   >
                                        </div>
                                        
                                        
                                    <!-- </form> -->
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>No. KTP</label>
                                            <input type="text" class="form-control" name="ktp" pattern="[0-9]+" title="No. KTP Hanya Angka"  placeholder="1234567890">
                                        </div>
                                        
                                         <div class="form-group">
                                            <label>Jabatan Fungsional</label>
                                            <input type="text" class="form-control" name="jabatan" >
                                        </div>
                                        <div class="form-group">
                                            <label>Telphon / No. HP</label>
                                            <input type="text" class="form-control" name="kontak" >
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" name="surel"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Alamat Email Anda tidak Tepat">
                                        </div>
                                        <div class="form-group">
                                            <label>Prodi</label>
                                            <input type="text" class="form-control" name="prodi" >
                                        </div>
                                        <div class="form-group">
                                            <label>Pendidikan Terakhir</label>
                                            <input type="text" class="form-control" name="pendidikan" >
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                </form>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>


                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>