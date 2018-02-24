<?php
namespace app\index\model;
use think\Model;

class Chat_record extends Model {
    public function ltjl($username,$knm,$usersay){
        $chatjl = new Chat_record();
        $chatjl->data([
            'zhu_user_nickname' => $username,
            'ke_user_nickname' => $knm,
            'chat_record_content' => $usersay,
        ]);
        $jieguo = $chatjl->save();
        return $jieguo;
    }
}