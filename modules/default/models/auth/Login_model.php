<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {


  function __construct(){
    parent::__construct();
  }

	function action($params){

		$user_query = $this->db ->select("first_name,last_name,id,email,password,is_active")
											      ->from("users")
											      ->where("email",$params["email"])
											      ->where("deleted_at",null)
											      ->get();
		$user_row = $user_query->row_array();
		if (!$user_query->num_rows()) {
      return rest_response(
        Status_codes::HTTP_NO_CONTENT,
        "User not found"
      );
    }

    if (!password_verify($params["password"],$user_row["password"])) {
      return rest_response(
        Status_codes::HTTP_BAD_REQUEST,
        lang("Wrong email or password")
      );
    }
    unset($user_row["password"]);

    return rest_response(
      Status_codes::HTTP_OK,
      "Successfully logged in",
      $user_row
    );
	}

}
