<?php


class user_model extends MainPDO
{
    protected $ues_database='user_data';
    function __construct()
    {
        global $Config;

        parent::__construct($Config);
    }
}