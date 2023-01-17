<?php
					echo "<select class='visible-xs' style='width:100%; padding:5px 0px' name='cari_kategori' id='cari_kategori'>
					<option value='#'>- Pilih Kategori -</option>";
									$kategori = $this->model_app->view('rb_kategori_produk');
									if ($this->input->post('cari_kategori')){
										$id_kat = $this->input->post('cari_kategori'); 
									}else{ 
										$id_kat = ''; 
									}
									foreach ($kategori->result_array() as $rows) {
										$sub_kategori = $this->db->query("SELECT * FROM rb_kategori_produk where id_kategori_produk='$rows[id_kategori_produk]'");
										if ($sub_kategori->num_rows()>=1){
											if($id_kat == $rows['id_kategori_produk']){
												echo "<option value= $rows[id_kategori_produk] selected> $rows[nama_kategori] </option>";
											} else {
												echo "<option value= $rows[id_kategori_produk]> $rows[nama_kategori] </option>";
											}
											
										}else{
											echo "<option value=$rows[id_kategori_produk]> $rows[nama_kategori]</option>";
										}
									}
					echo "</select><br class='visible-xs'>";

					echo "<select class='visible-xs' style='width:100%; padding:5px 0px' name='cari_rt' id='rt'>
					<option value='#'>- RT -</option>";
									$provinsi = $this->model_app->view('rb_provinsi');
									if ($this->input->post('cari_rt')){
										$id_rt = $this->input->post('cari_rt'); 
									}else{ 
										$id_rt = ''; 
									}
									foreach ($provinsi->result_array() as $rows) {
										$sub_provinsi = $this->db->query("SELECT * FROM rb_provinsi where provinsi_id='$rows[provinsi_id]'");
										if ($sub_provinsi->num_rows()>=1){
											if($id_rt == $rows['provinsi_id']){
												echo "<option value= $rows[provinsi_id] selected> $rows[nama_provinsi] </option>";
											} else {
												echo "<option value= $rows[provinsi_id]> $rows[nama_provinsi] </option>";
											}
											
										}else{
											echo "<option value=$rows[provinsi_id]> $rows[nama_provinsi]</option>";
										}
									}
					echo "</select><br class='visible-xs'>";

					echo "<select class='visible-xs' style='width:100%; padding:5px 0px' name='cari_rw' id='rw'>
					<option value='#'>- RW -</option>";
									$kota = $this->model_app->view('rb_kota');
									if ($this->input->post('cari_rw')){
										$id_rw = $this->input->post('cari_rw'); 
									}else{ 
										$id_rw = ''; 
									}
									foreach ($kota->result_array() as $rows) {
										if ($kota->num_rows()>=1){
											if($id_rw == $rows['kota_id']){
												echo "<option value= $rows[kota_id] selected> $rows[nama_kota] </option>";
											} else {
												echo "<option value= $rows[kota_id] > $rows[nama_kota] </option>";
											}
											
										}else{
											echo "<option value=$rows[kota_id]> $rows[nama_kota]</option>";
										}
									}
					echo "</select><br class='visible-xs'>";

?>