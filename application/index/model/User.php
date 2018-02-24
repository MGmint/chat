<?php
namespace app\index\model;
use think\Model;

class User extends Model
{
    public function userlist(){
        $user = new User();
        $ulist = $user->select();
        return $ulist;
    }
    public function userloginfun($uname,$upwd){
        $selectdata['user_name'] = $uname;
        $selectdata['user_pswd'] = $upwd;
        $user = new User();
        $userlogin = $user->where($selectdata)->find();
        return $userlogin;
    }
    public function udbidselectaddwsid($userwsid,$username,$userdbid,$knm){
        $udbid = $userdbid;
        $uname = $username;
        $uwsid = $userwsid;
        $selectarr['user_name'] = $uname;
        $selectarr['user_websocket_id'] = $uwsid;
        $dbuser = new User();
        $dbuser->where('user_id',$udbid)->update($selectarr);
        $result = $dbuser->where('user_name',$knm)->find();
        return $result;
    }
}