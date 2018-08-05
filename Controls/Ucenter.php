<?php

// 个人中心类有什么特点
// 必须要经过登录后才能进来
// 权限管理
class Ucenter extends Auth{

	public function order()
	{
		$this->display();
	}
	public function profile()
	{
		$this->display();
	}
	public function vipBuy()
	{
		// 只有会员才可以进来
	}
	public function address(){
		$this->display('',false)
	}
	public function save_address(){
		$this->model('address')->insert([
		  'receive'=>$_POST['receive'],
		  'area'=>$_POST['area']

		]);
		echo json_encode(['status'=>1])
	}
    public function get_address()
	{
		$add_list = $this->model('address')->select();

		echo json_encode($add_list);exit();
	}




}

?>