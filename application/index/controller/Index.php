<?php
namespace app\index\controller;
use app\index\model\User;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
        $dbuser = new User();
        $userlist = $dbuser->userlist();
        $this->assign("userlist",$userlist);
        $unc = session('uname');
        $unc ? $this->assign('unc',$unc) : $this->error('请先登录','Login/login');
        return $this->fetch();
    }

}
