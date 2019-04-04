<?php
namespace app\index\controller;
use \model\TestModel;
use think\Controller;
use think\Log;
use vendor\Md5Crypt;
class Test extends Controller{
    public $params;
    use \traits\controller\Jump;

    public function __construct()
    {//dump(ROOT_PATH);die;
        //dump(Md5Crypt::unix("123456" ,"123"));die;
    }

    public function index()
    {
        //dump(new \app\index\controller\Index());
        //dump(D('TestModel'));die;
        $testModel = new \model\Test();
        dump($testModel);

        dump(new Log());
        $test = new \my\Test();
        $test->sayHello();
        //return 'test1';
        //$this->success('test', 'index/Index/index');

    }
}
