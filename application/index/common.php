<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
/**
 * 加载
 */

function model1($module, $className, $parames=array())
{
    $dir = ROOT_PATH.'/application/'.$module;
	if (is_dir($dir)) {
	    if (is_file($dir.'/'.$className.'.php')) {
	        require_once $dir.'/'.$className.'.php';dump(new $className());die;
	        return new $className($parames);
        }
    }
}