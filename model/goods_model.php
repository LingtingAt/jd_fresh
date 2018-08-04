<?php
class goodsModel extends  MainPDO
{
    protected $ues_database='yonghudatas';
    function __construct()
    {
       global $Config;

       parent::__construct($Config);
    }
}
?>