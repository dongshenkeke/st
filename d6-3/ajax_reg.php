<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'ajax_form.php';//包含页面

if(strlen($data['password'])<6 || strlen($data['password'])>12){//strlen判断字符串长度
    echo"密码长度只能在6-12之间";
    exit;
}
$preg="/^\w{3,12}@\w{2,5}\.(com|cn|con)/";
if(!preg_match($preg, $data['email'])){
    echo "邮箱格式不正确";
    exit();
}
file_put_contents("reg.txt", "1111");
echo "成功";
