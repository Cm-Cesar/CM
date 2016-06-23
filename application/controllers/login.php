<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	function __construct() {
     parent::__construct();

     $this->load->model('login_model');
   }

	function index()
	{
		$this->load->view('encabezado2');
		$this->load->view('login_view');
		$this->load->view('footer');
	}
	function validausuario()
	{
		$post["usuario"]=$this->input->post('usuario');
		$post["contra"]=$this->input->post('contra');
		$valido=$this->login_model->valida($post);
		if($valido){
			echo "si";
		}else{
			echo "no";
		}
	}
}