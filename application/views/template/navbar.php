<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html" style="width: 300px;">Monitoring Pendapatan Jatim Park Group</a>
            </div>
            <!-- /.navbar-header -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" value="<?php echo $nama; ?>" disabled>
                                <span class="input-group-btn">
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo base_url('Dashboard') ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('Rekapitulasi') ?>"><i class="fa fa-book fa-fw"></i> Rekapitulasi</a>
                        </li>
                        <?php if ($level == '1') { ?>
                            <li>
                            <a href="#"><i class="fa fa-gear fa-fw"></i> Setting<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url('Setting') ?>">Setting User</a>
                                </li>
                                <li>
                                    <a href="<?php  echo base_url('Setting/lokasi')?>">Setting Lokasi</a>
                                </li>
                                <li>
                                    <a href="<?php  echo base_url('Setting/lokasi_sekarang')?>">Setting Lokasi Sekarang</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <?php } ?>
                        <li>
                            <a href="<?php echo base_url('Excel2json') ?>"><i class="fa fa-book fa-fw"></i> Excel to JSON</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('login/keluar') ?>"><i class="fa fa-power-off fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>