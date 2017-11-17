<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Services extends CI_Controller {
		
		public function index()
		{
			$data['title'] = 'Services';
			$data['active'] = 'services';

			$this->load->view('admin/include/header', $data);
			$this->load->view('admin/include/sidebar');
			$this->load->view('admin/services/index');
			$this->load->view('admin/include/footer');
		}
		
		}