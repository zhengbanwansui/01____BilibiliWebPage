<!DOCTYPE html>
<html>
    <head>
        <title>哔哩哔哩 (゜-゜)つロ 干杯~-bilibili</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../Texture/favicon.ico">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <!-- 前端
        javascript实现网页动态效果         -->
        <!-- 后端
        PHP连接数据库 && MySQL数据库的使用 -->
        <div id="mainpage">
            
            <!-- 网页顶栏 -->
            <div id="mainhead">
                <div id="mainhead_left">
                        <ul style="margin:0px; list-style: none;">
                            <li class="my_li2first"><img style="width:16px; height: 16px;float: left" src="../Texture/favicon.ico" alt=""/><a class="my_a" href="../public_html/">主站</a></li>
                            <li class="my_li2"><a class="my_a" href="https://h.bilibili.com/">画友</a></li>
                            <li class="my_li2"><a class="my_a" href="https://game.bilibili.com/">游戏中心</a></li>
                            <li class="my_li2"><a class="my_a" href="https://live.bilibili.com/">直播</a></li>
                            <li class="my_li2"><a class="my_a" href="https://show.bilibili.com/platform/home.html?msource=pc_web">会员购</a></li>
                            <li class="my_li2"><a class="my_a" href="https://bml.bilibili.com/">BLM</a></li>
                            <li class="my_li2"><a class="my_a" href="https://bw.bilibili.com/">BW</a></li>
                            <li class="my_li2"><img style="width:18px; height: 18px;float: left" src="../Texture/appicon.png" alt=""/><a class="my_a" href="https://app.bilibili.com/">下载APP</a></li>
                        </ul>
                </div>
                <div id="mainhead_right">
                    <div id="mainhead_right_up">
                        <ul style=" margin:0px; list-style:none; ">
                            <li class="my_li"><img class="touxiang_weidenglu" src="../Texture/头像未登录.png" alt="图片"/></li>
                            <li class="my_li2"><a class="my_a" href="https://www.bilibili.com/account/history">历史</a></li>
                            <li class="my_litougao"><a class="my_atougao" href="https://passport.bilibili.com/login">投&nbsp;稿</a></li>
                        </ul>
                    </div>
                    <div id="mainhead_right_down">
                        <a class="my_apaihangbang" href="https://www.bilibili.com/ranking"><img style="width:16px; height:16px;margin:8px;margin-right:0px;margin-left:5px;float:left;" src="../Texture/排行榜.png" alt=""/>排行榜</a>
                        <form action="http://localhost/BILIBILI_Php_Service/">
                            <input class="my_inputsousuokuang" type="text" name="searchinfo">
                            <input class="my_inputsousuo" type="submit" value="">
                        </form>
                    </div>
                </div>
            </div>
            
