<?php
namespace app\index\Controller;
use think\Request;
use think\Db;
use think\config;

class Login extends HandlerBase
{
    //密码加盐
    public $maltkey;
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        $this->maltkey = 'newtp5test.#*@zhongxiaofeng';
    }
    /*
     * 登录
     */
    public function loginAct()
    {
        $this->login();
    }
    /*
     * 密码加盐
     */
    public function passwordMalt($password)
    {
        return md5(md5($password.$this->maltkey));
    }
}