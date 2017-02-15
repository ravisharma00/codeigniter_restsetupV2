<?php 
require APPPATH.'/libraries/REST_Controller.php';
class Homectrl extends REST_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index_get()
	{
		echo "welcom to rest server";
	}
}






 ?>