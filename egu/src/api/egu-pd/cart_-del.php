<?php
/*
    post

    url:car_del.php

    参数: usname :  前端传过来的值
           title 

  删除购物车物品

    返回值 0 false 1 true;
*/

//引入连接数据库公共文件content.php
include 'content.php';


//接收前端传过来的参数
$usname = isset($_POST['usname']) ? $_POST['usname'] : null;
$pxu = isset($_POST['pxu']) ? $_POST['pxu'] : null;
// echo $price,$usname;
//sql语句查询$username是否存在数据库
// $sql = "select * from cart where usname ='$usname' and title='$title'";
$sql = "DELETE FROM cart WHERE usname='$usname' and pxu='$pxu'";
//执行sql语句返回结果集
$res = $conn->query($sql);

if ($res) {
   echo 0 ;
}else {
    echo 1;
}





?>