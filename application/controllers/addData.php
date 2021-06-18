<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addData extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view("addData");
	}
	public function insertData_controller()
	{
		$so =  $this->input->post('sdt');
		$tien =  $this->input->post('giasim');

		$this->load->model('addData_model');
		if($this->addData_model->insert($so,$tien)){
			$this->load->view('Success');
		}
		else{
			echo "Insert thất bại";
		}
		
	}
}