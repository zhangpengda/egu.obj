<?php
/*
    GET

    url:check_user.php

    参数: username :  前端传过来的值

    查找用户名 ： 查找用户名是否存在

    返回值 0 false 1 ture;
*/

//引入连接数据库公共文件content.php
include 'content.php';


//接收前端传过来的参数
$username = isset($_GET['username']) ? $_GET['username'] : null;
$password = isset($_GET['password']) ? $_GET['password'] : null;
// echo $username $password;
//sql语句查询$username是否存在数据库

$sql = "select * from users where username='$username'AND password='$password'";


//数据的名字=前端传送过来的（对比）


//执行sql语句返回结果集
$res = $conn->query($sql);
// $res2 = $conn->query($sql1);

if($res->num_rows>0){
    echo 1;
}else{
    echo 0;
}


?>