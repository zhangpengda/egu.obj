<?php
    /*
        post

        初始化商品列表 ：查询数据库商品并提取商品数据返回给前端

        url:list.php

        参数 
              sort :    前端传过来的排序方式
              page :    前端传过来的值
              qty  :    前端传过来的值

        返回值 0 false 1 ture;

    */

    //连接数据库php文件 content.php
    include 'content.php';

    //接收前端传输过来的参数
    $id = isset($_POST['id']) ? $_POST['id'] : null;

    // //排序索引 截取内容的起始下标
    // $index = ($page-1)*$qty;
// echo $id;
    //sql语句查询数据库的商品信息 desc降序 asc升序
    $sql = "select * from listname where id='$id'";
    // $total1 = 'select count(*) from listname';
    
    $res =$conn->query($sql);
    //执行sql语句 返回结果集
// echo  $res;
    //获取结果集里面所有的内容
    $row =$res->fetch_all(MYSQLI_ASSOC);
 
    // $res1 = array_slice($row, ($page - 1) * $qty, $qty);
    //把获取到的数据返回给前端
    // echo json_encode($row,JSON_UNESCAPED_UNICODE);
    //把你要传给前端的数据，做成关联数组，好处：可以传更多的数据	

	
	echo json_encode($row,JSON_UNESCAPED_UNICODE);//'{}'
?>