<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Profile_model extends CI_Model{
	public function __construct() {
		parent::__construct();
	}

	public function readdata($params){
		$query = $this->db
		->select("*")
		->where("id",$params["id"])
		->from('users')->get();
		$user_data = $query->row_array();
		return rest_response(
			Status_codes::HTTP_OK,
			lang("OK"),
			$user_data
		);
	}
	function logout(){
		Auth::destroy();
		redirect(base_url("auth/login"));
	}
	function add($params,$data){
		if($params["id"]){
			// var_dump($params);die;
			// var_dump($data);die;
			$this->db->where("id",$params["id"]);
		return $this->db->update("users", $data);
	}
	}
	}
