<?php
#Created by Myitmx on 2019/10/16.
#Copyright © 2019年 Myitmx. All rights reserved.
#广东天翼校园网第三方登录 PHP版

require 'lib/login.class.php';

$app = new Myitmx\xyw();
$username = "账号";
$password = "密码";
$wlanuserip = "内网IP";
$wlanacip = "服务器IP";
$mac = "00-00-00-00-00-00";

//获取验证码
$verifycode = $app->getVerifyCode($username,$wlanuserip,$wlanacip,$mac);

//登录账号
$result = $app->Login($username,$password,$wlanuserip,$wlanacip,$mac,$verifycode);

//退出账号
//$result = $app->Logout($username,$wlanuserip,$wlanacip,$mac);

//输出结果
print_r($result);