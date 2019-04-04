<?php
namespace app\index\Controller;
use think\Controller;
use think\Request;
use think\Db;
use think\config;

class HandlerBase extends Controller
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
    public function login()
    {

    }
    /*
     * 密码加盐
     */
    public function passwordMalt($password)
    {
        return md5(md5($password.$this->maltkey));
    }
    /*
     * 验证是否登录
     *
     */
}