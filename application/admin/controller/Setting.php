<?php
namespace app\admin\controller;

use think\Controller;
use think\facade\Session;

class Setting extends Base
{
    public function site(){
        // 模板变量赋值
        // $this->assign('title', '系统设置');
        return $this->fetch();

    }
    
}
