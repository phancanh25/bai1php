<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addData_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insert($s,$t)
	{
		$dulieu = array('sdt'=>$s,'gia'=>$t);
		$this->db->insert('so_sim', $dulieu);
		return $this->db->insert_id();
	}

}

/* End of file addData.php */
/* Location: ./application/models/addData.php */