<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/1
 * Time: 12:34
 */

namespace app\api\validate;


use think\Request;
use think\Validate;
use think\Exception;

class BaseValidate extends Validate
{
    public function goCheck()
    {
        // 获取http传入的参数
        // 对这些参数进行校验$
        $request = Request::instance();
        $params = $request->param();

        $result = $this->check($params);
        if (!$result) {
           $error = $this->error;

           throw new Exception($error);
        } else {
            return true;
        }
    }
}