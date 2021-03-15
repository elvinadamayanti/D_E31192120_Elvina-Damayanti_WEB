<?php

 class kendaraan {
     var $jenis_kendaraan;
     var $jumlah_roda;
     var $merk;
     var $bahan_bakar;
     var $harga;
     var $tahun_pembuatan;

     function subsidiBBM(){
         if ($this ->bahan_bakar = 'premium') && ($this->yahun_pembuatan < 2005) $subsidi = 'YA';
         else $subsidi = 'tidak';
         return $subsidi;
     }
 } ?>