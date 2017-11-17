<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Offers extends MY_Controller {
		
		public function index()
		{
			$data['title'] = 'Offers';
			$data['active'] = 'offers';
            $data['getData'] = $this->commonmodel->get('offers');
			
			$this->load->view('admin/include/header', $data);
			$this->load->view('admin/include/sidebar');
			$this->load->view('admin/offers/index');
			$this->load->view('admin/include/footer');
		}
		public function add()
		{
			$data['title'] = 'Add Offers';
			$data['active'] = 'offers';

				if($this->input->post('submit')==true){
					$data = array(
				'uid' => $this->dil_session,
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description'),
				'icon' => $this->input->post('icon'),
				'status' => $this->input->post('status'),
				'updated' => date('Y:m:d H:m:s'),		
				'created' => date('Y:m:d H:m:s')			
				);
				
				$this->commonmodel->insert('offers', $data);
				$this->session->set_flashdata('message', 'Added Successfully!');
				$this->session->set_flashdata('type', 'success');
				redirect($this->agent->referrer());			
			}
			
			$this->load->view('admin/include/header', $data);
			$this->load->view('admin/include/sidebar');
			$this->load->view('admin/offers/add');
			$this->load->view('admin/include/footer');
		}
				public function edit($id)
		{
			$data['title'] = 'Edit Offers';
			$data['active'] = 'offers';
			$data['getData'] = $this->commonmodel->getWhere('offers', $id);
			
			if($this->input->post('submit')==true){
				$data = array(
				'title' => $this->input->post('title'),
				'icon' => $this->input->post('icon'),
				'status' => $this->input->post('status'),
				'updated' => date('Y:m:d H:m:s'),		
				);
				$this->commonmodel->update('offers', $data, $id);
				$this->session->set_flashdata('message', 'Updated Successfully!');
				$this->session->set_flashdata('type', 'success');
				redirect($this->agent->referrer());			
			}
			$this->load->view('admin/include/header', $data);
			$this->load->view('admin/include/sidebar');
			$this->load->view('admin/offers/edit');
			$this->load->view('admin/include/footer');
		}	
		
		}