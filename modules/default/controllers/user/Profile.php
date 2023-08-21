<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MY_Controller
{
	public function __construct() {
		parent::__construct();

		Auth::check(true);
	}

  public function index(){
		$params = [
			"id" => $this->session->userdata("id")
		];
		$this->load->model("user/Profile_model","model");
		$results=$this->model->readdata($params);
		$this->view([
			"layouts/header",
			"user/profile"
		],[
			"title" => "Porfile",
			'row'=>$results["data"]

		]);

  }
	function logout(){
		Auth::destroy();
		redirect(base_url("auth/login"));
	}
	function change(){
		$params = [
		"id" => $this->session->userdata("id")
	];
		$data = [
			"address"	=> $this->input->post("address"),
			"mobile"	=> $this->input->post("mobile"),
			"job"		=> $this->input->post("job"),
		];
		$this->load->model("user/Profile_model","model");
		$result = $this->model->add($params,$data);

		if($result) {
			Flash::set("message","Successfully changed.");
			Flash::set("type","success");
			redirect(base_url("user/profile"));
		}
	}
}
