<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$data=$_POST;//array('username'=>value, 'password'=>'111');
$arr=[
    array('username'=>'张苏','password'=>'123123'),
    array('username'=>'李四','password'=>'123123')
];
json_encode($arr);//把数组转换为json数组/字符串[]

//echo json_encode($data);
echo "[{\"username\";\"张三\",\"password\":\"222\"},{\"username\";\"张三\",\"password\":\"222\"}]";
//字符串 ;  json 固定格式字符串｛｝
//{"username";val, "password":11}  //json字符
//把数组转换为json格式    格式｛"username":value, "ss": '111'｝//字符串
//[{}]  json数组


