<?php
echo "<div class='wrapper'>			
	<div class='header-logo'>";
		  $iden = $this->model_utama->view('identitas')->row_array();
		  $logo = $this->model_utama->view_ordering_limit('logo','id_logo','DESC',0,1);
		  foreach ($logo->result_array() as $row) {
			echo "<a href='".base_url()."'><img style='height:40px' src='".base_url()."asset/logo/$row[gambar]'/></a>";
		  }
	echo "
	</div>
	<div class='header-addons'>
	<br>";
		  if ($this->session->id_konsumen != ''){
		      $ksm = $this->db->query("SELECT * FROM rb_konsumen where id_konsumen='".$this->session->id_konsumen."'")->row_array();
		  }
          if ($this->session->id_konsumen != ''){
          	$isi_keranjang = $this->db->query("SELECT sum(jumlah) as jumlah FROM rb_penjualan_detail where id_penjualan='".$this->session->idp."'")->row_array();
            echo "<a class='hidden-xs' href='".base_url()."members/orders_report'>Status Transaksi</a> &nbsp; &nbsp; 
            	  <a href='".base_url()."members/keranjang'><b> 
            	  	<span class='glyphicon glyphicon glyphicon-shopping-cart' style='font-size:19px'></span></b> 
            	  	<span class='badge badgee'>".rupiah($isi_keranjang['jumlah'])."</span></a> &nbsp; 
            	  <a class='btn btn-xs btn-success' style='padding:1px 12px' href='".base_url()."members/profile'>Account</a> 
            	  <a class='btn btn-xs btn-danger' style='padding:1px 12px' href='".base_url()."members/logout'>Logout</a><br>";
          }else{
          	$isi_keranjang = $this->db->query("SELECT sum(jumlah) as jumlah FROM rb_penjualan_temp where session='".$this->session->idp."'")->row_array();
			 echo "<a class='hidden-xs' href='".base_url()."members/orders_report'>Status Transaksi</a> &nbsp; 
			 		<a href='".base_url()."produk/keranjang'> 
			 			<span class='glyphicon glyphicon glyphicon-shopping-cart' style='font-size:19px'></span></b> 
            	  	<span class='badge badgee'>".rupiah($isi_keranjang['jumlah'])."</span></a> &nbsp; ";
            echo "<a class='btn btn-xs btn-success' style='width:60px' href='".base_url()."auth/login'>Login</a> 
                  <a class='btn btn-xs btn-default' style='width:60px; color:#000' href='".base_url()."auth/register'>Daftar</a>";
            
          }
	echo "</div>
</div>";
