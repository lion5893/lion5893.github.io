<?php
/**
 * Created by PhpStorm.
 * User: namsida
 * Date: 10/19/16
 * Time: 5:23 PM
 */
class Validate
{
    public static function  isNumber($str){
        return preg_match('/^[0-9]+$/', $str);
    }
    public static function isPhone($str){
        return preg_match('/^[0-9]{9-11}$/', $str);
    }
    public static function isPwd($str){
        return preg_match('/^[a-zA-Z0-9\@\#\-\_]{6,15}$', $str);
    }
    public static function isEmail($str){
        return preg_match('/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/', $str)
    }
}
