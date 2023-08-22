<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Settings_model extends CI_Model{
	public function __construct() {
		parent::__construct();
	}
	function changepass($data,$pswrd){
		$user_query = $this->db ->select("id,password,is_active")
											      ->from("users")
											      ->where("id",$data["id"])
											      ->where("deleted_at",null)
											      ->get();
		$user_row = $user_query->row_array();
		if (!$user_query->num_rows()) {
      return rest_response(
        Status_codes::HTTP_NO_CONTENT,
        "User not found"
      );
    }

    if (!password_verify($data["password"],$user_row["password"])) {
      return rest_response(
        Status_codes::HTTP_BAD_REQUEST,
        lang("Old password not correct!")
      );
    }
		if ($data["newPassword"] !== $data["confirmPassword"]) {
      return rest_response(
        Status_codes::HTTP_BAD_REQUEST,
        lang("Password not match!")
      );
    }

		$this->db->where("id",$data["id"]);
	 	$this->db->update("users", [
			"password" => password_hash($data["newPassword"],PASSWORD_DEFAULT)
		]);
		return true;
		// redirect(base_url("user/settings"));
	}
}
