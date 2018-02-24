<?php
namespace app\index\controller;
use app\index\model\Chat_record;
use app\index\model\User;
use think\Controller;

class Chat extends Controller {
    public function chat(){
        $unc = session('uname');
        $unc ? $this->assign('unc',$unc) : $this->error('请先登录','Login/login');
        return $this->fetch();
    }
    public function postkuid(){
        $guestuer = $_POST['guestuer'];
        $dbuser = new User();
        $result = $dbuser->where('user_name',$guestuer)->find();
        return $result['user_websocket_id'];
    }
    public function chatajax(){
        $userwsid = $_POST['userwsid'];
        $userdbid = session('udbid');
        $username = $_POST['username'];
        $usersay = $_POST['usersay'];
        $knm = $_POST['guestname'];
        $dbuser = new User();
        $jieguo = $dbuser->udbidselectaddwsid($userwsid,$username,$userdbid,$knm);
        $ltjl = new Chat_record();
        $ltjlfhjg = $ltjl->ltjl($username,$knm,$usersay);

        if ($jieguo && $ltjlfhjg){
            return $jieguo;
        }else{
            return "失败";
        };
    }
    public function closeurl(){
        $uidclr = $_POST['clsuid'];
        $drr['user_websocket_id'] = '';
        $dbuser = new User();
        $result = $dbuser->where('user_name',$uidclr)->update($drr);
        return $result;
    }
}