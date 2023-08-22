<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Note_model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}


	function add($data) {
		return $this->db->insert("notes", $data);
	}

	function edit($data,$params) {
		$this->db->where("user_id",$params["id"]);
	 	$this->db->update("notes",$data);
		return true;

	}
	function delete($params) {
		$this->db->where("user_id",$params["user_id"]);
		$this->db->where("id",$params["id"]);
	 	$this->db->delete("notes");
		return rest_response(
			Status_codes::HTTP_ACCEPTED,
			lang("OK")
		);
	}



	function readdata($params){
		$query = $this->db
		->select("*")
		->where("user_id",$params["id"])
		->from('notes')
		->get();
		$data = $query->result_array();

		return rest_response(
			Status_codes::HTTP_OK,
			lang("OK"),
			$data
		);
	}

}
