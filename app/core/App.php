<?php 

class App{
	public function __construct()
	{
		$url = $this->parseURL();
		var_dump($url);
	}

	public function parseURL()
	{
		if(isset($_GET['url'])){
			$url = rtrim($_GET['url'],'/');
			// membersihkan url yang ngaco
			$url = filter_var($url,FILTER_SANITIZE_URL);
			// memecah url 
			$url = explode ('/', $url);
		    return $url;
	 }
   }
}