<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Home extends CI_Controller {
		
		public function index()
		{
			$data['title'] = 'Home';
			$data['active'] = 'home';
			
			//$uid =$this->dil_session;
			
			$data['gallery'] = $this->commonmodel->getFront('gallery', '6');
			$data['blogs'] = $this->commonmodel->getFront('blogs', '3');
		    $data['offers'] = $this->commonmodel->getFront('offers', '6');
			 $data['reviews'] = $this->commonmodel->getFront('reviews', '3');
			 // $data['about'] = $this->commonmodel->getWhere('about',$uid);
			
			$this->load->view('includes/header', $data);
			$this->load->view('home');
			$this->load->view('includes/footer');
		}
		
	}	