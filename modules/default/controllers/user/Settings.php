<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends MY_Controller
{
	public function __construct() {
		parent::__construct();
		Auth::check(true);
	}

  public function index(){
    $this->view([
			"layouts/header",
			"user/settings"
    ],[
      "title" => "Settings"
    ]);
		function changePass(){

		}
  }
	function changepass(){
		$data =[
			"password" =>$this->input->post("password"),
			"newPassword"=>$this->input->post("newPassword"),
		];
		$data["newPassword"] = $data["newPassword"] ? password_hash($data["newPassword"],PASSWORD_DEFAULT) : NULL;
		$this->load->model("user/Settings_model","model");



	}
}
