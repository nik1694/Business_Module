<?php


defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Login extends CI_Controller
{
	
	function __construct(argument)
	{
		# code...
	}

	public function login($userid, $pass){


		$this->load->view('Dashboard');
	}




}










?>