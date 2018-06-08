<?php
/**
 * Created by PhpStorm.
 * User: 11388
 * Date: 2018/5/26
 * Time: 23:25
 */

namespace app\admin\validate;
use think\Validate;

class Article extends Validate
{
    protected $rule = [
        'title'  =>  'require|max:25',
        'cateid'  =>  'require',

    ];

    protected $message  =   [
        'title.require' => '文章标题必须填写',
        'title.max' => '文章标题长度不得大于25位',
        'cateid.require' => '所属栏目必须填写',
    ];

    protected $scene = [
        'add'  =>  ['cateid','title'],
        'edit'  =>  ['cateid','title'],
    ];

}



