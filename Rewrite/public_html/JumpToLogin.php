<?php
echo "<h1>注册</h1><br><br><br>";
$user=$_POST['name'];
$pass=$_POST['password'];
echo "用户名：".$user;
echo "密码：".$pass;
$con = mysqli_connect("localhost","root","");
mysqli_set_charset($con, 'utf8');
if (!$con)
{
    echo '\nCould not connect MySQL\n';
}
mysqli_select_db($con,"rewrite");
//数据库准备完毕=============================================
if ($user != NULL && $pass != NULL)//检测此用户名是否已注册
{
    $result = mysqli_query($con,"SELECT * FROM rewrite.relog where name = '$user'");
    if($result == false)//查找命令失败
        echo '  result false';
    if($result == true)//查找命令成功
        $num = mysqli_num_rows($result);
    if ($num == 0)
    {
        $result_1 = mysqli_query($con,"INSERT INTO rewrite.relog VALUES('$user','$pass')");
        echo '<h1>此用户名可用，注册成功</h1><br>';
        echo '  <a style="color: #ffffff;background-color: #00a7de;border:2px solid #0381aa;font-size: 50px;text-decoration: none;width: 600px;height: 380px;" href=\'LoginAndRegister.php\'>返回登录界面</a>  ';
    }
    if ($num == 1)
    {
        echo '<h1>此用户名已注册，注册失败，请重试</h1><br>';
        echo '  <a style="color: #ffffff;background-color: #00a7de;border:2px solid #0381aa;font-size: 50px;text-decoration: none;width: 600px;height: 380px;" href=\'LoginAndRegister.php\'>返回登录界面</a>  ';
    }
}
else
{
    echo '<h1>账号密码填写不完全</h1><br>';
    echo '  <a style="color: #ffffff;background-color: #00a7de;border:2px solid #0381aa;font-size: 50px;text-decoration: none;width: 600px;height: 380px;" href=\'LoginAndRegister.php\'>返回登录界面</a>  ';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>哔哩哔哩 (゜-゜)つロ 干杯~-bilibili</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../Texture/favicon.ico">
        <link rel="stylesheet" type="text/css" href="../public_html/style.css">
    </head>
    <body>
        <!-- 前端
        javascript实现网页动态效果         -->
        <!-- 后端
        PHP连接数据库 && MySQL数据库的使用 -->    
    </body>
</html> 
