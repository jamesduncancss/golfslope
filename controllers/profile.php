<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Profile extends CI_Controller {
		public function index()
		{
			//echo 'Hello World!';
			// $this->load->view('profile/index');
			
			$user = $this->ion_auth->user()->row();
			
			echo $this->load->view('profile', $user); 
		}
	}
?>