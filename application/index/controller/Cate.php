<?php
namespace app\index\controller;
use app\index\controller\Base;
use think\Db;

class Cate extends Base
{
    public function index()
    {
        //获取传过来的cateid
        $cateid = input('cateid');
        //查询当前栏目下的名称
        $cates=db('cate')->find($cateid);
        $this->assign('cates',$cates);
        //根据栏目id查询 该栏目下的所有文章
        $articleres = Db::name('article')->where('cateid','=',$cateid)->paginate(3);
        $this->assign('articleres',$articleres);
        return $this->fetch("cate");
    }
}
