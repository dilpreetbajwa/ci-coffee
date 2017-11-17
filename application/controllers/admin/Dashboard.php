<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Dashboard extends CI_Controller {
		
		public function index()
		{
			$data['title'] = 'Dashboard';
			$data['active'] = 'dashboard';

			$this->load->view('admin/include/header', $data);
			$this->load->view('admin/include/sidebar');
			$this->load->view('admin/dashboard/index');
			$this->load->view('admin/include/footer');
		}
		
		}