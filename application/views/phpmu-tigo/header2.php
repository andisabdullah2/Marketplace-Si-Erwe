<style type="text/css">
	.header2 {
		background-color: orange;
		max-height: 210px;
		min-height: 50px;
		padding-top: 7px;
	
	}

	#select1{
		margin-bottom: 2px;
		padding-right: 40px;

		}
	#select{
		margin-bottom: 2px;
		}
		.form-control1{
			display: block;
			width: 100%;
			padding: 6px 12px;
			font-size: 14px;
			line-height: 1.42857143;
			color: #555;
			background-color: #fff;
			background-image: none;
			border: 1px solid #ccc;
			border-radius: 4px;
			max-height: 38px;
		}
		
</style>
<?php
echo "
<div class='wrapper'>
<div class='header2'>

<div class='form-row px-1 rounded text-center'>
			" . form_open('produk/index') . "

				<div class='col-sm-2 mb-2 mb-sm-0' id='select'>
				<select class='form-control1' name='cari_kategori' id='cari_kategori'>
				<option value='' >Semua Kategori</option>";
$kategori = $this->model_app->view('rb_kategori_produk');
if ($this->input->post('cari_kategori')) {
	$id_kat = $this->input->post('cari_kategori');
} else {
	$id_kat = '';
}
foreach ($kategori->result_array() as $rows) {
	$sub_kategori = $this->db->query("SELECT * FROM rb_kategori_produk where id_kategori_produk='$rows[id_kategori_produk]'");
	if ($sub_kategori->num_rows() >= 1) {
		if ($id_kat == $rows['id_kategori_produk']) {
			echo "<option value= $rows[id_kategori_produk] selected> $rows[nama_kategori] </option>";
		} else {
			echo "<option value= $rows[id_kategori_produk]> $rows[nama_kategori] </option>";
		}
	} else {
		echo "<option value=$rows[id_kategori_produk]> $rows[nama_kategori]</option>";
	}
}
echo "</select>";
echo "</div>";

echo "</li>
			</ul>

			<div class='col-sm-2 mb-2 mb-sm-0'id='select'>
			<select class='form-control1' name='cari_rt' id='rt'>
			<option value='' > Semua RT </option>";
$provinsi = $this->model_app->view('rb_provinsi');
if ($this->input->post('cari_rt')) {
	$id_rt = $this->input->post('cari_rt');
} else {
	$id_rt = '';
}
foreach ($provinsi->result_array() as $rows) {
	$sub_provinsi = $this->db->query("SELECT * FROM rb_provinsi where provinsi_id='$rows[provinsi_id]'");
	if ($sub_provinsi->num_rows() >= 1) {
		if ($id_rt == $rows['provinsi_id']) {
			echo "<option value= $rows[provinsi_id] selected> $rows[nama_provinsi] </option>";
		} else {
			echo "<option value= $rows[provinsi_id]> $rows[nama_provinsi] </option>";
		}
	} else {
		echo "<option value=$rows[provinsi_id]> $rows[nama_provinsi]</option>";
	}
}
echo "</select>";
echo "</div>";


echo "</li>
			</ul>

			<div class='col-sm-2 mb-2 mb-sm-0' id='select'>
			<select class='form-control1' name='cari_rw' id='rw'>
			<option value=''> Semua RW </option>";
$kota = $this->model_app->view('rb_kota');
if ($this->input->post('cari_rw')) {
	$id_rw = $this->input->post('cari_rw');
} else {
	$id_rw = '';
}
foreach ($kota->result_array() as $rows) {
	if ($kota->num_rows() >= 1) {
		if ($id_rw == $rows['kota_id']) {
			echo "<option value= $rows[kota_id] selected> $rows[nama_kota] </option>";
		} else {
			echo "";
		}
	} else {
		echo "<option value=$rows[kota_id]> $rows[nama_kota]</option>";
	}
}

echo "</select>";
echo "</div>";

echo "</li>
			</ul>

			<div class='col-sm-2 mb-2 mb-sm-0' id='select1'>
							<input type='text' placeholder='Aku Mau Belanja...' name='kata' class='form-control1'/>";
echo "</div>";
echo "</li>
			</ul>

			<div class='col-sm-1 mb-2 mb-sm-0' id='select'>
							<input type='submit' value='cari' name='cari' class='form-control1' /> <br>";
echo "</div>";
echo "</li>
			</ul>
			</form>		
</div>
</div>
</div>";
?>
