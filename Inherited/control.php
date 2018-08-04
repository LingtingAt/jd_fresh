<?php
class Control{
//总控制器
   private static $control;
   private static $action;

   static function run()
    {
        // 显示哪一个控制器
        // 接收控制器参数
       self::$control=$control=isset($_REQUEST['control'])?$_REQUEST['control']: 'goods';

        // 接收行为参数
        self::$action=$action=isset($_REQUEST['action'])?$_REQUEST['action']:'index';


    include_once "Controls/$control.php";

        $control_obj = new $control();
        $control_obj->$action();
    }
    public function  display()
    {
        include_once "view/".self::$control."/".self::$action.".html";
    }


    public function model($usemodle)
    {
        $newusemodle  =  $usemodle."_model";
        include "model/$newusemodle.php";

        return new $newusemodle();




    }
}