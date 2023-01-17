<?php 
include "database.php"
?>
<!DOCTYPE html>
<html>
	<title>Belajar Menampilkan ComboBox - Jaranguda.com</title>
<table>
	<tr>	
		<td>
		<select name="kota">
			<?php
			include "database.php";
			$query = "select * from rb_provinsi";
			$hasil = mysql_query($query);
			while ($qtabel = mysql_fetch_assoc($hasil))
			{
				echo '<option value="'.$qtabel['nama_provinsi'].'">'.$qtabel['nama_provinsi'].'</option>';				
			}
			?>
		</select>
		</td>	
	</tr>
</table>
</html>