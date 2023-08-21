<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Note_model extends CI_Model {
	/*Insert*/
	function add($data) {
		return $this->db->insert("users", $data);
	}


}
