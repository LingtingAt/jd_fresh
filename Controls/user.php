<?php
class user extends control
{
    public function register()
    {
      $_SESSION['lastUrl']=$_SERVER['HTTP_REFERER'];
     $this->display();
    }
    public function doReg()
    {
        $u_phone = $_POST['u_phone'];
        $u_passord = $_POST['u_passord'];
        $tmp_modle=$this->model('user');
        $selectone=$tmp_modle->find($u_phone,'u_phone');
        if(empty($selectone))
        {
            $selectone=$tmp_modle->insert([
                'u_phone'=>$u_phone,
                'u_passord'=>$u_passord]);
            $validate_res=returnArray(11,"注册成功,五秒后跳转上一个页面", $_SESSION['lastUrl']);
        }
        else
            {
                $validate_res=returnArray(12,"手机号已被注册",'');
                echo (json_encode($validate_res));
            }
//        $this->model('user')->insert([
//            'u_phone'=>$u_phone,
//            'u_passord'=>$u_passord,
//        ]);

    }
    public function login()
    {
        $_SESSION['lastUrl']=$_SERVER['HTTP_REFERER'];
        $this->display();
    }
    public function doLogin()
    {
        $u_phone = $_POST['u_phone'];
        $u_passord = $_POST['u_passord'];
        $tmp_modle=$this->model('user');
        $selectone=$tmp_modle->find($u_phone,'u_phone');

            if(empty($selectone))
            {

                $validate_res=returnArray(23,"手机号不存在",'');
                echo (json_encode($validate_res));
            }
           else if($selectone[0][2]!=$u_passord )
            {
                $validate_res=returnArray(22,"密码不正确",'');
                echo (json_encode($validate_res));
            }
            else
             {

                $validate_res=returnArray(21,"登陆成功,五秒后跳转上一个页面", $_SESSION['lastUrl']);
                echo (json_encode($validate_res));
             }
        }
        public function getUser_data()
        {
            $tmp_modle=$this->model('user');
            $selectone=$tmp_modle->find($u_phone,'u_phone');
        }

}
?>