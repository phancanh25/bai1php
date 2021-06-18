<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class showData_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getdatabase()
	{
		$this->db->select('*');
		$ketqua = $this->db->get('so_sim');
		$ketqua = $ketqua->result_array();
		return $ketqua;
	}

	public function deleteDataById($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('so_sim');
	}
	public function editData($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$dulieu = $this->db->get('so_sim');
		$dulieu = $dulieu->result_array();
		return $dulieu;
	}
	public function updateData($id,$sdt,$gia)
	{
		$dulieuupdate = array(
			'id' => $id,
			'sdt' => $sdt,
			'gia' => $gia
		);
		$this->db->where('id', $id);
		return $this->db->update('so_sim', $dulieuupdate);
	}

}

/* End of file showData_model.php */
/* Location: ./application/models/showData_model.php */