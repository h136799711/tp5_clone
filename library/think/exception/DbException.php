<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://zjzit.cn>
// +----------------------------------------------------------------------

namespace think\exception;

use think\Exception;

/**
 * Database相关异常处理类
 */
class DbException extends Exception 
{
    public function __construct($message, Array $config, $sql, $code = 10500)
    {
        $this->message  = $message;
        $this->code     = $code;

        $this->setData('Database Status', [
            'Error Code'    => $code,
            'Error Message' => $message,
            'Error SQL'     => $sql
        ]);

        $this->setData('Database Config', $config);
    }


}
