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
        $username = Request::post('username');
        $password = Request::post('password');
        if ($username == 'admin' && $password == '123123') {
            Session::set('adminid',$username);
            $res['code'] = 200;
            $res['msg'] = '登录成功';
        } else {
            $res['code'] = 400;
            $res['msg'] = '用户名或者密码错误';
        }
        return json($res);
    }
}
