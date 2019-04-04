<?php
namespace app\common;
use think\Model;
use think\Db;
use think\config;

class Mysql extends  Model
{
    public static $ins;
    public function __construct($request)
    {
        parent::__construct($request);
		if (empty($request)) {
			$request = Config::get('db_config1');
		}
        return $this->getInstance($request);
    }
    public function getInstance($config)
    {
        if (!empty($config)) {
            if (self::$ins instanceof self) {
                return self::$ins;
            }
            self::$ins = Db::connect($config);
            return self::$ins;

        }
    }
}
