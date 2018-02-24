<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"H:\website projects\cbcssoa\public/../application/index\view\index\index.html";i:1515746460;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>主页</title>
    <link rel="stylesheet" type="text/css" href="__STATIC__/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="__STATIC__/css/clear.css">
    <link rel="stylesheet" type="text/css" href="__STATIC__/css/index.css">
    <script src="__STATIC__/js/jquery-2.2.3.min.js"></script>
    <script src="__STATIC__/js/index.js"></script>
</head>
<body>
<header>
    <img id="userimg" src="__STATIC__/images/userimg.png">
    <section id="usernamebox">
        <section class="unamestate">
            <b><?php echo $unc; ?></b>
            <img id="loginstate" src="__STATIC__/images/state.png">
        </section>
        <p class="describe">CBCSS公司出品的高级图像合成软件哦···</p>
    </section>
</header>
<nav>
    <label class="sslabel">搜索：</label>
    <input id="searchbar" type="search" name="" placeholder="联系人、部门、姓名、手机号">
</nav>
<article>
    <ul class="ulbox">
        <li class="active">企业结构</li>
        <li>最近</li>
        <li>讨论组</li>
    </ul>
    <section class="hideshowbox">
        <a class="biaoti" href="javascript:;">市场部</a>
        <ul class="hideshowul">
            <?php if(is_array($userlist) || $userlist instanceof \think\Collection || $userlist instanceof \think\Paginator): $i = 0; $__LIST__ = $userlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>
            <li>
                <a href="javascript:;" class="sjopenwid">
                    <img class="uminimg" src="__STATIC__/images/minimg.png">
                    <section class="uminbox" data-name="<?php echo $data['user_name']; ?>">
                        <span><?php echo $data['user_name']; ?></span>
                        <p>CBCSS公司出品的高级图像合成软件CBCSS公司出品的高级图像合成软件哦···</p>
                    </section>
                </a>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </section>
    <section class="hideshowbox"></section>
    <section class="hideshowbox"></section>
</article>
<footer></footer>
</body>
</html>