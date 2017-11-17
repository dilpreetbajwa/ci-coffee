<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Reviews extends MY_Controller {
		
		public function index()
		{
			$data['title'] = 'Reviews';
			$data['active'] = 'reviews';
            $data['getData'] = $this->commonmodel->get('reviews');
			
			$this->load->view('admin/include/header', $data);
			$this->load->view('admin/include/sidebar');
			$this->load->view('admin/reviews/index');
			$this->load->view('admin/include/footer');
		}
		public function add()
		{
			$data['title'] = 'Add Reviews';
			$data['active'] = 'reviews';
			
			if($this->input->post('submit')==true){
				$ref = $this->rand_string(10).''.$this->rand_string(10);
				$images = $this->do_upload('image', 'img-'.$ref, 'reviews');
				$data = array(
				'uid' => $this->dil_session,
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description'),
				'image'=> $images[0],
				'status' => $this->input->post('status'),
				'updated' => date('Y:m:d H:m:s'),		
				'created' => date('Y:m:d H:m:s')			
				);
				
				$this->commonmodel->insert('reviews', $data);
				$this->session->set_flashdata('message', 'Added Successfully!');
				$this->session->set_flashdata('type', 'success');
				redirect($this->agent->referrer());			
			}
			
			$this->load->view('admin/include/header', $data);
			$this->load->view('admin/include/sidebar');
			$this->load->view('admin/reviews/add');
			$this->load->view('admin/include/footer');
		}
		
		
		public function edit($id)
		{
			$data['title'] = 'Edit Reviews';
			$data['active'] = 'reviews';
			//$id = base64_decode($id);
			$data['getData'] = $this->commonmodel->getWhere('reviews', $id);
			
			
			if($this->input->post('submit')==true){
				$ref = $this->rand_string(10).''.$this->rand_string(10);
				$images = $this->do_upload('image', 'img-'.$ref, 'reviews');
				
				$data = array(
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description'),
				'status' => $this->input->post('status'),
				'updated' => date('Y:m:d H:m:s'),		
				);
				$this->commonmodel->update('reviews', $data, $id);
				
				if($images[0]){
					$datas1 = array(
					'image'=> $images[0]			
					);
					$this->commonmodel->update('reviews', $datas1, $id);
				}
				
				$this->session->set_flashdata('message', 'Updated Successfully!');
				$this->session->set_flashdata('type', 'success');
				redirect($this->agent->referrer());			
			}
			$this->load->view('admin/include/header', $data);
			$this->load->view('admin/include/sidebar');
			$this->load->view('admin/reviews/edit');
			$this->load->view('admin/include/footer');
		}
		
	}