<!--             网页左栏 
            <div style="" id="mainleft">
                
            </div>-->
            
            <!-- 网页中间栏 -->
            <div id="maincenterFather">
            <div id="maincenter">
                
                <!-- 栏目标题栏 -->
                <div id="maincenter_top_menu">
                    <ul style="margin:0px;padding: 0px;">
                        <li class="my_limenutop_main1">
                            <div class="my_limenutop_main1_divupanddown">
                                <i class="shouyexiaofangzi"></i>
                            </div>
                            <div class="my_limenutop_main1_divupanddown">
                                <a class="my_amenutop_main1" href="../public_html/index.php">
                                首页
                                </a>
                            </div>
                        </li>
                        <li class="my_limenutop_main1">
                            <div class="my_limenutop_main1_divupanddown">
                                <span class="my_limenutop_main1_divup_span">999+</span>
                            </div>
                            <div class="my_limenutop_main1_divupanddown">
                                <a class="my_amenutop_main1" href="../public_html/donghua1.php">
                                动画
                                </a>
                            </div>
                        </li>
                        <li class="my_limenutop_main1">
                            <div class="my_limenutop_main1_divupanddown">
                                <span class="my_limenutop_main1_divup_span">999+</span>
                            </div>
                            <div class="my_limenutop_main1_divupanddown">
                                <a class="my_amenutop_main1" href="../public_html/fanju2.php">
                                番剧
                                </a>
                            </div>
                        </li>
                        <li class="my_limenutop_main1">
                            <div class="my_limenutop_main1_divupanddown">
                                <span class="my_limenutop_main1_divup_span">999+</span>
                            </div>
                            <div class="my_limenutop_main1_divupanddown">
                                <a class="my_amenutop_main1" href="../public_html/guochuang3.php">
                                国创
                                </a>
                            </div>
                        </li>
                        <li class="my_limenutop_main1">
                            <div class="my_limenutop_main1_divupanddown">
                                <span class="my_limenutop_main1_divup_span">999+</span>
                            </div>
                            <div class="my_limenutop_main1_divupanddown">
                                <a class="my_amenutop_main1" href="../public_html/index.php">
                                    音乐
                                </a>
                            </div>
                        </li>
                        <li class="my_limenutop_main1">
                            <div class="my_limenutop_main1_divupanddown">
                                <span class="my_limenutop_main1_divup_span">999+</span>
                            </div>
                            <div class="my_limenutop_main1_divupanddown">
                                <a class="my_amenutop_main1" href="../public_html/index.php">
                                    舞蹈
                                </a>
                            </div>
                        </li>
                        <li class="my_limenutop_main1">
                            <div class="my_limenutop_main1_divupanddown">
                                <span class="my_limenutop_main1_divup_span">999+</span>
                            </div>
                            <div class="my_limenutop_main1_divupanddown">
                                <a class="my_amenutop_main1" href="../public_html/index.php">
                                    游戏
                                </a>
                            </div>
                        </li>
                        <li class="my_limenutop_main1">
                            <div class="my_limenutop_main1_divupanddown">
                                <span class="my_limenutop_main1_divup_span">999+</span>
                            </div>
                            <div class="my_limenutop_main1_divupanddown">
                                <a class="my_amenutop_main1" href="../public_html/index.php">
                                    科技
                                </a>
                            </div>
                        </li>
                        <li class="my_limenutop_main1">
                            <div class="my_limenutop_main1_divupanddown">
                                <span class="my_limenutop_main1_divup_span">999+</span>
                            </div>
                            <div class="my_limenutop_main1_divupanddown">
                                <a class="my_amenutop_main1" href="../public_html/index.php">
                                    生活
                                </a>
                            </div>
                        </li>
                        <li class="my_limenutop_main1">
                            <div class="my_limenutop_main1_divupanddown">
                                <span class="my_limenutop_main1_divup_span">999+</span>
                            </div>
                            <div class="my_limenutop_main1_divupanddown">
                                <a class="my_amenutop_main1" href="../public_html/index.php">
                                    鬼畜
                                </a>
                            </div>
                        </li>
                        <li class="my_limenutop_main1">
                            <div class="my_limenutop_main1_divupanddown">
                                <span class="my_limenutop_main1_divup_span">999+</span>
                            </div>
                            <div class="my_limenutop_main1_divupanddown">
                                <a class="my_amenutop_main1" href="../public_html/index.php">
                                    时尚
                                </a>
                            </div>
                        </li>
                        <li class="my_limenutop_main1">
                            <div class="my_limenutop_main1_divupanddown">
                                <span class="my_limenutop_main1_divup_span">999+</span>
                            </div>
                            <div class="my_limenutop_main1_divupanddown">
                                <a class="my_amenutop_main1" href="../public_html/index.php">
                                    广告
                                </a>
                            </div>
                        </li>
                        <li class="my_limenutop_main1">
                            <div class="my_limenutop_main1_divupanddown">
                                <span class="my_limenutop_main1_divup_span">999+</span>
                            </div>
                            <div class="my_limenutop_main1_divupanddown">
                                <a class="my_amenutop_main1" href="../public_html/index.php">
                                    娱乐
                                </a>
                            </div>
                        </li>
                        <li class="my_limenutop_main1">
                            <div class="my_limenutop_main1_divupanddown">
                                <span class="my_limenutop_main1_divup_span">999+</span>
                            </div>
                            <div class="my_limenutop_main1_divupanddown">
                                <a class="my_amenutop_main1" href="../public_html/index.php">
                                    影视
                                </a>
                            </div>
                        </li>
                        <li class="my_limenutop_main1">
                            <div class="my_limenutop_main1_divupanddown">
                                <span class="my_limenutop_main1_divup_span">999+</span>
                            </div>
                            <div class="my_limenutop_main1_divupanddown">
                                <a class="my_amenutop_main1" href="../public_html/index.php">
                                    放映厅
                                </a>
                            </div>
                        </li>
                        <li class="my_limenutop_main1">
                            <div class="my_limenutop_main1_divupanddown">
                                <span class="my_limenutop_main1_divup_span1"></span>
                            </div>
                            <div class="my_limenutop_main1_divupanddown">
                                <a class="my_amenutop_main1" href="../public_html/index.php">
                                    专栏
                                </a>
                            </div>
                        </li>
                        <li class="my_limenutop_main1">
                            <div class="my_limenutop_main1_divupanddown">
                                <span class="my_limenutop_main1_divup_span2"></span>
                            </div>
                            <div class="my_limenutop_main1_divupanddown">
                                <a class="my_amenutop_main1" href="../public_html/index.php">
                                    广场
                                </a>
                            </div>
                        </li>
                        <li class="my_limenutop_main1">
                            <div class="my_limenutop_main1_divupanddown">
                                <span class="my_limenutop_main1_divup_span3"></span>
                            </div>
                            <div class="my_limenutop_main1_divupanddown">
                                <a class="my_amenutop_main1" href="../public_html/index.php">
                                    直播
                                </a>
                            </div>
                        </li>
                        <li class="my_limenutop_main1">
                            <div class="my_limenutop_main1_divupanddown">
                                <span class="my_limenutop_main1_divup_span4"></span>
                            </div>
                            <div class="my_limenutop_main1_divupanddown">
                                <a class="my_amenutop_main1" href="../public_html/index.php">
                                    小黑屋
                                </a>
                            </div>
                        </li>
                        <li class="my_limenutop_main1">
                            <img style="height:40px;" src="../Texture/menugif.gif" alt=""/>
                        </li>
                    </ul>
                </div>
                
                <!-- 视频播放窗口 -->
                <div style="width: 860px; height: 484px;background-color: #eeeeee">
                    <!--  videoid=????这个数字决定了你要播放哪个视频  到数据库中寻找，av号为videoid的视频然后把它的视频文件名称（包括拓展名）查找到，echo "xxxx.mp4";  -->
                    <video width="860" height="484" autoplay="autoplay" controls="controls">
                        <source src="../<?php 
                        //模拟数据库
                        if ($_GET["videoid"] == 0){
                            echo '你的名字.mp4';
                        } 
                        if ($_GET["videoid"] == 1){
                            echo '闪之轨迹3.mp4';
                        } 
                        if ($_GET["videoid"] == 2){
                            echo '闪3op.mp4';
                        }
                        if ($_GET["videoid"] == 3){
                            echo '刺客信条.mp4';
                        } 
                        if ($_GET["videoid"] == 4){
                            echo '凉凉.mp4';
                        } 
                        if ($_GET["videoid"] == 5){
                            echo '最终幻想15.mp4';
                        } 
                        if ($_GET["videoid"] == 6){
                            echo '刀剑神域.mp4';
                        } 
                        if ($_GET["videoid"] == 7){
                            echo '巫师3.mp4';
                        } 
                        if ($_GET["videoid"] == 8){
                            echo '英伟达.mp4';
                        } 
                        ?>" type="audio/mp4" />
                    </video>
                </div>
                <!-- 前端集体签名 -->
                <img src="../Texture/虚幻.png" alt="比黑夜更黑暗，比鲜血更深红，起舞吧，起舞吧，吾乃红魔族的最强法师，这是世界上最强的魔法，explosion！"/>
                <br/>
                
            </div>
            </div>
            
            <!-- 网页右栏 -->
<!--            <div style="" id="mainright">
                
            </div>-->
            
            <!-- 网页底栏 -->
            <div id="mainfoot">
                
            </div>
        </div>
    </body>
</html>
