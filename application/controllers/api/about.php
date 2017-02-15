<?php 
require APPPATH.'/libraries/REST_Controller.php';
class About extends REST_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index_get()
	{
		echo "welcom to about us";
	}
	public function ab_get()
	{
		echo "welcom  us";
	}
}
 ?>