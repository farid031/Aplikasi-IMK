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
                                            <a href="<?php echo base_url('assets/form/form_upload_data.xlsx') ?>"><button type="button" class="btn btn-primary btn-lg"><i class="fa fa-download"> Download Format Excel</i></button></a>
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