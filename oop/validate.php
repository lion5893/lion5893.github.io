<?php

/**
 * Created by PhpStorm.
 * User: Nam Le Quy
 * Date: 10/7/2016
 * Time: 10:19 AM
 */
class validate
{   // validate username
    public static $user_pattern = '/^[a-zA-Z0-9\_\.]{5,20}$/'; // thuộc tính user_pattern
    public static function isUser($input){
        return preg_match(self::$user_pattern, $input);
    }
    // validate email
    public static function isEmail($input){ // phương thức isEmail
        return preg_match('/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/', $input);
    }
    // validate password
    public static function  isPass($input){
        return preg_match('/^[a-zA-Z0-9\@\%\^\_]{6,16}$/', $input);
    }
    // validate số điện thoại
    public static function isPhone($input){
        return preg_match('/^[0-9\+\(\)]{8,20}$/', $input);
    }
    // validate name
    public static $name_pattern = '/^[a-zA-Z ]{5,30}$/';
    public static function isName($input){
        return preg_match(self::$name_pattern, $input);
    }
}
$email = 'aabc_get';
$user = 'namlequy';
$pass = 'nam_le@%';
$phone = '(+84)123456789';
$name = 'nam le quy';
var_dump(validate::isEmail($email)) ;
var_dump(validate::isUser($user));
var_dump(validate::isPass($pass));
var_dump(validate::isPhone($phone));
var_dump(validate::isName($name));
?>