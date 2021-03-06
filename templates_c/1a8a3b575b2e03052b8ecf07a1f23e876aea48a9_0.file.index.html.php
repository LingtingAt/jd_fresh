<?php
/* Smarty version 3.1.30, created on 2018-08-04 03:30:06
  from "D:\wamp64\www\php\day10\view\goods\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b651dbe1906c9_12123343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a8a3b575b2e03052b8ecf07a1f23e876aea48a9' => 
    array (
      0 => 'D:\\wamp64\\www\\php\\day10\\view\\goods\\index.html',
      1 => 1533304476,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b651dbe1906c9_12123343 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>京东生鲜 - 甄选优质美食  冷链新鲜送达</title>

    <?php echo '<script'; ?>
 src="https://cdn.bootcss.com/jquery/3.3.1/core.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.bootcss.com/vue/2.5.17-beta.0/vue.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://unpkg.com/element-ui/lib/index.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" >


</head>
<style>
    *{
        margin: 0;
        padding: 0
    }
    .container{position: relative;}
    .container .row{background: url(static/image/fresh_seckill_head_bg.png) 0 0 no-repeat;height: 100px;}
    .container .row .col-md-2{padding: 40px 0 16px 60px;}
    .container .row .titles{font-size: 18px;color: #909090;}
    .container .row .time{font-size: 14px;color: #909090;}

    .aaa{color: #00c65d !important;}
    /*--------------第二部分------------------  */

    .container .second{
        height: 432px;
        background: #fff;
        margin: 0px -15px;
        border: 10px solid #646464;
        position: relative;
        border-top: none;
    }
    .second .control_1{
        width: 20px;
        height: 50px;
        background-color: #ccc;
        color: #fff;
        font-size: 20px;
        font-family: simsun;
        text-align: center;
        line-height: 50px;
        position: absolute;
        top: 50%
    }
    .second .control_2{
        width: 20px;
        height: 50px;
        background-color: #ccc;
        color: #fff;
        font-size: 20px;
        font-family: simsun;
        text-align: center;
        line-height: 50px;
        position: absolute;
        top: 50%;
        right: 0
    }
    .container .second .bj{
        background: url(tp/fresh_seckill_bg_l.png);
        position: absolute;
        left: -150px;
        bottom: 18px;
        width: 709px;
        height: 710px;
        z-index: -1;
    }

    .second .list_box{
        width: 220px;
        height: 345px;
        float: left;
        margin-top: 30px;
        position: relative;
    }
    .second .list_box:nth-child(5){
        margin-right: 10px;
    }
    .second .list_box:nth-child(10){
        margin-right: 10px;
    }
    .second .list_box:hover{
        box-shadow: 1px 1px 9px #666;
    }
    .second .list_box:hover .goods_item_btn{
        bottom: -10px;
    }
    .second  .list_box .ittem_price{
        position: absolute;
        top: -13px;
        left: 50%;
        margin-left: -90px;
        width: 180px;
        height: 30px;
        text-align: center;
        background: #ff541f;
        border-radius: 0 0 15px 15px;
        font-family: Arial;
    }
    .list_box .ittem_price .price_1{
        margin: 0 5px;
        font-size: 20px;
        color: #fff;
    }
    .list_box .ittem_price .price_2{
        margin: 0 5px;
        font-size: 14px;
        color: hsla(0,0%,100%,.5);
        text-decoration: line-through;
    }
    .list_box a img{
        margin: 42px 20px 13px 20px;
        width: 180px;
        height: 180px;
    }
    .list_box a .item_name{
        margin-bottom: 14px;
        height: 54px;
        line-height: 1.7;
        white-space: normal;
        font-size: 16px;
        color: #222;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        text-align: center;
    }
    .list_box a .item_progress_text{
        margin-bottom: 7px;
        font-size: 14px;
        color: #909090;
        text-align: center;
    }
    .list_box a .container{
        width: 100%;
        height: 40px;
        overflow: hidden;
        position: absolute;
        bottom: 0px
    }
    .list_box a .goods_item_btn{
        position: absolute;
        left: 0;
        bottom: -50px;
        width: 100%;
        transition: all 0.5s;
        line-height: 40px;
        text-align: center;
        font-size: 16px;
        background: #ff541f;
        color: #fff;
    }
    .second .lunbo_box{
        text-align: center;
    }
    .second .lunbo_box .lunbo_btn{
        display: inline-block;
        width: 8px;
        height: 8px;
        border:1px solid #33d17d;
        border-radius: 8px;
        margin: 0 6px;
    }
    .second .lunbo_box .cur{
        width: 24px;
        background: #33d17d;
    }
    /*------------------------幻灯片样式---------------------*/
    .second .hdp_show_box{
        width: 1110px;
        overflow: hidden;
        margin: 0 21px;
    }
    .second .hdp_show_box .hdp_box{
        width: 3325px;
        transition: all 1s;
        margin-top: 1px 0px;
    }
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
        width: 100%;
        position: fixed;
        top: 0;
        color: #999;
        background-color: #e3e4e5;
        text-align: center;
        line-height: 30px;
        height: 30px;
        font-size: 10px;
    }
    .el-main
    {
        position: absolute;
        top: 30px;
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
        width: 40%;
        float: left;
    }
    .header_right
    {
        display: flex;
        height: 100%;
        width: 60%;
        float: right;
    }
    .header_right div
    {
        margin: 0 10px;
        overflow: hidden;
        display: flex;
    }
    .login
    {
        color:#f30213 ;
    }
    *{margin: 0;padding: 0;transition: all .2s}
    .relative{position: relative}
    .flex{display: flex}
    .bg{width: 100%;height: auto;background-color: #f0f0f8;position: absolute;z-index: -2;}
    .bg_image_one{background-repeat: no-repeat;width: 331px;height: 199px;z-index: -1;left: -30px;top: 550px;position: absolute;background-image: url("http://static.360buyimg.com/mtd/pc/fresh_v3/1.0.0/home/images/sprite_fresh_bgs.png")}
    .content{width: 1190px;height: auto;margin: 0 auto;}
    .title{height:auto;margin: 0 0 60px 0;width: 100%;}
    .title_img{height: 44px; width: 100%;position: absolute;top: 70px}
    .title_content{width: 320px;height:auto;margin: 0 auto;}
    .title_content_chinese{color: #222;width: 100%;height: auto;margin: 50px 0 0 0;font-size: 28px;font-family: Microsoft YaHei;font-weight: 400;text-align: center;}
    .title_content_english{color: #222;font-size: 14px;text-align: center;font-family: cursive;}
    .title_img image{width: 100%;}
    .title_i{color: #909090;margin: 0 10px}
    .C{width: 100%;height: auto;position: relative}
    .C_one{    padding: 0 20px;width: 160px;height: 300px; background-image: url("http://img11.360buyimg.com/cms/jfs/t6868/56/1584301821/12315/9fe217a6/5982d8c6N279ff1cf.png")}
    .C_one_one{    margin-bottom: 10px;padding-top: 30px;height: 70px;font-size: 30px;color: #fff;overflow: hidden;}
    .C_one_two{    font-weight: bold;position: relative;height: 20px;font-size: 13px;color: #fff;white-space: nowrap;overflow: hidden;}
    .C_one_three{width: 50px;height: 4px;background-color: white;}
    .C_one_four{width: 100%;height: auto;margin-top: 30px;}
    .C_one_fours{margin: 0 9px 9px 0;padding: 0 7px;max-width: 132px;    height: 22px;line-height: 22px;text-align: center;font-size: 10px;color: #fff;border: 1px solid #ddd;background: none;background: rgba(247,247,251,.2);border-radius: 15px;overflow: hidden}
    .C_one_five{float: left;margin: 0 9px 9px 0;padding: 0 13px;width: 100%;      height: 22px;line-height: 22px;font-size: 14px;color:   #00c65d;border: 1px solid #ddd;background: white;border-radius: 15px;overflow: hidden}
    .C_one_five:after{content:">";float: right}
    .C_two{position: relative;padding: 30px 20px 0;width: 191.5px;height: 250px;background-color: white;}
    .C_two:hover{padding-top: 25px;}
    .C_two:hover .C_two_introduce{color: #00c65d;}
    .C_two_image{width: 100%}
    .C_two_introduce{position:absolute;bottom: 29px;height: 40px;font-size: 14px;color: #222;text-align: left;overflow: hidden;text-overflow: ellipsis;font-weight: lighter;}
    .C_two_price{  position: absolute;bottom:0;  font-size: 18px;color: #ff541f;}
    .C_three{width: 115px;border-left: 1px solid #f0f0f8;    background-color: white; line-height: 115px;}
    .C_three:hover .C_three_image{margin-top: -10px;}
    .C_three_image{width: 100%;}
    .empty-line{width: 100%;height: 42px;}
    .lieb{list-style-type: none;font-size: 20px}
    .lieb li{float: left;margin: 20px;left: 30%;position: relative;}

    .chid{width: 800px;height:300px;display:flex;position: relative;left: 36%;top: -147%;background-color: #f2f2f2;border-radius: 0 0 50px 0;}
    .chid img{height: 150px;margin-left:50px;}
    .first{text-align: center;font-size: 20px;background:url(static/image/99.jpg);background-position: 50% 0}

    .second{text-align: center;font-size: 10px}
    .third{position: relative;left: 18.8%;}
    .four{}
    .five{width: 1260px;height: 430px;position: relative;top: 70px;    margin: 0 auto;}
    .six{z-index: 777;position: relative;}
    .seven{left:34%;position: relative;top:-300px}
    .seven li{float: left;list-style: none;margin-left: 4%;}
</style>
<body>

<div id="app">
    <el-container>
        <el-header height="30px">
            <div class="header">
            <div class="header_left" >
                <div>京东首页</div>
                <div>北京</div>
            </div>
            <div class="header_right">
                <div><a class="login" href="http://localhost/php/day10/index.php?control=user&&action=login">你好请登录</a><a style="display: block;margin: 0 0 0 5px;" href="http://localhost/php/day10/index.php?control=user&&action=register">免费注册</a></div>
                <div>我的订单</div>
                <div>我的京东<div class="fa fa-angle-down"style="line-height: 30px"></div></div>
                <div>京东会员</div>
                <div>企业采购<div class="fa fa-angle-down"style="line-height: 30px"></div></div>
                <div>客户服务<div class="fa fa-angle-down"style="line-height: 30px"></div></div>
                <div>网站导航<div class="fa fa-angle-down"style="line-height: 30px"></div></div>
                <div>手机京东</div>
            </div>
            </div>
        </el-header>
        <el-main style="background-color: #f0f0f8">
            <div class="container view">
            <div class="row">

                <div @click="change_goods(0)" class="col-md-2">
                    <div class="titles" :class="{'aaa':box_code == 0}">早市抢鲜</div>
                    <div class="time" :class="{'aaa':box_code == 0}">10:00-17:00</div>
                </div>
                <div @click="change_goods(1)" class="col-md-2">
                    <div class="titles" :class="{'aaa':box_code == 1}">午市预告</div>
                    <div class="time" :class="{'aaa':box_code == 1}">17:00开始</div>
                </div>
                <div @click="change_goods(2)" class="col-md-2">
                    <div class="titles" :class="{'aaa':box_code == 2}">晚市预告</div>
                    <div class="time" :class="{'aaa':box_code == 2}">22:00开始</div>
                </div>

            </div>
            <!-- 	---------------二部分--------------------	 -->
            <div class="second">
                <i class="bj"></i>
                <div class="control_1" @click="last()"><</div>

                <div class="hdp_show_box">
                    <div class="hdp_box" v-if="box_code == 0" :style="
				'margin-left:'+move_px[box_code]">

                        <div class="list_box" v-for="n in 15">
                            <a href="http://localhost/php/day10/index.php?control=goods&&action=information">
                                <div class="ittem_price">
                                    <span class="price_1">￥9.90</span>
                                    <span class="price_2">￥29.9</span>
                                </div>
                                <img src="static/image/5af10e1fN5901e42f.jpg!q80.webp.jpg">
                                <p class="item_name">爱拼鲜生 夏橙脐橙 6个装 单果约150-200g 橙子</p>
                                <div class="item_progress">
                                    <p class="item_progress_text">好评率98%</p>
                                </div>
                                <div class="container">
                                    <p class="goods_item_btn">立即抢购</p>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="hdp_show_box">
                    <div class="hdp_box"  v-if="box_code == 1" :style="
				'margin-left:'+move_px[box_code]">

                        <div class="list_box" v-for="n in 15">
                            <a href="http://localhost/php/day10/index.php?control=goods&&action=information">
                                <div class="ittem_price">
                                    <span class="price_1">￥9.90</span>
                                    <span class="price_2">￥29.9</span>
                                </div>
                                <img src="static/image/5b3dfd12N95d28960.jpg!q80.webp.jpg">
                                <p class="item_name">爱拼鲜生 夏橙脐橙 6个装 单果约150-200g 橙子</p>
                                <div class="item_progress">
                                    <p class="item_progress_text">好评率98%</p>
                                </div>
                                <div class="container">
                                    <p class="goods_item_btn">立即抢购</p>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="hdp_show_box">
                    <div class="hdp_box" v-if="box_code == 2" :style="
				'margin-left:'+move_px[box_code]">

                        <div class="list_box" v-for="n in 15">
                            <a href="http://localhost/php/day10/index.php?control=goods&&action=information">
                                <div class="ittem_price">
                                    <span class="price_1">￥9.90</span>
                                    <span class="price_2">￥29.9</span>
                                </div>
                                <img src="static/image/5953881bN00ea3a8e.jpg!q80.webp.jpg">
                                <p class="item_name">爱拼鲜生 夏橙脐橙 6个装 单果约150-200g 橙子</p>
                                <div class="item_progress">
                                    <p class="item_progress_text">好评率98%</p>
                                </div>
                                <div class="container">
                                    <p class="goods_item_btn">立即抢购</p>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="control_2" @click="next()">></div>
                <div class="lunbo_box">

                    <div class="lunbo_btn" v-for="n in 3" @click="move(n)" :class="{'cur':change_num_a[box_code] == n-1}">
                    </div>
                </div>

            </div>
            </div>
            <div class="zui-wai" >
                <div class="first">
                    身 / 临 / 食 / 感
                </div>
                <div class="second">
                    INSPIRATION FRESH
                </div>
                <div class="four">
                    <ul class="lieb">
                        <li>精选礼盒</li>
                        <li>火锅诱惑</li>
                        <li>深夜食堂</li>
                        <li>进口美食</li>
                    </ul>


                    <div class="five">
                        <div style="height: 100%;top: 100%;background-color: black ;opacity: 0.6;border-radius: 150px 0 0 150px"></div>
                        <li style="list-style: none;right: 30%;position: relative;top: 15%;color: white;font-size: 25px;"> 进口美食</li>
                        <li style="list-style: none;right: 29%;position: relative;bottom: 20%;color: white;font-size: 150px;">_</li>
                        <li style="list-style: none;left: 10%;position: relative;bottom: 20%;color: white;font-size: 15px">
                            足不出户吃遍全球美味，尽享品质生活</li>
                        <div class="chid">
                            <img src="static/image/ddd.jpg">
                            <img src="static/image/kkk.jpg">
                            <img src="static/image/lll.jpg">
                            <img src="static/image/zzz.jpg">
                        </div>
                    </div>
                    <div class="six"><img src="static/image/000.png"></div>
                </div><div class="seven">
                <li><a href="#"> 春禾秋牧 加拿大上脑</br>牛肉片 300g 谷饲AAA级安</br><span style="color: #FFD306;font-size: 20px">  298.00</span></a></li>
                <li><a href="#">【活鲜】Gfresh 加拿</br>大龙虾 450g-550g 1只 海</br><span style="color: #FFD306; font-size: 20px">  ¥298.00</span></a></li>
                <li><a href="#">爱氏晨曦（Arla）</br>淡奶油 200ml 丹麦进口</br><span style="color: #FFD306;font-size: 20px">  ¥298.00</span></a></li>
                <li><a href="#">圃美多 香辣炒年糕</br> 480g 方便菜</br><span style="color: #FFD306;font-size: 20px">  ¥298.00</span></a></li>
            </div>
                <div>
                    <li style="list-style: none;color: white;font-size: 25px;top: 30%;position: absolute;left: 10%"> 进口美食</li>
                    <li style="list-style: none;color: white;font-size: 150px;bottom:55%;position: absolute;left: 10%">_</li>
                    <li style="list-style: none;color: white;font-size: 15px;top: 45%;position: absolute;left: 10%">
                        足不出户吃遍全球美味，尽享品质生活</li>
                </div>
            </div>
            <div class="content">
                <div class="title">
                    <div class="title_img"><img src="static/image/fresh_mod_head_bg.png"> </div>
                    <div class="title_content">
                        <div class="title_content_chinese">京<i class="title_i">/</i>东<i class="title_i">/</i>生<i class="title_i">/</i>鲜</div>
                        <div class="title_content_english">JD FRESH</div>
                    </div>
                </div>
                <div class="relative">
                    <div class="bg_image_one"></div>
                    <div class="C flex" >
                        <div class="C_one">
                            <div class="C_one_one">新鲜水果</div>
                            <div class="C_one_two">应时而采，新鲜特供</div>
                            <div class="C_one_three"></div>
                            <div class="C_one_four">
                                <div class="flex">
                                    <div class="C_one_fours">车厘子</div>
                                    <div class="C_one_fours">猕猴桃</div>
                                </div>
                                <div class="flex">
                                    <div class="C_one_fours">进口水果</div>
                                    <div class="C_one_fours">橙子</div>
                                </div>
                                <div class="flex">
                                    <div class="C_one_fours">芒果</div>
                                    <div class="C_one_fours">苹果</div>
                                </div>
                            </div>
                            <div class="C_one_five">更多水果</div>
                        </div>
                        <div><img src="http://img10.360buyimg.com/babel/jfs/t21754/57/2277969605/75275/5b9c3164/5b4daa68Nc4e84ccc.jpg"></div>
                        <div><img src="http://img10.360buyimg.com/babel/jfs/t21664/245/2283527152/74293/148a9d13/5b4edc58N0e3604f3.png"></div>
                    </div>
                    <div class="C flex" >
                        <div class="C_two">
                            <img class="C_two_image" src="http://img10.360buyimg.com/babel/s150x150_jfs/t22600/70/923906211/386931/42ffee11/5b483535N29ff3814.jpg">
                            <div class="C_two_introduce">加拿大进口车厘子 1磅装  果径约26-28mm J级 新鲜水果</div>
                            <div class="C_two_price">￥48.80</div>
                        </div>
                        <div class="C_two">
                            <img class="C_two_image" src="http://img11.360buyimg.com/babel/s150x150_jfs/t7603/219/3939126106/187214/3a6412c0/59ff1c82Na661819a.jpg">
                            <div class="C_two_introduce">陕西大荔冬枣 500g装 单果约10-16g 新鲜水果" title="陕西大荔冬枣 500g装 单果约10-16g 新鲜水果</div>
                            <div class="C_two_price">￥18.90</div>
                        </div>
                        <div class="C_two">
                            <img class="C_two_image" src="http://img12.360buyimg.com/babel/s150x150_jfs/t9001/131/2322306862/484470/cbc01279/59cb83bdNf0483254.jpg">
                            <div class="C_two_introduce">西州蜜哈密瓜 1粒装 约1.25-1.75kg 新鲜水果</div>
                            <div class="C_two_price">￥19.90</div>
                        </div>
                        <div class="C_two">
                            <img class="C_two_image" src="http://img13.360buyimg.com/babel/s150x150_jfs/t21817/143/1180033484/122175/172bf408/5b21e75cN7fb27636.jpg">
                            <div class="C_two_introduce">苏洪鲜食 越南红心火龙果6个 单果约350g 新鲜水果 红肉</div>
                            <div class="C_two_price">￥39</div>
                        </div>
                        <div class="C_two">
                            <img class="C_two_image" src="http://img14.360buyimg.com/babel/s150x150_jfs/t21190/208/472114135/458297/4e4a717d/5b0f4eb7N6984b8df.jpg">
                            <div class="C_two_introduce">顺丰空运 寻天果蔬 平谷大桃 桃子 新鲜水蜜桃 水果 12个约2.5kg</div>
                            <div class="C_two_price">￥68.00</div>
                        </div>
                        <div class="C_two">
                            <img class="C_two_image" src="http://img10.360buyimg.com/babel/s150x150_jfs/t6163/88/1423610444/541585/f52df4fc/5951ccb6N4d314761.jpg">
                            <div class="C_two_introduce">灵宝红啤梨2.5Kg 梨子鸭梨啤酒梨 太婆梨可以吸的梨子</div>
                            <div class="C_two_price">￥29.90</div>
                        </div>
                    </div>
                    <div class="C flex ">
                        <div class="C_three"><img class="C_three_image" src="http://img14.360buyimg.com/cms/jfs/t9022/144/55129297/22936/d533ae7f/599fc8bcN00e07d57.jpg"></div>
                        <div class="C_three"><img class="C_three_image" src="http://img11.360buyimg.com/cms/jfs/t17473/188/565862012/14916/2398b200/5a96808eN804d2887.jpg"></div>
                        <div class="C_three"><img class="C_three_image" src="http://img13.360buyimg.com/cms/jfs/t9142/258/62617312/2714/b3140b77/599fc917N299f33c3.jpg"></div>
                        <div class="C_three"><img class="C_three_image" src="http://img14.360buyimg.com/cms/jfs/t7378/39/1694938861/2622/f5a1916a/599fc95cN3d61f44c.jpg"></div>
                        <div class="C_three"><img class="C_three_image" src="http://img14.360buyimg.com/cms/jfs/t9022/144/55129297/22936/d533ae7f/599fc8bcN00e07d57.jpg"></div>
                        <div class="C_three"><img class="C_three_image" src="http://img14.360buyimg.com/cms/jfs/t9022/144/55129297/22936/d533ae7f/599fc8bcN00e07d57.jpg"></div>
                        <div class="C_three"><img class="C_three_image" src="http://img14.360buyimg.com/cms/jfs/t9022/144/55129297/22936/d533ae7f/599fc8bcN00e07d57.jpg"></div>
                        <div class="C_three"><img class="C_three_image" src="http://img14.360buyimg.com/cms/jfs/t9022/144/55129297/22936/d533ae7f/599fc8bcN00e07d57.jpg"></div>
                        <div class="C_three"><img class="C_three_image" src="http://img14.360buyimg.com/cms/jfs/t9022/144/55129297/22936/d533ae7f/599fc8bcN00e07d57.jpg"></div>
                        <div class="C_three"><img class="C_three_image" src="http://img14.360buyimg.com/cms/jfs/t9022/144/55129297/22936/d533ae7f/599fc8bcN00e07d57.jpg"></div>

                    </div>
                </div>
                <div class="empty-line"></div>
                <div>
                    <div class="C flex" >
                        <div class="C_one">
                            <div class="C_one_one">新鲜水果</div>
                            <div class="C_one_two">应时而采，新鲜特供</div>
                            <div class="C_one_three"></div>
                            <div class="C_one_four">
                                <div class="flex">
                                    <div class="C_one_fours">车厘子</div>
                                    <div class="C_one_fours">猕猴桃</div>
                                </div>
                                <div class="flex">
                                    <div class="C_one_fours">进口水果</div>
                                    <div class="C_one_fours">橙子</div>
                                </div>
                                <div class="flex">
                                    <div class="C_one_fours">芒果</div>
                                    <div class="C_one_fours">苹果</div>
                                </div>
                            </div>
                            <div class="C_one_five">更多水果</div>
                        </div>
                        <div><img src="http://img10.360buyimg.com/babel/jfs/t24475/219/676663897/149574/f9f053e/5b3c92a5Na6d056d8.jpg"></div>
                        <div><img src="http://img10.360buyimg.com/babel/jfs/t21016/326/1692017523/46884/2d6f90c5/5b30971aN42abb0da.png"></div>
                    </div>
                    <div class="C flex" >
                        <div class="C_two">
                            <img class="C_two_image" src="http://img10.360buyimg.com/babel/s150x150_jfs/t22600/70/923906211/386931/42ffee11/5b483535N29ff3814.jpg">
                            <div class="C_two_introduce">加拿大进口车厘子 1磅装  果径约26-28mm J级 新鲜水果</div>
                            <div class="C_two_price">￥48.8</div>
                        </div>
                        <div class="C_two">
                            <img class="C_two_image" src="http://img10.360buyimg.com/babel/s150x150_jfs/t22600/70/923906211/386931/42ffee11/5b483535N29ff3814.jpg">
                            <div class="C_two_introduce">加拿大进口车厘子 1磅装  果径约26-28mm J级 新鲜水果</div>
                            <div class="C_two_price">￥48.8</div>
                        </div>
                        <div class="C_two">
                            <img class="C_two_image" src="http://img10.360buyimg.com/babel/s150x150_jfs/t22600/70/923906211/386931/42ffee11/5b483535N29ff3814.jpg">
                            <div class="C_two_introduce">加拿大进口车厘子 1磅装  果径约26-28mm J级 新鲜水果</div>
                            <div class="C_two_price">￥48.8</div>
                        </div>
                        <div class="C_two">
                            <img class="C_two_image" src="http://img10.360buyimg.com/babel/s150x150_jfs/t22600/70/923906211/386931/42ffee11/5b483535N29ff3814.jpg">
                            <div class="C_two_introduce">加拿大进口车厘子 1磅装  果径约26-28mm J级 新鲜水果</div>
                            <div class="C_two_price">￥48.8</div>
                        </div>
                        <div class="C_two">
                            <img class="C_two_image" src="http://img10.360buyimg.com/babel/s150x150_jfs/t22600/70/923906211/386931/42ffee11/5b483535N29ff3814.jpg">
                            <div class="C_two_introduce">加拿大进口车厘子 1磅装  果径约26-28mm J级 新鲜水果</div>
                            <div class="C_two_price">￥48.8</div>
                        </div>
                        <div class="C_two">
                            <img class="C_two_image" src="http://img10.360buyimg.com/babel/s150x150_jfs/t22600/70/923906211/386931/42ffee11/5b483535N29ff3814.jpg">
                            <div class="C_two_introduce">加拿大进口车厘子 1磅装  果径约26-28mm J级 新鲜水果</div>
                            <div class="C_two_price">￥48.8</div>
                        </div>
                    </div>
                    <div class="C flex" >
                        <div class="C_three"><img class="C_three_image" src="http://img14.360buyimg.com/cms/jfs/t9022/144/55129297/22936/d533ae7f/599fc8bcN00e07d57.jpg"></div>
                        <div class="C_three"><img class="C_three_image" src="http://img14.360buyimg.com/cms/jfs/t9022/144/55129297/22936/d533ae7f/599fc8bcN00e07d57.jpg"></div>
                        <div class="C_three"><img class="C_three_image" src="http://img14.360buyimg.com/cms/jfs/t9022/144/55129297/22936/d533ae7f/599fc8bcN00e07d57.jpg"></div>
                        <div class="C_three"><img class="C_three_image" src="http://img14.360buyimg.com/cms/jfs/t9022/144/55129297/22936/d533ae7f/599fc8bcN00e07d57.jpg"></div>
                        <div class="C_three"><img class="C_three_image" src="http://img14.360buyimg.com/cms/jfs/t9022/144/55129297/22936/d533ae7f/599fc8bcN00e07d57.jpg"></div>
                        <div class="C_three"><img class="C_three_image" src="http://img14.360buyimg.com/cms/jfs/t9022/144/55129297/22936/d533ae7f/599fc8bcN00e07d57.jpg"></div>
                        <div class="C_three"><img class="C_three_image" src="http://img14.360buyimg.com/cms/jfs/t9022/144/55129297/22936/d533ae7f/599fc8bcN00e07d57.jpg"></div>
                        <div class="C_three"><img class="C_three_image" src="http://img14.360buyimg.com/cms/jfs/t9022/144/55129297/22936/d533ae7f/599fc8bcN00e07d57.jpg"></div>
                        <div class="C_three"><img class="C_three_image" src="http://img14.360buyimg.com/cms/jfs/t9022/144/55129297/22936/d533ae7f/599fc8bcN00e07d57.jpg"></div>
                        <div class="C_three"><img class="C_three_image" src="http://img14.360buyimg.com/cms/jfs/t9022/144/55129297/22936/d533ae7f/599fc8bcN00e07d57.jpg"></div>

                    </div>
                </div>
                <div class="empty-line"></div>
                <div>
                    <div class="C flex" >
                        <div class="C_one">
                            <div class="C_one_one">新鲜水果</div>
                            <div class="C_one_two">应时而采，新鲜特供</div>
                            <div class="C_one_three"></div>
                            <div class="C_one_four">
                                <div class="flex">
                                    <div class="C_one_fours">车厘子</div>
                                    <div class="C_one_fours">猕猴桃</div>
                                </div>
                                <div class="flex">
                                    <div class="C_one_fours">进口水果</div>
                                    <div class="C_one_fours">橙子</div>
                                </div>
                                <div class="flex">
                                    <div class="C_one_fours">芒果</div>
                                    <div class="C_one_fours">苹果</div>
                                </div>
                            </div>
                            <div class="C_one_five">更多水果</div>
                        </div>
                        <div><img src="http://img10.360buyimg.com/babel/jfs/t21754/57/2277969605/75275/5b9c3164/5b4daa68Nc4e84ccc.jpg"></div>
                        <div><img src="http://img10.360buyimg.com/babel/jfs/t21664/245/2283527152/74293/148a9d13/5b4edc58N0e3604f3.png"></div>
                    </div>
                    <div class="C flex" >
                        <div class="C_two">
                            <img class="C_two_image" src="http://img10.360buyimg.com/babel/s150x150_jfs/t22600/70/923906211/386931/42ffee11/5b483535N29ff3814.jpg">
                            <div class="C_two_introduce">加拿大进口车厘子 1磅装  果径约26-28mm J级 新鲜水果</div>
                            <div class="C_two_price">￥48.8</div>
                        </div>
                        <div class="C_two">
                            <img class="C_two_image" src="http://img10.360buyimg.com/babel/s150x150_jfs/t22600/70/923906211/386931/42ffee11/5b483535N29ff3814.jpg">
                            <div class="C_two_introduce">加拿大进口车厘子 1磅装  果径约26-28mm J级 新鲜水果</div>
                            <div class="C_two_price">￥48.8</div>
                        </div>
                        <div class="C_two">
                            <img class="C_two_image" src="http://img10.360buyimg.com/babel/s150x150_jfs/t22600/70/923906211/386931/42ffee11/5b483535N29ff3814.jpg">
                            <div class="C_two_introduce">加拿大进口车厘子 1磅装  果径约26-28mm J级 新鲜水果</div>
                            <div class="C_two_price">￥48.8</div>
                        </div>
                        <div class="C_two">
                            <img class="C_two_image" src="http://img10.360buyimg.com/babel/s150x150_jfs/t22600/70/923906211/386931/42ffee11/5b483535N29ff3814.jpg">
                            <div class="C_two_introduce">加拿大进口车厘子 1磅装  果径约26-28mm J级 新鲜水果</div>
                            <div class="C_two_price">￥48.8</div>
                        </div>
                        <div class="C_two">
                            <img class="C_two_image" src="http://img10.360buyimg.com/babel/s150x150_jfs/t22600/70/923906211/386931/42ffee11/5b483535N29ff3814.jpg">
                            <div class="C_two_introduce">加拿大进口车厘子 1磅装  果径约26-28mm J级 新鲜水果</div>
                            <div class="C_two_price">￥48.8</div>
                        </div>
                        <div class="C_two">
                            <img class="C_two_image" src="http://img10.360buyimg.com/babel/s150x150_jfs/t22600/70/923906211/386931/42ffee11/5b483535N29ff3814.jpg">
                            <div class="C_two_introduce">加拿大进口车厘子 1磅装  果径约26-28mm J级 新鲜水果</div>
                            <div class="C_two_price">￥48.8</div>
                        </div>
                    </div>
                    <div class="C flex" >
                        <div class="C_three"><img class="C_three_image" src="http://img14.360buyimg.com/cms/jfs/t9022/144/55129297/22936/d533ae7f/599fc8bcN00e07d57.jpg"></div>
                        <div class="C_three"><img class="C_three_image" src="http://img14.360buyimg.com/cms/jfs/t9022/144/55129297/22936/d533ae7f/599fc8bcN00e07d57.jpg"></div>
                        <div class="C_three"><img class="C_three_image" src="http://img14.360buyimg.com/cms/jfs/t9022/144/55129297/22936/d533ae7f/599fc8bcN00e07d57.jpg"></div>
                        <div class="C_three"><img class="C_three_image" src="http://img14.360buyimg.com/cms/jfs/t9022/144/55129297/22936/d533ae7f/599fc8bcN00e07d57.jpg"></div>
                        <div class="C_three"><img class="C_three_image" src="http://img14.360buyimg.com/cms/jfs/t9022/144/55129297/22936/d533ae7f/599fc8bcN00e07d57.jpg"></div>
                        <div class="C_three"><img class="C_three_image" src="http://img14.360buyimg.com/cms/jfs/t9022/144/55129297/22936/d533ae7f/599fc8bcN00e07d57.jpg"></div>
                        <div class="C_three"><img class="C_three_image" src="http://img14.360buyimg.com/cms/jfs/t9022/144/55129297/22936/d533ae7f/599fc8bcN00e07d57.jpg"></div>
                        <div class="C_three"><img class="C_three_image" src="http://img14.360buyimg.com/cms/jfs/t9022/144/55129297/22936/d533ae7f/599fc8bcN00e07d57.jpg"></div>
                        <div class="C_three"><img class="C_three_image" src="http://img14.360buyimg.com/cms/jfs/t9022/144/55129297/22936/d533ae7f/599fc8bcN00e07d57.jpg"></div>
                        <div class="C_three"><img class="C_three_image" src="http://img14.360buyimg.com/cms/jfs/t9022/144/55129297/22936/d533ae7f/599fc8bcN00e07d57.jpg"></div>

                    </div>
                </div>
            </div>


            <el-footer>Footer</el-footer>
        </el-main>

    </el-container>
</div>
<?php echo '<script'; ?>
>
    new Vue({
        el: '#app',
        data:{
            box_code:0,//当前显示的商品盒子代号
            move_px:[0,0,0],//移动的像素
            change_num_a:[0,0,0],//切换的次数
            box_width:-1110,//盒子的宽度
        },
        methods:{
                change_goods(code){
                    this.box_code = code
                },
                last(){
                    num = --this.change_num_a[this.box_code] <0 ? 2 : this.change_num_a[this.box_code]

                    this.change_num_a = this.reset_change_a(num)

                    // 移动的距离 = 切换的次数 * 盒子的宽度
                    this.move_px[this.box_code] = this.change_num_a[this.box_code] * this.box_width + "px"
                },
                next(){
                    num = ++this.change_num_a[this.box_code] >2 ? 0 : this.change_num_a[this.box_code]

                    this.change_num_a = this.reset_change_a(num)

                    // 移动的距离 = 切换的次数 * 盒子的宽度
                    this.move_px[this.box_code] = this.change_num_a[this.box_code] * this.box_width + "px"
                },
                move(num)
                {
                    --num;

                    this.change_num_a = this.reset_change_a(num);

                    console.log(this.change_num_a);
                    // 数组双向绑定，只有删除和添加的时候，才会双向更新
                    // 气泡切换
                    this.move_px[this.box_code] = num * this.box_width + "px";
                },
                reset_change_a(num)
                {
                    // 重置数组，为了视图层双向更新
                    let tmp_a = this.change_num_a;
                    this.change_num_a = [];

                    tmp_a[this.box_code] = num;
                    return tmp_a
                }

            }

    })
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
