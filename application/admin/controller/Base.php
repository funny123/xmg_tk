<?php

namespace app\admin\controller;

use think\Controller;
use think\facade\Session;

class Base extends Controller
{
    // 初始化方法
    public function initialize()
    {
        if (!Session::get('adminid')) {
            $this->redirect('Admin/login');
        }

    }
}
