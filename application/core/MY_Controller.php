<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
		
	function __construct() {
		parent::__construct();
		
		#session id
		if($this->session->userdata('dil_session')){
			$user = $this->session->userdata('dil_session');
			$this->dil_session = $user['id'];
			$this->userName = self::userName();
		}
		
		
	}
	
		#user Name
	public function userName() {
		$data = $this->commonmodel->getWhere('users', $this->dil_session);
		return $data->fname.' '.$data->lname;
	}
	
	#authentication
	public function authentication() {
		if(!$this->dil_session){
			$this->session->set_flashdata('message', 'Your are not logged In!');
			$this->session->set_flashdata('type', 'danger');
			redirect('login');
		}		
	}
	
	#random number
	public function rand_string( $length )
	{
		$chars = "01234567895824851147255412800";
		$size = strlen( $chars );
		$str = '';
		for( $i = 0; $i < $length; $i++ )
		{
			$str .= $chars[ rand( 0, $size - 1 ) ];
		}
		return $str;
	}
	
	#image upload
	function do_upload($img, $name, $path)
	{				
		$this->load->library('image_lib');
		$config['upload_path'] = './assets/images/'.$path;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '10000';
		$config['max_width']  = '10000';
		$config['max_height']  = '10000';
		$config['file_name'] = $name;

		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload($img))
		{
			$error = array('error' => $this->upload->display_errors());
		}
		else
		{
			$file = $this->upload->data();
			$files = glob($config['upload_path'].'/*');
	
			$config = array(
				'source_image'      => $file['full_path'], 
				'new_image'         => './assets/images/'.$path,
				'maintain_ratio'    => false,	
			);						
			$this->image_lib->initialize($config);			
									
			$data = array('upload_data' => $this->upload->data());			
			return array($file['file_name'],'');
		}
	}
	
	
}