<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Settings_model extends CI_Model{
	public function __construct() {
		parent::__construct();
	}
	function changepass($data){
		$query => $this->db->select("password,id")
											 ->from("users")
											 ->where("password",$data["password"])
	}
	}
