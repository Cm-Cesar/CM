<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	function index()
	{
		$this->load->view('encabezado');
		$this->load->view('login_view');
		$this->load->view('footer');
	}
	function validausuario()
	{
		$usuario=$this->input->post('usuario');
		$contra=$this->input->post('contra');
		if($usuario=="admin"&&$contra=="admin01"){
			echo "si";
		}else{
			echo "no";
		}
	}
}