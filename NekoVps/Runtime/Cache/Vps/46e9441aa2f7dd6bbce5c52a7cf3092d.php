<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>新用户注册 Neko Vps | Moe Vps</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="alternate icon" type="image/png" href="/nekovps/Public/assets/images/cat.png">
  <link rel="stylesheet" href="/nekovps/Public/assets/css/amazeui.min.css"/>
  <script src="/nekovps/Public/assets/js/jquery.min.js"></script>
  <script src="/nekovps/Public/assets/js/amazeui.min.js"></script>
  <style>
    .header {
      text-align: center;
    }
    .header h1 {
      font-size: 200%;
      color: #333;
    }
    .header p {
      font-size: 14px;
    }
    .cat-ico{
      width:32px;
      height:32px;
      background-image:url(/nekovps/Public/assets/images/cat.png);
      background-repeat:no-repeat;
      display:inline-block;
    }
    body{
      background-color:#f8f8f8;
    }
    h1{
      box-shadow:5px 5px 20px #AAA;
      padding:5px 0px;
      background-color:#05A2EC;
      line-height:60px;
      color:#FFFFFF !important;
      text-shadow: 0px 0px 2px #686868, 0px 1px 1px #ddd, 0px 2px 1px #d6d6d6, 0px 3px 1px #ccc, 0px 4px 1px #c5c5c5, 0px 5px 1px #c1c1c1, 0px 6px 1px #bbb, 0px 7px 1px #777, 0px 8px 3px rgba(100, 100, 100, 0.4), 0px 9px 5px rgba(100, 100, 100, 0.1), 0px 10px 7px rgba(100, 100, 100, 0.15), 0px 11px 9px rgba(100, 100, 100, 0.2), 0px 12px 11px rgba(100, 100, 100, 0.25), 0px 13px 15px rgba(100, 100, 100, 0.3);
    }
    input{
      box-shadow:2px 2px 3px #ADADAD;
    }
    button{
      box-shadow:1px 1px 2px #ADADAD;
    }
    a{
      text-shadow:2px 2px 2px #CBE0FD;
    }
    .verify{
      box-shadow:2px 2px 3px #333;
      margin:10px 0px;
      cursor:pointer;
    }
  </style>
</head>
<body>
<div class="header">
  <div class="am-g">
    <h1>加入 Neko Vps</h1>
  </div>
  <hr />
</div>
<div class="am-g">
  <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
    <a href="<?php echo U('index');?>"><<回到Neko Vps</a>
    <a class="am-fr" href="<?php echo U('login');?>">已经有Neko账户了?</a>
    <br>
    <hr>
    <form method="post" class="am-form">
      <?php if(is_array($form)): foreach($form as $k=>$item): ?><label for="<?php echo ($item[1]); ?>"><span class="am-icon-<?php echo ($item[3]); ?>"><?php echo ($item[2]); ?></span></label>
      <input type="<?php echo ($item[0]); ?>" name="<?php echo ($k); ?>" id="<?php echo ($item[1]); ?>" value="">
      <!-- <div class="am-alert">
        邮箱地址已被注册。
      </div> -->
      <br><?php endforeach; endif; ?>
      <label for="verifycode"><span class="am-icon-gift"> 验证码:</span></label>
      <div class="am-cf">
        <input type="text" name="verifycode" id="verifycode" value="">
        <img title="点击刷新验证码" onclick="javascript:this.src='<?php echo U('VerifyCode');?>?'+Math.random();" class="verify am-fr" src="<?php echo U('VerifyCode');?>" />
      </div>
      <div class="am-alert">
        验证码无效。
      </div>
      <br>
      <br>
      <div class="am-cf">
      <button id="login" class="am-btn am-btn-primary am-btn-lg am-radius am-center">立即加入</button>
      </div>
    </form>
    <hr>
    <p>© 2016 <a href="http://www.nekoneko.moe" target="_blank">NekoVps, Inc.</a> . by the XljBearSoft Team.</p>
  </div>
</div>
</body>
</html>