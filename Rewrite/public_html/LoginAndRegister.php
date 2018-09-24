<?php

?>
<!DOCTYPE html>
<html>
    <head>
        <title>哔哩哔哩 (゜-゜)つロ 干杯~-bilibili</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../Texture/favicon.ico">
        <link rel="stylesheet" type="text/css" href="../public_html/style.css">
        <!-- JAVASCRIPTJAVASCRIPTJAVASCRIPT-->
        <script type="text/javascript">
            function zhuCe()//注册功能
            {
            form.action="JumpToLogin.php";
            }
            function dengLu()//登录功能
            {
            form.action="JumpToLogin_1.php";
            }
        </script>
        <!-- JAVASCRIPTJAVASCRIPTJAVASCRIPT-->
    </head>
    <body>
        <!-- 前端
        javascript实现网页动态效果         -->
        <!-- 后端
        PHP连接数据库 && MySQL数据库的使用 -->
        <div id="LoginAndRegisterPage">
                
            <!-- 网页顶栏 此处顶栏已经变成小条 -->
            <div id="LogAndRegmainhead">
                
                <!-- 顶栏左侧 -->
                <div id="LogAndRegmainhead_left">
                        <ul style="margin:0px; list-style: none;">
                            <li class="my_li2first"><img style="width:16px; height: 16px;float: left; " src="../Texture/favicon.ico" alt=""/><a class="my_a" href="../public_html/">主站</a></li>
                            <li class="my_li2"><a class="my_a" href="https://h.bilibili.com/">画友</a></li>
                            <li class="my_li2"><a class="my_a" href="https://game.bilibili.com/">游戏中心</a></li>
                            <li class="my_li2"><a class="my_a" href="https://live.bilibili.com/">直播</a></li>
                            <li class="my_li2"><a class="my_a" href="https://show.bilibili.com/platform/home.html?msource=pc_web">会员购</a></li>
                            <li class="my_li2"><a class="my_a" href="https://bml.bilibili.com/">BLM</a></li>
                            <li class="my_li2"><a class="my_a" href="https://bw.bilibili.com/">BW</a></li>
                            <li class="my_li2"><img style="width:18px; height: 18px;float: left" src="../Texture/appicon.png" alt=""/><a class="my_a" href="https://app.bilibili.com/">下载APP</a></li>
                        </ul>
                </div>
                
                <!-- 顶栏右侧 -->
                <div id="LogAndRegmainhead_right">
                    <div id="LogAndRegmainhead_right_up">
                        <ul style=" margin:0px; list-style:none; ">
                            <li class="my_li"><a href="LoginAndRegister.php"><img class="touxiang_weidenglu" src="../Texture/头像未登录.png" alt="图片"/></a></li>
                            <li class="my_li2"><a class="my_a" href="LoginAndRegister.php">历史</a></li>
                            <li class="my_litougao"><a class="my_atougao" href="LoginAndRegister.php">投&nbsp;稿</a></li>
                        </ul>
                    </div>                    
                </div>
                
            </div>
            
            <!-- 网页中间栏 -->
            <div id="LogAndRegmaincenter">
                <div style="width: 1030px; height: 920px; float:left;">
                    
                </div>
                <div style="width:  870px; height: 920px; float:left;">
                    <div style="width: 870px; height: 160px;">
                    
                    </div>
                    <div style="width: 870px; height: 760px;">
                        
                        <!--表单form action是JumpToLogin.php这个网页-->
                        <form method="post" name="form" action= "">
                            账号&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="input_LAR" type="text" name="name"><br/>
                            密码&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="input_LAR" type="password" name="password"><br/><br/><br/><br/><br/><br/>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input class="LARbutton1" type="submit" onclick="zhuCe()"  value="注册">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input class="LARbutton2" type="submit" onclick="dengLu()"  value="登录">
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </body>
</html> 
