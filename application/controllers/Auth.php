<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('authmodel');
	}
	
	
	public function login()
	{
		$data['title'] = 'Login';
		$data['active'] = 'login';
	
		$this->load->view('auth/login');
		
	}
	
	public function register()
	{
		$data['title'] = 'Register';
		$data['active'] = 'register';
		
		if($this->input->post('register') == true){
			$this->form_validation->set_rules('fname', 'First Name', 'trim|required');
			$this->form_validation->set_rules('lname', 'Last Name', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[20]');
			$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|matches[password]');
			
			if($this->form_validation->run() == TRUE)
			{			
				$data = array(
				'fname' => $this->input->post('fname'),
				'lname' => $this->input->post('lname'),
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password')),
				'status' => '0',			
				'created' => date('Y-m-d h:m:s')
				);
				$this->authmodel->insert('users', $data);
				$this->session->set_flashdata('message', 'Your Account has been created successfully!');
				$this->session->set_flashdata('type', 'success');
				redirect($this->agent->referrer());
			}
		}
		
		$this->load->view('includes/header', $data);
		$this->load->view('auth/register');
		$this->load->view('includes/footer');
	}
	
	public function verify() 
	{
		if($this->input->post('login') == true){
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$check=$this->authmodel->verify($email);
			//print_r($check);
			if($check){
				if($check->status==0){
					$this->session->set_flashdata('message', 'Your account is not activated!');
					$this->session->set_flashdata('type', 'danger');
					redirect($this->agent->referrer());
				}
				$auth=$this->authmodel->login($email, $password);
			//	print_r($auth);
				if($auth){
				    $session=array(
					'id'=>$auth->id
					);
					$this->session->set_userdata('dil_session', $session);
					$this->session->set_flashdata('message', 'Your are logged in successfully!');
					$this->session->set_flashdata('type', 'info');
					redirect('admin');
				}else{
					$this->session->set_flashdata('message', 'Your entered wrong password!');
					$this->session->set_flashdata('type', 'danger');
					redirect($this->agent->referrer());					
				}
			} else
			{
				$this->session->set_flashdata('message', 'Your entered wrong email!');
				$this->session->set_flashdata('type', 'danger');
				redirect($this->agent->referrer());
			}
		}		
	}
	
	public function logout(){
		$this->session->unset_userdata('dil_session');
		$this->session->set_flashdata('message', 'Your are logged out successfully!');
		$this->session->set_flashdata('type', 'info');
		redirect('login');
	}
}
