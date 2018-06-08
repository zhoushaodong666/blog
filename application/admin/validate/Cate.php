<?php
/**
 * Created by PhpStorm.
 * User: 11388
 * Date: 2018/5/26
 * Time: 23:25
 */

namespace app\admin\validate;
use think\Validate;

class Cate extends Validate
{
    protected $rule = [
        'cate'  =>  'require|max:25|unique:cate'
    ];

    protected $message  =   [
        'cate.require' => '栏目名称必须填写',
        'cate.max' => '栏目名称长度不得大于25位',
        'cate.unique' => '栏目名称不能重复'
    ];

    protected $scene = [
        'add'  =>  ['cate'],
        'edit'  =>  ['cate'=>'require|max:25'],
    ];

}



