<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller
{
	public function __construct() {
		parent::__construct();
		Auth::guest(true);
	}

  public function index(){
    $this->view([
      "auth/login"
    ],[
      "title" => "Login"
    ]);
  }

  function action(){
    $params = [
      "email" =>$this->input->post("email"),
      "password" =>$this->input->post("password"),
    ];
    $this->load->model("auth/Login_model", "model");
    $result = $this->model->action($params);
		validateArray($params,["email,password"]);
// var_dump($result); die;
    if (isset($result["code"]) && $result["code"] === Status_codes::HTTP_OK) {
			$result["data"]["is_active"] = $result["data"]["is_active"] === "1";
      Flash::set("type","success");
      Flash::set("message",$result["message"]);
			$this->session->set_userdata($result["data"]);
      redirect(base_url("user/note"));

    } else {
      Flash::set("type","danger");
      Flash::set("message",isset($result["message"]) ? $result["message"] : "Internal Server Error");
      redirect(base_url("auth/login"));
    }
		// redirect(base_url("profile"));
  }
}
