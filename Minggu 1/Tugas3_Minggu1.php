<?php 

class kendaraan {
	var $jenis_kendaraan;
	var $jumlah_roda;
	var $merk;
	var $bahan_bakar;
	var $harga;
	var $tahun_pembuatan;


	function hargaSecond(){
		if ($this ->tahun_pembuatan > 2010) 
			$hargasecondnya = $this->harga*20/100;
		else if ($this->tahun_pembuatan < 2005) 
			$hargasecondnya = $this->harga*40/100;
		else $hargasecondnya = $this->harga*30/100;
		return $hargasecondnya;
	}
}