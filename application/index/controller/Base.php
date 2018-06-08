<?php
namespace app\index\controller;
use think\Controller;

class Base extends Controller
{
    public function _initialize()
    {
        $this->right();
        $tagres=db('tags')->order('id desc')->select();
        $cateres=db('cate')->order('id desc')->select();
        $this->assign([
            'cateres'=>$cateres,
            'tagres'=>$tagres
            ]
        );
    }

    public function right()
    {
        $clickres=db('article')->order('click desc')->limit(8)->select();
        $tjres=db('article')->where('state','=','1')->order('click desc')->limit(8)->select();
        $this->assign([
            'clickres'=>$clickres,
            'tjres'=>$tjres,
        ]);
    }
}
