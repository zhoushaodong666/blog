<?php
/**
 * Created by PhpStorm.
 * User: 11388
 * Date: 2018/5/28
 * Time: 16:36
 */

namespace app\admin\controller;
use think\Controller;
use app\admin\model\Admin;


class Login extends Controller
{
    public function index()
    {
        if(request()->isPost())
        {
            $data=input('post.');
            $admin=new Admin();
            $num=$admin->login($data);
            if ($num==3)
            {
                return $this->success('信息输入正确,正在为你跳转...','Index/index');
            }elseif($num==4)
            {
                return $this->error('验证码错误!');
            }
            else{
                return $this->error('用户名或密码错误!');
            }
        }
        return $this->fetch('login');
    }

}
