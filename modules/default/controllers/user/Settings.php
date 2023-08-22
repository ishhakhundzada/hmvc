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
  }
	function changepass(){
		$data =[
			"id" => $this->session->userdata("id"),
			"password" =>$this->input->post("password"),
			"newPassword"=>$this->input->post("newPassword"),
			"confirmPassword" =>$this->input->post("confirmPassword"),
		];
		$pswrd = [
			"password" => $this->input->post("newPassword")
		];
		// var_dump($pswrd["password"]);die;
		$this->load->model("user/Settings_model","model");
		$result = $this->model->changepass($data,$pswrd);
		redirect(base_url("user/settings"));
	}
}
