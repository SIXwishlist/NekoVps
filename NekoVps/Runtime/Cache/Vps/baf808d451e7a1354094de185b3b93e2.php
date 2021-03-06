<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>Neko Vps | Moe Vps</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
        content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <link rel="alternate icon" type="image/png" href="/nekovps/Public/assets/images/cat.png">
  <link rel="stylesheet" href="/nekovps/Public/assets/css/amazeui.min.css"/>
  <style>
    .get {
      background: black;
      color: #fff;
      text-shadow: 1px 1px 5px black;
      text-align: center;
      padding: 100px 0px;
      background-image:url(/nekovps/Public/assets/images/cat.jpg);
      background-repeat: no-repeat;
      background-position: center;
    }

    .get-title {
      font-size: 200%;
      border: 2px solid #fff;
      padding: 20px;
      display: inline-block;
    }

    .get-btn {
      text-shadow: 0px 0px 0px white;
      background: #fff;
    }

    .detail {
      background: #fff;
    }

    .detail-h2 {
      text-align: center;
      font-size: 150%;
      margin: 40px 0;
    }

    .detail-h3 {
      color: #1f8dd6;
    }

    .detail-p {
      color: #7f8c8d;
    }

    .detail-mb {
      margin-bottom: 30px;
    }

    .hope {
      color:white;
      background: #2F2F2F;
      padding: 50px 0;
    }

    .hope-img {
      text-align: center;
    }

    .hope-hr {
      border-color: #149C88;
    }

    .hope-title {
      font-size: 140%;
    }

    .about {
      background: #fff;
      padding: 40px 0;
      color: #7f8c8d;
    }

    .about-color {
      color: #34495e;
    }

    .about-title {
      font-size: 180%;
      padding: 30px 0 50px 0;
      text-align: center;
    }

    .footer p {
      color: #7f8c8d;
      margin: 0;
      padding: 15px 0;
      text-align: center;
      background: #2F2F2F;
    }
    .cat-ico{
      width:32px;
      height:32px;
      background-image:url(/nekovps/Public/assets/images/cat.png);
      background-repeat:no-repeat;
      display:inline-block;
      margin-top:5px;
    }
  </style>
</head>
<body>
<header class="am-topbar am-topbar-fixed-top">
  <div class="am-container">
    <h1 class="am-topbar-brand">
    <a href="#"><div class="cat-ico"></div>Neko Vps</a>
    </h1>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-secondary am-show-sm-only"
            data-am-collapse="{target: '#collapse-head'}"><span class="am-sr-only">导航切换</span> <span
        class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="collapse-head">
      <ul class="am-nav am-nav-pills am-topbar-nav">
        <li class="am-active"><a href="#">关于Neko Vps</a></li>
        <li><a href="#">Vps套餐</a></li>
        <li class="am-dropdown" data-am-dropdown>
          <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
            更多帮助 <span class="am-icon-caret-down"></span>
          </a>
          <ul class="am-dropdown-content">
            <li class="am-dropdown-header">需要提供帮助喵?</li>
            <li><a href="#">xxxx</a></li>
            <li><a href="#">xxxx</a></li>
            <li><a href="#">xxxx</a></li>
            <li><a href="#">联系我们</a></li>
          </ul>
        </li>
      </ul>
      <div class="am-topbar-right">
        <button onclick="window.location='<?php echo U('register');?>'" class="am-btn am-btn-secondary am-topbar-btn am-btn-sm"><span class="am-icon-pencil"></span> 立即开通Neko账户</button>
      </div>

      <div class="am-topbar-right">
        <button onclick="window.location='<?php echo U('login');?>'" class="am-btn am-btn-primary am-topbar-btn am-btn-sm"><span class="am-icon-user"></span> 登录我的账户</button>
      </div>
    </div>
  </div>
</header>

