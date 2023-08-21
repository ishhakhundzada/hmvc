<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Route::get("default_controller","test/route");


Route::prefix("auth",function(){
  Route::get("register","auth/register");
  Route::post("register-action","auth/register/action");
  Route::get("login","auth/login");
  Route::post("login-action","auth/login/action");
});



// Route::get("profile","profile/readdata");
