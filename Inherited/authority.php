<?php
/**
 * Created by PhpStorm.
 * User: 666
 * Date: 2018/8/1
 * Time: 9:50
 */

class authorityc extends control
{
    function __construct()
    {
        parent::__construct();
        if (empty($_SESSION))
        {
            returnArray(31,"你还没有登陆，不能进行这个操作");
        }
    }
}