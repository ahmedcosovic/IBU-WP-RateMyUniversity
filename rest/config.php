<?php

class Config{

  public static function DB_HOST(){
    return Config::get_env("DB_HOST", "db-mysql-nyc1-71808-do-user-14370278-0.b.db.ondigitalocean.com");
  }
  public static function DB_USERNAME(){
    return Config::get_env("DB_USERNAME", "doadmin");
  }
  public static function DB_PASSWORD(){
    return Config::get_env("DB_PASSWORD", "AVNS_SieIIEElOG1zCHaqqfD");
  }
  public static function DB_SCHEMA(){
    return Config::get_env("DB_SCHEMA", "rmu");
  }
  public static function DB_PORT(){
    return Config::get_env("DB_PORT", "25060");
  }
  public static function JWT_SECRET(){
    return "some_secret";
  }

  public static function get_env($name, $default){
    return isset($_ENV[$name]) && trim($_ENV[$name]) != '' ? $_ENV[$name] : $default;
  }
}

?>