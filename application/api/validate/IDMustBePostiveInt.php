<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/1
 * Time: 12:19
 */

namespace app\api\validate;



class IDMustBePostiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveInteger'
    ];

    protected function isPositiveInteger($value , $rule = '' , $data = '' , $field = '')
    {
        if (is_numeric($value) && is_int($value + 0) && ($value + 0) > 0){
            return true;
        } else {
            return $field.'必须是正整数';
        }
    }
}