      <div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Detail Data Konsumen</h3>
                  <a class='pull-right btn btn-default btn-sm' href='<?php echo base_url(); ?>reseller/penjualan'>Kembali</a>
                </div>
                <div class='box-body'>
                    <table class='table table-condensed table-bordered'>
                    <tbody>
                      <?php if (trim($rows['foto'])==''){ $foto_user = 'users.gif'; }else{ $foto_user = $rows['foto']; }$ko = $this->db->query("SELECT * FROM rb_kota a JOIN rb_provinsi b ON a.provinsi_id=b.provinsi_id where kota_id='$rows[kota_id]'")->row_array(); ?>
                      <tr bgcolor='#e3e3e3'><th rowspan='12' width='110px'><center><?php echo "<img style='border:1px solid #cecece; height:85px; width:85px' src='".base_url()."asset/foto_user/$foto_user' class='img-circle img-thumbnail'>"; ?></center></th></tr>
                      <tr><th width='130px' scope='row'>Username</th> <td><?php echo $rows['username']?></td></tr>
                      
                      <tr><th scope='row'>Nama Lengkap</th> <td><?php echo $rows['nama_lengkap']?></td></tr>
                      <tr><th scope='row'>Alamat Email</th> <td><?php echo $rows['email']?></td></tr>
                      <tr><th scope='row'>No Hp</th> <td><?php echo $rows['no_hp']?></td></tr>
                      
                      
                      <tr><th scope='row'>Alamat Lengkap</th> <td><?php echo $rows['alamat_lengkap']?></td></tr>
                      
                    </tbody>
                    </table>
                </div>
            </div>
        </div>