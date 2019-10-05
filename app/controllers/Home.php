<?php 

<<<<<<< HEAD
class Home extends Controller {
	public function index()
=======
class Home {
	public function index($nama = 'Rhexy' , $pekerjaan = 'mahasiswa'){
		echo "Hallo , nama saya $nama , Saya adalah seorang $pekerjaan";
	}
	public function page()
>>>>>>> 847be01d556b477b88be034158e60bf0f8f39288
	{
		$data['judul'] = 'Home';
		$this->view('templates/header', $data);
		$this->view('home/index');
		$this->view('templates/footer');
	}
}
