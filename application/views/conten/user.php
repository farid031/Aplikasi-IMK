<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Setting User</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <!-- /.row -->
            <div class="row">

                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Setting User
                        </div>
                        <div class="panel-body">
                            <?php
                                if ($this->session->flashdata('gagal')) { ?>
                                    <div class="alert alert-danger">
                                        <?php echo $this->session->flashdata('gagal'); ?>
                                    </div>
                                <?php
                                } elseif ($this->session->flashdata('berhasil')) { ?>
                                    <div class="alert alert-success">
                                        <?php echo $this->session->flashdata('berhasil'); ?>
                                    </div>
                                <?php }
                            ?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <form role="form" method="post" action="<?php echo base_url('setting/tambah_user') ?>" id="basic_validate">
                            <div class="table-responsive">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input class="form-control" placeholder="Nama Pengguna" type="text" name="nama">
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="form-control" placeholder="Username" type="text" name="user">
                                </div>
                                <div class="form-group">
                                    <label>Level User</label>
                                    <select name="level" class="form-control">
                                        <option>--- Pilih Level User ---</option>
                                        <option value="1">Admin</option>
                                        <option value="2">User</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" placeholder="Password" type="text" name="pass">
                                </div>
                                <div class="form-group">
                                    <label>Re-Type Password</label>
                                    <input class="form-control" placeholder="Re-Type Password" type="text" name="repass">
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
                            Setting User
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th width="5%">No</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $x=1;
                                        $no=1;
                                        foreach ($user->result() as $row) { 
                                            $id = $row->id_user; ?>
                                        <tr>
                                            <td><?php echo  $x++; ?></td>
                                            <td><?php echo  $row->nama; ?></td>
                                            <td><?php echo  $row->username; ?></td>
                                            <td>
                                                <center> <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal<?php echo $no++;?>"><i class="fa fa-edit"></i> Edit</button> <a href="<?php echo base_url('Setting/hapus_user/'.$id) ?>" onclick="return confirm('Yakin Ingin Menghapus User Ini?')"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button></a> </center>
                                            </td>
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
   foreach ($user->result() as $row){
    $nama = $row->nama;
    $username = $row->username;
?>
<div class="modal fade" id="myModal<?php echo $y++ ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form method="post" action="<?php echo base_url('Setting/update_user/'.$row->id_user) ?>">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Edit User</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Nama User</label>
                                                <input class="form-control" type="text" placeholder="Nama User"  value="<?php echo $nama ?>" name="nama">
                                            </div>
                                            <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" value="<?php echo $username ?>" name="user">
                                            </div>
                                            <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" type="text" name="pass">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                        </form>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
<?php $no++;} ?>