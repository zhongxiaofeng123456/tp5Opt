<?php
namespace app\index\model;
use think\Model;
class Test extends Model
{
    public function __construct()
    {
        $this->table="sys_user";
        parent::initialize();
    }

    public function index()
    {
        return 'testmodel';
    }
}