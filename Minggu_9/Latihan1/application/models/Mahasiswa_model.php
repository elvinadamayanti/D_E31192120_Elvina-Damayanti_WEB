<?php 

class Mahasiswa_model extends CI_Model
	{
		public function get_data()
		{
			$data_mahasiswa = [
				["nama"=>"Kim Jefry","prodi"=>"MIF"],
				["nama"=>"Ahmad Kurniawan","prodi"=>"TKK"],
				["nama"=>"Budi Sudarsono","prodi"=>"TIF"]
			];
			return $data_mahasiswa;
		}

		public function get_data1()
		{
			$data_prodi = [
				["prodi"=>"MIF","keterangan"=>"Manajemen Informatika"],
				["prodi"=>"TKK","keterangan"=>"Teknik Komputer"],
				["prodi"=>"TIF","keterangan"=>"Teknik Informatika"]
			];
			return $data_prodi;
		}

		public function get_data2()
		{
			$data_angkatan = [
				["angkatan"=>"2016"],
				["angkatan"=>"2017"],
				["angkatan"=>"2018"]
			];
			return $data_angkatan;
		}
	}

 ?>