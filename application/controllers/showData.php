<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class showData extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
		$this->load->model('showData_model');
		$dulieu = $this->showData_model->getdatabase();
		$dulieu = array('dulieucontroller' => $dulieu);
		// echo "<pre>";
		// var_dump($dulieu);
		$this->load->view('showData_view', $dulieu, FALSE);	
	}
	public function deleteData($idreturn)
	{
		$this->load->model('showData_model');
		if($this->showData_model->deleteDataById($idreturn))
		{
			$this->load->view('successDelete');
		}
		else{
			echo "Xóa thất bại";
		}
	}
	public function editData($idreturn)
	{
		$this->load->model('showData_model');	
		$ketqua = $this->showData_model->editData($idreturn);
		$ketqua = array('mangketqua' => $ketqua);
		$this->load->view('editData_view', $ketqua, FALSE);
	}
	public function updateData()
	{
		$id = $this->input->post('id');
		$sdt = $this->input->post('sdt');
		$gia = $this->input->post('gia');
		$this->load->model('showData_model');
		if($this->showData_model->updateData($id,$sdt,$gia)){
			$this->load->view('successEdit');
		}
	}
}

/* End of file showData.php */
/* Location: ./application/controllers/showData.php */