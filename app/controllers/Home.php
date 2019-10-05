<?php 


class Home extends Controller {

	public function index($nama = 'Rhexy' , $pekerjaan = 'mahasiswa'){
		echo "Hallo , nama saya $nama , Saya adalah seorang $pekerjaan";
	}
	public function page()
    {
		$data['judul'] = 'Home';
		$this->view('templates/header', $data);
		$this->view('home/index');
		$this->view('templates/footer');
	}
}
