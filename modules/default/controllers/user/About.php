<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MY_Controller
{
		public function __construct() {
			parent::__construct();
			Auth::check(true);
		}

  public function index(){
    $this->view([
			"layouts/header",
			"user/about"
    ],[
      "title" => "About"
    ]);
  }
}
