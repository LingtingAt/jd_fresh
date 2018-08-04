<?php
class user extends control
{
    public function register()
    {
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
                'u_passord'=>$u_passord,]);
            $unvalidate_res=[false];
            echo (json_encode($unvalidate_res));
        }
        else
            {
                $unvalidate_res=[true];
                echo (json_encode($unvalidate_res));
            }
//        $this->model('user')->insert([
//            'u_phone'=>$u_phone,
//            'u_passord'=>$u_passord,
//        ]);

    }
    public function login()
    {
        $this->display();
    }
    public function doLogin()
    {
        $u_phone = $_POST['u_phone'];
        $u_passord = $_POST['u_passord'];
        $tmp_modle=$this->model('user');
        $selectone=$tmp_modle->find($u_phone,'u_phone');

            if($selectone[0][2]!=$u_passord )
            {
                $unvalidate_res=['PassordIncorrect'];
                echo (json_encode($unvalidate_res));

            }
            else
                {
            $unvalidate_res=[false];
            echo (json_encode($unvalidate_res));
            }
        }

}
?>