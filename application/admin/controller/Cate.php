<?php
namespace app\admin\controller;
use app\admin\model\Cate as CateModel;


class Cate extends Base
{
    public function lst()
    {
        $list = CateModel::paginate(3);
        $this->assign('list',$list);
        return $this->fetch();
    }

    public function add()
    {
        if (request()->isPost())
        {
            $data=[
                'cate'=>input('cate'),
            ];
            $validate=\think\Loader::validate('Cate');
            if(!$validate->scene('add')->check($data))
            {
                return $this->error($validate->getError());
                die;
            }
            if(db('cate')->insert($data)){
                return $this->success('添加栏目成功!','lst');
            }else{
                return $this->error('添加栏目失败!');
            }
        }
        return $this->fetch();
    }

    public function edit()
    {
        $id=input('id');
        $catename=db('cate')->find($id);
        if (request()->isPost())
        {
            $data=[
                'id'=>input('id'),
                'cate'=>input('cate')
            ];
            $validate = \think\Loader::validate('Cate');
            if (!$validate->scene('edit')->check($data))
            {
                $this->error($validate->getError());
                die;
            }
            if (db('cate')->update($data))
            {
                $this->success('修改栏目成功','lst');
            }else{
                $this->error('修改栏目失败');
            }
            return;
        }
        $this->assign('catename',$catename);
        return $this->fetch();
    }

    public function del()
    {
        $id=input('id');
            if (db('cate')->delete($id)){
                $this->success('删除链接成功!','lst');
            }else{
                $this->error('删除链接失败!');
            }
    }




}
