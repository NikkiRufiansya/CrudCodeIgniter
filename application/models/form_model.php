<?php 

class Form_model extends CI_Model{
	function ambil_data($param){
		return $this->db->get('user');
	}
	function select($param){
		return $this->db->get_where("data",array('semester'=>$param));
	}
	function order_by($param1,$param2){
		if ($param2=="rand") {
			return $this->db->query("SELECT * FROM `user` ORDER by rand()");
		}
    	return $this->db->query("SELECT * FROM `user` ORDER by ".$param1." ".$param2);
	}
	function insert($data){
		$this->db->insert('data',$data);
	}

	function delete($kodemk){
  		$this ->db->where('kodemk', $kodemk);
  		$this ->db->delete('data');
	}
	function reset(){
		$this->db->query("TRUNCATE data");
	}
	
}
?>