<?php
    /*
        post

        url:reg.php

        参数 
              username :  前端传过来的值
              password :  前端传过来的值

        加入购物车商品 ：写入数据库

        返回值 0 false 1 ture;

    */
    //中文乱码
	header("content-type:text/html;charset=utf-8");
    
    //引入连接数据库公共文件
    include 'content.php';

    //接收前端传过来的参数
    $usname = isset($_POST['usname']) ? $_POST['usname'] : null;
    $image = isset($_POST['image']) ? $_POST['image'] : null;
    $title = isset($_POST['title']) ? $_POST['title'] : null;
    $price = isset($_POST['price']) ? $_POST['price'] : null;
    $number = isset($_POST['number']) ? $_POST['number'] : null;
    $total = isset($_POST['total']) ? $_POST['total'] : null;
    $weight = isset($_POST['weight']) ? $_POST['weight'] : null;
    $pxu = isset($_POST['pxu']) ? $_POST['pxu'] : null;
//    echo $title;
//sql语句查询$username是否存在数据库
$sql = "select * from cart where usname ='$usname' and price='$price'";//数据的名字和图片路径=前端传送过来的（对比）
// // //执行sql语句返回结果集
$res = $conn->query($sql);
// // //获取结果集

// //      //判断$res是否存在如果存在的给前端返回1，不存在的话给前端返回0$res->num_rows>0
     if($res->num_rows>0){
        echo 1;
        //相同就把数量加1
        $row =$res->fetch_all(MYSQLI_ASSOC);
        $newnum = $row[0]['number']*1 + $number*1;
        $sql1 =" update cart set number=$newnum where usname='$usname'and price='$price'";
        $res = $conn->query($sql1);
    }else{
        echo 0;
          //写入sql语句把信息存到存储到数据库
    $sql3 = "insert into cart(usname,image,title,price,number,total,weight,pxu) values('$usname','$image','$title','$price','$number','$total','$weight',$pxu)";
    $res3 = $conn->query($sql3);


    };
  

    // //执行sql语句接收返回结果集
    // $res = $conn->query($sql);

    // //判断$res是否存在如果存在的给前端返回1不存在的话给前端返回0
    // if($res){
    //     echo 1;
    // }else{
    //     echo 0;
    // }
    

?>