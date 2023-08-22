<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Note extends MY_Controller
{
	public function __construct() {
		parent::__construct();
		Auth::check(true);
	}

  public function index(){
		$params = [
			"id" => Auth::user()
		];
		$this->load->model("user/Note_model","model");
		$results=$this->model->readdata($params);

		// var_dump($results);die;
    $this->view([
			"layouts/header",
			"user/Note"
    ],[
      "title" => "Note",
			"row"=>$results["data"]
    ]);
  }


	function add(){
		$data = [
		"title" => $this->input->post("title"),
	 	"body" => $this->input->post("body"),
		"user_id" => Auth::user()
	];
		$this->load->model("user/Note_model","model");
		$result = $this->model->add($data);
		redirect(base_url("user/note"));
	}


	function edit (){
		$data = [
			"title" => $this->input->post("editt"),
			"body" => $this->input->post("editb")
		];
		$params = [
			"user_id" => Auth::user()
		];
		$this->load->model("user/Note_model","model");
		// var_dump($data);
		$data = $this->model->edit($data,$params);
		redirect(base_url("user/note"));
	}


	function delete (){
		$data = [
			"id" => $this->custom_input->delete("id"),
			"user_id" => Auth::user()
		];
		$this->load->model("user/Note_model","model");
		$data = $this->model->delete($data);
		return json_response($data);
		// redirect(base_url("user/note"));
	}
}
