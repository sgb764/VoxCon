<?php
class Token{




  public static function generate($name){

    if($name === 'pre_login'){
      $hash = new PasswordHash(8, false);
      return Session::put($name, htmlspecialchars($hash->HashPassword(uniqid())));
    }else{
      return Session::get(Config::get('sessions/user_token'));
    }
  }

  public static function check($name, $value, $hook = ''){

    if($name === 'pre_login'){
      if(Session::get($name) === $value){
        if($hook === 'Delete'){
          Session::delete($name);
        }
        return true;
      }
    }else{
      if(Session::get(Config::get('sessions/user_token')) === $value){
        return true;
      }
    }
    return false;
  }

}




