<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Route::get("default_controller","test/route");

Route::prefix("user",function(){
  Route::get("profile","user/profile");
  Route::get("about","user/about");
  Route::get("note","user/note");
  Route::get("settings","user/settings");
  Route::post("home-action","user/home/action");
  Route::post("change","user/profile/change");
  Route::get("change","user/profile/change");
  Route::post("changepass","user/settings/changepass");



  Route::prefix("note",function(){
    Route::post("add-action","user/note/add");
    Route::put("edit","user/note/edit");
    Route::delete("delete","user/note/delete");
  });
  

});
Route::post("logout","user/profile/logout");
