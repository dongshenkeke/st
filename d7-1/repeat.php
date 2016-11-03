<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$flag=2;
$time=time();//时间戳  秒数
setcookie("time", $time, time()+60);


?>
<form action="repeat1.php" method="post" id="form">
    用户名：<input type="text" name="username" />
    密码：<input type="password" name="password" />
    <input type="hidden" name="time" value="<?php echo $_COOKIE['time'];?>" />
    <input type="submit" value="提交"/>
    
</form>


