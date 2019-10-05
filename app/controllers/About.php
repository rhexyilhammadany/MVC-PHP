<?php 

class About {
	public function index($nama = 'Rhexy' , $pekerjaan = 'mahasiswa', $umur = 20 )
	{
		echo "Hallo , nama saya $nama , Saya adalah seorang $pekerjaan , Saya Berumur $umur tahun.";
	}
	public function page()
	{
		echo 'About/page';
	}
}