<div class="get">
  <div class="am-g">
    <div class="am-u-lg-12">
      <h1 class="get-title">Neko Vps 好用廉价的VPS</h1>

      <p>
        多国家地区可选，基于可靠的Vultr服务。
      </p>

      <p>
        <a href="<?php echo U('login');?>" class="am-btn am-btn-sm get-btn">立刻选购我的Vps</a>
      </p>
    </div>
  </div>
</div>

<div class="detail">
  <div class="am-g am-container">
    <div class="am-u-lg-12">
      <h2 class="detail-h2">我们提供了哪些服务?</h2>

      <div class="am-g">
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12 detail-mb">

          <h3 class="detail-h3">
            <i class="am-icon-cogs am-icon-sm"></i>
            Vps主机快速开通
          </h3>

          <p class="detail-p">
            订单建立后您的主机将在短时间内上线。
          </p>
        </div>
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12 detail-mb">
          <h3 class="detail-h3">
            <i class="am-icon-check-square-o am-icon-sm"></i>
            方便的Vps主机管理面板
          </h3>

          <p class="detail-p">
            简单易用的中文主机管理面板，可随时重启维护您的主机。
          </p>
        </div>
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12 detail-mb">
          <h3 class="detail-h3">
            <i class="am-icon-globe am-icon-sm"></i>
            多地区套餐选择
          </h3>

          <p class="detail-p">
            东京、芝加哥、硅谷、洛杉矶等多地区服务器可选，多种组合套餐满足您的网站需求。
          </p>
        </div>
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12 detail-mb">
          <h3 class="detail-h3">
            <i class="am-icon-send-o am-icon-sm"></i>
            轻量级，高性能
          </h3>

          <p class="detail-p">
            介绍信息
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="hope">
  <div class="am-g am-container">
    <div class="am-u-lg-4 am-u-md-6 am-u-sm-12 hope-img">
      <img src="/nekovps/Public/assets/images/landing.png" alt="" data-am-scrollspy="{animation:'slide-left', repeat: false}">
      <hr class="am-article-divider am-show-sm-only hope-hr">
    </div>
    <div class="am-u-lg-8 am-u-md-6 am-u-sm-12">
      <h2 class="hope-title">同我们一起打造你的网站系统</h2>

      <p>
        在知识爆炸的年代，我们不愿成为知识的过客，拥抱开源文化，发挥社区的力量，能获得自我提升。
      </p>
    </div>
  </div>
</div>

<div class="about">
  <div class="am-g am-container">
    <div class="am-u-lg-12">
      <h2 class="about-title about-color">崇尚开放、自由，非常欢迎大家的参与</h2>

      <div class="am-g">
        <div class="am-u-lg-6 am-u-md-4 am-u-sm-12">
          <form class="am-form">
            <label for="name" class="about-color">你的姓名</label>
            <input id="name" type="text">
            <br/>
            <label for="email" class="about-color">你的邮箱</label>
            <input id="email" type="email">
            <br/>
            <label for="message" class="about-color">你的留言</label>
            <textarea id="message"></textarea>
            <br/>
            <button type="submit" class="am-btn am-btn-primary am-btn-sm"><i class="am-icon-check"></i> 提 交</button>
          </form>
          <hr class="am-article-divider am-show-sm-only">
        </div>

        <div class="am-u-lg-6 am-u-md-8 am-u-sm-12">
          <h4 class="about-color">关于NekoVps</h4>

          <p>NekoVps Inc
            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX。</p>
          <h4 class="about-color">团队介绍</h4>

          <p>XljBearSoft Team 获得了微软创投孵化器的支持，其领先科技已得到全球多家企业及机构的认可与信赖，客户包括全球500强企业、美国政府、国内政府机关、国内外上市公司、以及互联网标准化组织W3C。</p>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="footer">
  <p>© 2016 <a href="http://www.nekoneko.moe" target="_blank">NekoVps, Inc.</a> . by the XljBearSoft Team.</p>
</footer>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/nekovps/Public/assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/nekovps/Public/assets/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="/nekovps/Public/assets/js/amazeui.min.js"></script>
</body>
</html>