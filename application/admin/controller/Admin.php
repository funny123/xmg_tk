<?php

namespace app\admin\controller;

use think\Controller;
use think\facade\Request;
use think\facade\Session;

class Admin extends Controller
{
    public function login()
    {
        return $this->fetch();
    }
    /**
     * 登录操作
     *
     * @return void
     */
    public function login_check()
    {
        $account = Request::post('account');
        $password = Request::post('password');
        if ($account == 'admin' && $password == '123123') {
            Session::set('adminid',$account);
            $res['code'] = 200;
            $res['msg'] = '登录成功';
        } else {
            $res['code'] = 400;
            $res['msg'] = '用户名或者密码错误';
        }
        return json($res);
    }
    /**
     * 退出
     *
     * @return void
     */
    public function logout(){
        Session::delete('adminid');
        return $this->redirect('Admin/login');

    }
}
