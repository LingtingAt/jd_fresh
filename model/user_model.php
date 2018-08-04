<?php
/**
 * Created by PhpStorm.
 * User: 666
 * Date: 2018/8/1
 * Time: 18:02
 */

class user_model extends MainPDO
{
    protected $ues_database='user_data';
    function __construct()
    {
        global $Config;

        parent::__construct($Config);
    }
}