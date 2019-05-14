<script type="text/javascript">
    window.print();
</script>
    <?php foreach ($data_retribusi->result() as $row) {
        $id_bayar       = $row->id_bayar;
        $nama_lokasi     = $row->nama_lokasi;
        $setor          = $row->jml_setor;
        if ($setor == 0) {
            $setor = number_format($row->jml_setor,0,",",".");
        } else {
            $setor = number_format($row->jml_setor,0,",",".").".000";
        }
            $bayar          = $row->dibayar_pada;
        } ?>
    <div id="print" class="print" style="width: 162px" width="162px">
        <table width="100%">
            <tr>
                <td style="text-align: center; font-weight: bold;"><img src="<?php echo base_url('assets/images/jtp.png'); ?>" width="50px" height="35px"></td>
                <td style="font-size: 13px; text-align: center; border-bottom: 1px; font-weight: bold;" colspan="2"><br>Tiket Wisata<br>Jatim Park Group</td>
            </tr>
            <tr>
                <td colspan="2">----------------------------</td>
            </tr>
        </table>
        <table style="border-bottom: 1px;" width="100%">
            <tr>
                <td colspan="2" style="font-size: 20px; text-align:center; padding-bottom: 10px; font-weight: bold;" align="center"><?php echo "Rp".$setor.",-"; ?><br></td>
            </tr>
            <tr>
                <td style="font-size: 13px">No</td>
                <td style="font-size: 13px; font-weight: bold;"><?php echo ": ".$id_bayar; ?><br></td>
            </tr>
            <tr>
                <td style="font-size: 11px">Lokasi</td>
                <td style="font-size: 11px"><?php echo ": ".$nama_lokasi; ?></td>
            </tr>
            <!-- <tr>
                <td style="font-size: 11px">Pemungut</td>
                <td style="font-size: 11px"><?php echo ": ".$petugas; ?></td>
            </tr> -->
            <tr>
                <td style="font-size: 11px">Tgl Bayar</td>
                <td style="font-size: 11px"><?php echo ": ".date('d-m-Y H:i:s', strtotime($bayar)); ?></td>
            </tr>
        </table>
    </div>