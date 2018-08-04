<?php
/* Smarty version 3.1.30, created on 2018-08-04 09:24:07
  from "D:\wamp64\www\php\day10\view\user\register.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b6570b7aeace8_07723766',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '524c28af8cba4522b385a498abb6050efc7d0c55' => 
    array (
      0 => 'D:\\wamp64\\www\\php\\day10\\view\\user\\register.html',
      1 => 1533374637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b6570b7aeace8_07723766 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>个人注册</title>
</head>
<?php echo '<script'; ?>
 src="https://cdn.bootcss.com/jquery/3.3.1/core.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.bootcss.com/vue/2.5.17-beta.0/vue.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://unpkg.com/element-ui/lib/index.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://unpkg.com/axios/dist/axios.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
<style>
    a{color: #999;text-decoration: none}
    a:hover{color: #f30213;text-decoration: none}

    .body{margin: 0;padding: 0;}
    .el-footer
    {
        background-color: #e3e4e5;

        text-align: center;
        line-height: 60px;
        width: 100%;
    }
    .el-header
    {
        box-shadow: 0px 5px 40px 0px #f2f2f2;
        width: 100%;
        position: fixed;
        top: 0;
        color: #999;
        text-align: center;
        line-height: 110px;
        height: 110px;
        font-size: 10px;
    }
    .el-main
    {
        position: absolute;
        top: 110px;
        z-index: -999999;
        background-color: #fff;
        color: #333;
        width: 100%;
        height: auto;
    }
    .content
    {
        width: 1200px;
        height: auto;;
        margin: 0 auto;
    }
    .el-container
    {
        position: relative;
    }
    .header
    {
        width: 1200px;
        margin: 0 auto;
    }
    .header_left
    {
        display: flex;
        height: 100%;
        width: 80%;
        float: left;
        padding: 20px 0;
    }
    .header_left img
    {
        height: 70px;
        width: auto;
        display: block;
        margin: auto 10px;
    }
    .form_box
    {
        width: 600px;
        height: auto;
        margin: 200px auto;
    }
    .logo
    {
        height: 70px;
        line-height: 75px;
        font-size: 24px;
        color: #333;
    }
    .header_right
    {
        height: 100%;
        width: 20%;
        float: right;
        display: flex;
    }
    .warn
    {
        width: 100px;
        margin: 0 0 10px 260px;
        color: #f56c6c;
        font-size: 12px
    }

</style>
<body>
<div id="app">
    <el-container>

        <el-header height="110px">
            <div class="header">
            <div class="header_left">
                <img src="static/image/logo1.png" >
                <div class="logo">
                    欢迎注册
                </div>
            </div>
            <div class="header_right">
                <div>
                    已有账号？
                </div>
                <a href="http://localhost/php/day10/index.php?control=user&&action=login">
                    请登录>
                </a>
            </div>
            </div>
        </el-header>

            <el-main>
            <div class="header">
                <div class="form_box">
<el-form :model="ruleForm2" status-icon :rules="rules2" ref="ruleForm2" label-width="100px" class="demo-ruleForm">
    <el-form-item label="手机号" prop="age">
        <el-input v-model.number="ruleForm2.age"></el-input>
    </el-form-item>

    <el-form-item label="密码" prop="pass">
        <el-input type="password" v-model="ruleForm2.pass" auto-complete="off"></el-input>
    </el-form-item>
    <el-form-item label="确认密码" prop="checkPass">
        <el-input type="password" v-model="ruleForm2.checkPass" auto-complete="off"></el-input>
    </el-form-item>
    <div class="warn" v-show="backstage_validate!==0">{{backstage_validate}}</div>
    <el-form-item>
        <el-button type="primary" @click="submitForm('ruleForm2')">提交</el-button>
        <el-button @click="resetForm('ruleForm2')">重置</el-button>
    </el-form-item>
</el-form>

                </div>
            </div>
        </el-main>
    </el-container>
</div>
</body>
<div>
    <?php echo '<script'; ?>
>
        new Vue({
            el:"#app",
                data() {
                    var checkAge = (rule, value, callback) => {
                        if (!value) {
                            return callback(new Error('手机号不能为空'));
                        }
                        setTimeout(() => {
                            if (!Number.isInteger(value)) {
                                callback(new Error('请输入数字值'));
                            } else {
                                if (value.toString().length >11) {
                                    callback(new Error('手机号不能超过11位'));
                                }
                                else if (!(/^1(3|4|5|7|8)\d{9}$/.test(value)))
                                {
                                    callback(new Error('手机号格式不正确'));
                                }
                                else {
                                    callback();
                                }
                            }
                        }, 1000);
                    };
                    var validatePass = (rule, value, callback) => {
                        if (value === '') {
                            callback(new Error('请输入密码'));
                        }
                        else if (value.length<8) {
                            callback(new Error('密码过短，请输入八位以上的密码!'))
                        }
                        else if (value.length>20) {
                            callback(new Error('密码过短，请输入二十位以内的密码!'))
                        }
                        else {
                            if (this.ruleForm2.checkPass !== '') {
                                this.$refs.ruleForm2.validateField('checkPass');
                            }
                            callback();
                        }
                    };
                    var validatePass2 = (rule, value, callback) => {
                        if (value === '') {
                            callback(new Error('请再次输入密码'));
                        } else if (value !== this.ruleForm2.pass) {
                            callback(new Error('两次输入密码不一致!'));
                        }
                         else {
                            callback();
                        }
                    };
                    return {
                        ruleForm2: {
                            pass: '',
                            checkPass: '',
                            age: '',

                        },
                        backstage_validate: "",
                        status:0,
                        rules2: {
                            pass: [
                                { validator: validatePass, trigger: 'blur' }
                            ],
                            checkPass: [
                                { validator: validatePass2, trigger: 'blur' }
                            ],
                            age: [
                                { validator: checkAge, trigger: 'blur' }
                            ]
                        }
                    };
                },
                methods: {
                    submitForm(formName) {
                        this.$refs[formName].validate((valid) => {
                            if (valid) {
                                var params = new URLSearchParams();
                                params.append('u_passord', this.ruleForm2.pass);
                                params.append('u_phone', this.ruleForm2.age);
                                axios.post('http://localhost/php/day10/index.php?control=user&&action=doReg', params)
                                    .then( (res)=> {
                                        this.status=res.data.status;
                                        this.backstage_validate=res.data.massage;
                                        console.log(res);
                                        if (this.status===11)
                                        {
                                            setTimeout( () =>{
                                                location.href=res.data.data;
                                            },5000)
                                        }
                                    })
                                    .catch(function (error) {
                                        console.log(error);
                                    });
                            } else {
                                console.log('error submit!!');
                                return false;
                            }
                        });
                    },
                    resetForm(formName) {
                        this.$refs[formName].resetFields();
                    },

                },
            mounted: function()
            {

            }

        })

    <?php echo '</script'; ?>
>
</div>
</html><?php }
}
