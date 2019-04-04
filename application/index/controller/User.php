<?php
namespace app\index\Controller;
use think\Request;
use think\view;

class User extends HandlerBase
{
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
    }
    /*
     * 列表
     */
    public function index()
    {

    }
    /*
     * 新增用户
     */
    public function addUser()
    {
        //dump(new \app\common\Mysql(Config::get('db_config1')));
        if (request()->isPost()) {
            $data = input('post.');
            $data['password'] = $this->passwordMalt($data['password']);
            $userModel = new \app\index\Model\UserModel();
            $status = $userModel->addUser($data);
            if ($status) {
                //$this->success('添加成功');
            } else {
                //$this->error('添加失败');
            }
            //dump(Db::connect('db_config1'));
        }
        $view = view::instance();
        return $view->fetch('index/update');
    }
}