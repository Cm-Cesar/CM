<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class menu extends CI_Controller {
	
	function __construct() {
     parent::__construct();

    // $this->load->model('menu_model');
   }

	function index()
	{
		$this->load->view('encabezado');
		$this->load->view('menu/menu_view');
		$this->load->view('footer');
	}
	
}