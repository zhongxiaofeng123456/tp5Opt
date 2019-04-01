<?php
require 'vendor/autoload.php';
use Md5Crypt\Md5Crypt;
$cryptedpassword = Md5Crypt::unix("123456" ,"123");
echo $cryptedpassword;