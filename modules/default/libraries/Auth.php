<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
*  Auth user global functions
*
*
*/
class Auth {

  private static $datas = [
    "id",
    "first_name",
    "last_name",
    "email",
    "phone",
    "is_active"
  ];

  static function action($data){
    $CI = get_instance();

    $rm_key_name = $CI->config->item("remember_key_name");
    if (isset($data["remember_me_token"]) && $data["remember_me_token"]) {
      setcookie($rm_key_name, $data["remember_me_token"],time() + 3600*24*30,"/");
    } else {
      setcookie($rm_key_name, '', -1,"/");
    }

    foreach (self::$datas as $item) {
      $list[$item] = isset($data[$item]) ? $data[$item] : null;
    }
    $CI->session->set_userdata($list);
  }

  static function destroy(){
    $CI = get_instance();
    $CI->session->unset_userdata(self::$datas);
  }

  static function user(){
    return self::getValue("id");
  }
  static function isActive(){
    return self::getValue("is_active");
  }

  protected static function getValue($name) {
    $CI = get_instance();
    $session_data = $CI->session->userdata($name);

    if (!$session_data) {
      $rm_key_name = $CI->config->item("remember_key_name");
      if (!$rm_key_name) {
        return false;
      }
      $token = isset($_COOKIE[$rm_key_name]) ? $_COOKIE[$rm_key_name] : NULL;
      if ($token) {
        $CI->load->model("auth/Login_model","auth_login_model");
        $data = $CI->auth_login_model->loginWithToken(["token" => $token]);
        if (isset($data["code"])) {
          if ($data["code"] === 200) {
            self::action($data["data"]);
            return $CI->session->userdata($name);
          } else if(in_array($data["code"],[204])) {
            setcookie($rm_key_name, '', -1,"/");
            return false;
          }
        } else {
          return false;
        }
      } else {
        return false;
      }
    }
    return $session_data;
  }

  public static function full_name() {
    return self::getValue("first_name") . " " . self::getValue("last_name");
  }


  public static function phone() {
    return self::getValue("phone");
  }

  public static function email() {
    return self::getValue("email");
  }



  static function check($redirect_back = null,$roles = [],$custom_url = false) {
     // || self::isMainAdmin()
    if(!self::user()) {
      $current_path = $redirect_back ? base_url("auth/login?r=").base64_encode($_SERVER['REQUEST_URI']) : base_url("auth/login");
      if ($redirect_back) {
        if (isset($_SERVER['HTTP_ATOKEN'])) {
          header('Content-Type: application/json');
          echo json_response(rest_response(Status_codes::HTTP_UNAUTHORIZED,"Unauthorized"));
          die;
        }
        redirect($current_path);
        die;
      } else {
        return false;
      }
    }
    // var_dump($redirect_back,!$roles, !in_array(self::role(), $roles));die;

    if($redirect_back && $roles && !in_array(self::role(), $roles)) {
      redirect(base_url($custom_url ? $custom_url : "profile"));
      return true;
    }

    return true;
  }

  static function guest($redirect = false) {
    $is_authed = Auth::user();
    if (!$is_authed) {
      return true;
    } else {
      if (!$redirect) {
        return false;
      } else {
        redirect(base_url("user/note"));
        die;
      }
    }
  }
}
