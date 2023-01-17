
<?php 
	echo "<option value=''>RT</option>";
 
	$query = "SELECT * FROM rb_provinsi ORDER BY nama_provinsi ASC";
	$dewan1 = $db1->prepare($query);
	$dewan1->execute();
	$res1 = $dewan1->get_result();
	while ($row = $res1->fetch_assoc()) {
		echo "<option value='" . $row['provinsi_id'] . "'>" . $row['nama_provinsi'] . "</option>";
	}
?>