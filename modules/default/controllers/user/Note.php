<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Note extends MY_Controller
{
	public function __construct() {
		parent::__construct();
		Auth::check(true);
	}

  public function index(){
    $this->view([
			"layouts/header",
			"user/Note"
    ],[
      "title" => "Note"
    ]);
  }
	function action(){
		$data = [
	 	"notes" =>$this->input->post("notes")
	];
		$this->load->model("user/Note_model","model");
		$result = $this->model->add($data);
	}
}
