<?php 


class Home extends Controller {
    
	public function index(){
	}
	public function page()
    {
		$data['judul'] = 'Home';
		$this->view('templates/header', $data);
		$this->view('home/index');
		$this->view('templates/footer');
	}
}
