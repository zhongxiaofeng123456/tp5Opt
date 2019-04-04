<?php
namespace app\index\Model;
use think\Model;
use think\Request;
use think\Db;
class UserModel extends Model
{
    public function initialize()
    {
        $this->table = 'gun_user';
        parent::initialize();
    }
    public function addUser($data)
    {
        if (empty($data)) {
            return false;
        }
        $result = $this->add($data);
        return $result;
    }
}