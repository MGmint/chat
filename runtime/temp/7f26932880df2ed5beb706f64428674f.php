<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"H:\website projects\cbcssoa\public/../application/index\view\login\login.html";i:1513914635;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>登录</title>
    <link rel="stylesheet" type="text/css" href="__STATIC__/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="__STATIC__/css/clear.css">
    <link rel="stylesheet" type="text/css" href="__STATIC__/css/login.css">
    <script src="__STATIC__/js/jquery-2.2.3.min.js"></script>
    <script src="__STATIC__/js/login.js"></script>
</head>
<body>
<article>
    <header id="imgbox">
        <img src="__STATIC__/images/login.png">
    </header>
    <form method="post" action="<?php echo url('Login/postuser'); ?>">
        <nav>
            <section class="userinput">
                <span id="userspan">帐号：</span>
                <input class="xginput" type="text" name="username" placeholder="请输入系统帐号" required="required">
            </section>
            <section class="userinput">
                <span id="userpwd">密码：</span>
                <input class="xginput" type="password" name="userpswd" placeholder="请输入正确密码" required="required">
            </section>
            <section class="userinput fxkbigbox">
                <section class="fuxuankuang">
                    <input id="zddl" class="userfxk" type="checkbox" name="">
                    <label class="userfxklabel" for="zddl">自动登录</label>
                </section>
                <section class="fuxuankuang">
                    <input id="jzmm" class="userfxk" type="checkbox" name="">
                    <label class="userfxklabel" for="jzmm">记住密码</label>
                </section>
            </section>
        </nav>
        <section>
            <input class="loginbtn" type="submit" name="" value="登　　录">
        </section>
    </form>
    <footer>
        <a href="">忘记密码</a>　｜　<a href="">设置</a>
    </footer>
</article>
</body>
</html>