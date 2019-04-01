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
\think\Loader::addNamespace([
    'my'  => '../application/extend/my/',
    'org' => '../application/extend/org/',
]);
\think\Loader::addNamespaceAlias('model','app\index\model');
\think\Loader::addClassMap('think\Log',LIB_PATH.'think\Log.php');
\think\Loader::addClassMap('vendor\Md5Crypt',VENDOR_PATH.'driehle\php-crypt-md5\library\Md5Crypt\Md5Crypt.php');
\think\Loader::addClassMap('org\util\Array',LIB_PATH.'org\util\Array.php');
