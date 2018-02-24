<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:75:"H:\website projects\cbcssoa\public/../application/index\view\chat\chat.html";i:1519458329;s:79:"H:\website projects\cbcssoa\public/../application/index\view\public\header.html";i:1513914949;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>聊天</title>
    <link rel="stylesheet" type="text/css" href="__STATIC__/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="__STATIC__/css/clear.css">
    <link rel="stylesheet" type="text/css" href="__STATIC__/css/chat.css">
    
    <script src="__STATIC__/js/jquery-2.2.3.min.js"></script>
    <script src="__STATIC__/js/index.js"></script>
    <script src="__STATIC__/js/chat.js"></script>

</head>
<body>
<header id="chattop">
    <img id="guestuserimg" src="__STATIC__/images/guestuserimg.png">
    <section id="guestusernamebox" data-postkuid="<?php echo url('Chat/postkuid'); ?>">
        <b class="guestname"> </b>
        <p class="guestdescribe">CBCSS公司出品的高级图像合成软件哦···</p>
    </section>
</header>
<article id="chatcontent" data-name="<?php echo $unc; ?>">
    <ul id="chatcontentul" data-ajaxchat="<?php echo url('Chat/chatajax'); ?>">
    </ul>
</article>
<footer id="footerbox">
    <section class="toolbar"></section>
    <section class="saycontent">
        <textarea class="entrysay" autofocus="autofocus" required="required"></textarea>
        <button class="sendsay">发送</button>
        <button class="closebtn" data-closeurl="<?php echo url('Chat/closeurl'); ?>">关闭</button>
    </section>
</footer>
</body>
</html>