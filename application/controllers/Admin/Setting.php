<?php

class Setting extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');

		if(!$this->auth_model->current_user()){
			$this->session->set_flashdata('keluar', 'Harap login terlebih dahulu!');
			redirect('auth/login');
		}
	}

	public function index()
	{
		$data['current_user'] = $this->auth_model->current_user();
		$this->load->view('admin/setting', $data);
	}
}
