
<?php
	$provinsi = $_POST['provinsi'];
 
	echo "<option value=''>Pilih Kabupaten</option>";
 
	$query = "SELECT * FROM rb_kota WHERE provinsi_id=? ORDER BY nama_kota ASC";
	$dewan1 = $db1->prepare($query);
	$dewan1->bind_param("i", $provinsi);
	$dewan1->execute();
	$res1 = $dewan1->get_result();
	while ($row = $res1->fetch_assoc()) {
		echo "<option value='" . $row['kota_id'] . "'>" . $row['nama_kota'] . "</option>";
	}
?>