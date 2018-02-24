<?php
namespace app\index\controller;
use app\index\model\User;
use think\Controller;

class Login extends Controller {
    public function login(){
        return $this->fetch();
    }
    public function postuser(){
        $uname= $_POST['username'];
        $upwd= $_POST['userpswd'];
        $dbuser = new User();
        $userlogin = $dbuser->userloginfun($uname,$upwd);
        if ($userlogin){
            session('udbid',$userlogin['user_id']);
            session('uname',$userlogin['user_name']);
            $this->success('登录成功', 'Index/index','',1);
        }else{
            $this->error('登录失败');
        }
    }
}