<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller
{

	public function __construct() {
		parent::__construct();
		Auth::guest(true);
	}

  public function index(){
    $this->view([
      "auth/register"
    ],[
      "title" => "Sign up"
    ]);
  }

	public function action() {
		$data = [
			"first_name"	=> $this->input->post("first_name"),
			"last_name"	=> $this->input->post("last_name"),
			"email"		=> $this->input->post("email"),
			"password" => $this->input->post("password"),
		];
		$data["password"] = $data["password"] ? password_hash($data["password"],PASSWORD_DEFAULT) : NULL;

		validateArray($data, ["first_name","last_name","email","password"]);

		$this->load->model("auth/Register_model","model");
		$result = $this->model->add($data);
		if($result) {
			Flash::set("message","New user is registered successfully.");
			Flash::set("type","success");
			redirect(base_url("auth/login"));
		} else {
			Flash::set("message","Something went wrong.");
			Flash::set("type","danger");
			redirect(base_url("auth/register"));
		}
	}

}
