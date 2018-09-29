<!--数据库名：rewrite
    表名··：relog
    表内信息：varchar类型name  varchar类型password-->
<?php
echo "<h1>登录</h1><br><br><br>";
$user=$_POST['name'];
$pass=$_POST['password'];
echo "用户名：".$user;
echo "密码：".$pass;
$con = mysqli_connect("localhost","root","");
if (!$con)
{
    echo '\nCould not connect MySQL\n';
}
mysqli_select_db($con,"rewrite");
//数据库准备完毕=============================================
if ($user != NULL && $pass != NULL)//检测此用户名是否已注册
{
    $result = mysqli_query($con,"SELECT * FROM rewrite.relog where name = '$user' and password = '$pass' ");
    if($result == false)//查找命令失败
        echo '  result false';
    if($result == true)//查找命令成功
        $num = mysqli_num_rows($result);
    if ($num == 1)
    {
        echo '<h1>账号密码正确，登录成功</h1><br>';
        echo '  <a style="color: #ffffff;background-color: #00a7de;border:2px solid #0381aa;font-size: 50px;text-decoration: none;width: 600px;height: 380px;" href=\'index.php\'>点击跳转</a>  ';
    }
    if ($num == 0)
    {
        echo '<h1>账号或密码错误，请重试</h1><br>';
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
    </body>
</html> 
