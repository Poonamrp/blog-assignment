<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function signup()
	{
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run())
		{
			$this->load->model('queries');
			$data=$this->input->post();
			unset($data['submit']);
			if($this->queries->register($data))
			{
				$this->session->set_flashdata('response','Registered Successfully');
			}
			else
			{
				$this->session->set_flashdata('response','Registeration Failed');
			}
			return redirect('welcome');
		}
		else
		{
			return $this->index(); 
		}
	}
	public function signin()
	{
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');	
		if($this->form_validation->run())
		{
			$this->load->model('queries');
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$user=$this->queries->login($email,$password);
	        if($user){
			 	$session_data=array(
			 	'user_id'=>$user->user_id,
			 	'username'=>$user->username,
			 	'email'=>$user->email,
			 	'user_role_id'=>$user->user_role_id,
			 	);

			 	$this->session->set_userdata($session_data);
			 	return redirect('dashboard');
			 }
			 else
			 {
			 	return redirect('Welcome');
			 }
		} 
		else
		{
			$this->load->view('welcome_message'); 
		}	
	}

	public function logout()
	{
		$userid= $this->session->userdata('userid');
		$this->session->unset_userdata('userid');
		return redirect('welcome');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	/*public function index()
	{
		$this->load->view('welcome_message');
	}*/
}
