<?php if (!defined('THINK_PATH')) exit();?><!doctype html>  
<html>  
<head>    
<meta charset="utf-8">  
<title>手机网站</title>  
<meta name="keywords" content="" />  
<meta name="description" content="" />  
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />    
<meta name="format-detection" content="telephone=no" />  
<meta name="apple-mobile-web-app-capable" content="yes" />  
<meta name="apple-mobile-web-app-status-bar-style" content="black"> 
<link rel="stylesheet"  href="/Public/css/reset.css"/>
<link rel="stylesheet"  href="/Public/css/common.css"/>
<link rel="stylesheet"  href="/Public/css/layer.css"/>
<script type="text/javascript" src="/Public/js/index.js"></script>
<script type="text/javascript" src="/Public/js/jquery.min.js"></script>
<script type="text/javascript" src="/Public/js/layer.js"></script>
</head>  
<body> 
<div class="header">
	<div class="menus" onClick="openmenu();">
    </div>	   
    <div class="reminder">
    </div>
</div>
<link rel="stylesheet" href="/Public/css/swiper.min.css">
<script src="/Public/js/swiper.min.js"></script>
<div class="index-scroll">
	<img src="/Public/images/img1.jpg" style=" width:100%; height:3rem;"/>
</div>
<div class="acty-invite">
	<a href="">
    </a>
    <ul>
    	<li class="l"></li>
        <li>新手标</li>
        <li class="r"></li>
    </ul>
</div>
<div class="imme-invest">
	<table>
    	<tr class="top">
        	<td align="left"><font>1.00%</font></td>
            <td align="center">7天</td>
            <td align="right">10.00%</td>
        </tr>
        <tr class="bottom">
        	<td align="left">历史年化回报</td>
            <td align="center">投资期限</td>
            <td align="right">奖励</td>
        </tr>
    </table>
    <a href="">立即投资</a>
</div>
<div class="info-public">
	<div class="swiper-container">
    	<div class="swiper-wrapper">
            <div class="swiper-slide">159***82910用户投资了58万标</div>
            <div class="swiper-slide">159***22222用户投资了59万标</div>
            <div class="swiper-slide">189***33333用户投资了60万标</div>
        </div>
    </div>
</div>
<div class="pub-data">
	<div class="pub-titles">
    	<em>|</em>人人都在用
    </div>
    <ul class="tab">
        <li class="cur">累计服务用户<br/><font>142万</font></li>
        <li >累计为用户赚取<br/><font>2亿</font></li>
    	<li>累计撮合交易<br/><font>10亿</font></li>
        <div class="clearfix"></div>
    </ul>
    
    <div id="tab-box">
        <div class="on">
        	<p class="t">累计服务用户</p>
            <p class="c">
            	<span>1</span><span>4</span><em>,</em><span>1</span><span>4</span><span>4</span><em>,</em><span>1</span><span>9</span>
            </p>
        </div>
        <div >
        	<p class="t">累计为用户赚取</p>
            <p class="c">
            	<span>1</span><span>4</span><em>,</em><span>1</span><span>4</span><span>4</span><em>,</em><span>1</span><span>9</span><span>4</span>
            </p>
        </div>
        <div>
        	<p class="t">累计撮合交易</p>
            <p class="c">
            	<span>2</span><span>4</span><em>,</em><span>1</span><span>4</span><span>4</span><em>,</em><span>1</span><span>9</span><span>4</span>
            </p>
        </div>
    </div>
</div>

<script>
var mySwiper = new Swiper('.swiper-container', {
	autoplay: true,//可选选项，自动滑动
	direction : 'vertical',
})
//选项卡
$(document).ready(function() {
	$(".tab li").click(function() {
    	$(".tab li").eq($(this).index()).addClass("cur").siblings().removeClass('cur');
    	$("#tab-box div").hide().eq($(this).index()).show();
    });
});
</script>
<div style="display:none">
    <div id="cebianlan">
    	<div class="avatar">
        	<img src="/Public/images/rabbit.jpg"/>
        </div>
        <div class="chinese-name">
        	Super-rabit
        </div>
        <div class="option-list">
        	<a href="" class="a1">首页</a>
            <a href="" class="a2">我的资产</a>
            <a href="" class="a3">我要投资</a>
            <a href="" class="a4">微E圈</a>
            <a href="" class="a5">设置</a>
        </div>
    </div>
</div>
<script>
function openmenu(){
	var htmls = $("#cebianlan").html();
	htmls='<div id="menuform">'+htmls+'</div>';
	layer.open({
		type: 1
		,content: htmls
		,anim: 'right'
		,style: 'position:fixed; top:0; left:0; width: 4.85rem; height: 100%; border:none;'
	});
}
</script>
</body>
</html>