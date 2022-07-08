<?php

class Feedback extends CI_Controller
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
		$this->load->model('feedback_model');
		$data['current_user'] = $this->auth_model->current_user();
		$data['feedbacks'] = $this->feedback_model->get();
		// var_dump($data); die;
		
		if(count($data['feedbacks']) <= 0){
			$this->load->view('admin/feedback_empty');
		} else {
			$this->load->view('admin/feedback_list', $data);
		}
	}

	public function delete($id = null)
	{
		if(!$id){
			show_404();
		}

		$this->load->model('feedback_model');
		$this->feedback_model->delete($id);

		$this->session->set_flashdata('hapus', 'Data berhasil dihapus!');
		redirect(site_url('admin/feedback'));
	}

}
