<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Gallery extends MY_Controller {
		
		public function index()
		{
			$data['title'] = 'Gallery';
			$data['active'] = 'gallery';
            $data['getData'] = $this->commonmodel->get('gallery');
			
			$this->load->view('admin/include/header', $data);
			$this->load->view('admin/include/sidebar');
			$this->load->view('admin/gallery/index');
			$this->load->view('admin/include/footer');
		}
		public function add()
		{
			$data['title'] = 'Add Gallery';
			$data['active'] = 'gallery';
			$data[''] = $this->commonmodel->get('gallery');	
			
			if($this->input->post('submit') == true){
				$title = $this->input->post('title');
				$slug = url_title($title, 'dash', true);
				$check = $this->commonmodel->countWhere('gallery', array('slug'=>$slug));
				if($check){
				$this->notification('Already Exist!', 'danger');
				}
				$ref = $this->rand_string(10).''.$this->rand_string(10);
				$images = $this->do_upload('image', 'img-'.$ref, 'gallery');
			
				$data = array(
				'uid' => $this->dil_session,
				'title' => $title,
				'slug' => $slug,
				'description' => $this->input->post('description'),
				'featured' => ($this->input->post('featured'))?$this->input->post('featured'):'off',
				'type' => $this->input->post('type'),
				'image'=> $images[0],
				'status' => $this->input->post('status'),
				'updated' => date('Y:m:d H:m:s'),		
				'created' => date('Y:m:d H:m:s')			
				);
				
				$this->commonmodel->insert('gallery', $data);
				$this->session->set_flashdata('message', 'Added Successfully!');
				$this->session->set_flashdata('type', 'success');
				redirect($this->agent->referrer());			
			}
			
			$this->load->view('admin/include/header', $data);
			$this->load->view('admin/include/sidebar');
			$this->load->view('admin/gallery/add');
			$this->load->view('admin/include/footer');
		}
		
		
		public function edit($id)
		{
			$data['title'] = 'Edit Gallery';
			$data['active'] = 'gallery';
			//$id = base64_decode($id);
			$data['getData'] = $this->commonmodel->getWhere('gallery', $id);
			
			
			if($this->input->post('submit')==true){
				$title = $this->input->post('title');
				$slug = url_title($title, 'dash', true);
				$check = $this->commonmodel->countWhere('gallery', array('slug'=>$slug, 'id !='=>$id));
				if($check){
				$this->notification('Already Exist!', 'danger');
				}
				$ref = $this->rand_string(10).''.$this->rand_string(10);
				$images = $this->do_upload('image', 'img-'.$ref, 'gallery');
				
				
				$data = array(
				'uid' => $this->dil_session,
				'title' => $title,
				'slug' => $slug,
				'description' => $this->input->post('description'),
				'featured' => ($this->input->post('featured'))?$this->input->post('featured'):'off',
				'type' => $this->input->post('type'),
			
				'status' => $this->input->post('status'),
				'updated' => date('Y:m:d H:m:s'),		
				'created' => date('Y:m:d H:m:s')			
				);
				$this->commonmodel->update('gallery', $data, $id);
				
				if($images[0]){
					$datas1 = array(
					'image'=> $images[0]			
					);
					$this->commonmodel->update('gallery', $datas1, $id);
				}
				
				$this->session->set_flashdata('message', 'Updated Successfully!');
				$this->session->set_flashdata('type', 'success');
				redirect($this->agent->referrer());			
			}
			$this->load->view('admin/include/header', $data);
			$this->load->view('admin/include/sidebar');
			$this->load->view('admin/gallery/edit');
			$this->load->view('admin/include/footer');
		}
		
	}
