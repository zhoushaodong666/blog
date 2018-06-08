<?php
/**
 * Created by PhpStorm.
 * User: 11388
 * Date: 2018/5/26
 * Time: 23:25
 */

namespace app\admin\validate;
use think\Validate;

class Tags extends Validate
{
    protected $rule = [
        'tagname'  =>  'require|max:25|unique:tags',
    ];

    protected $message  =   [
        'tagname.require' => '管理员名称必须填写',
        'tagname.max' => '管理员名称长度不得大于25位',
        'tagname.unique' => '管理员名称不得重复',
    ];

    protected $scene = [
        'add'  =>  ['tagname'=>'require|max:25|unique:tags'],
        'edit'  =>  ['tagname'=>'require|max:25|unique:tags'],
    ];

}



