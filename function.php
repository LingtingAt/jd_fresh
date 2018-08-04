<?php

    function returnArray($status,$massage,$data)
        {
            return
                [
                    'status'=>$status,
                    'massage'=>$massage,
                    'data'=>$data
                ];
        }
        function getUserData()
        {

        }
//status 11注册成功，12用户已经被注册，21登陆成功，22密码不正确，23用户不存在
?>