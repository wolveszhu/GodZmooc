<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>全部课程 - 网易云课堂</title>
		<meta name="keywords" content="云课堂">
		<meta name="description" content="云课堂">
		<script type="text/javascript"charset="utf-8"src="/godzmooc/Public/Home/js/ajax.js"></script>
		<script type="text/javascript"charset="utf-8"src="/godzmooc/Public/Home/js/jquery.js"></script>
		<meta name="description" content="">
		<title>网易用户中心</title>
	</head>
	
	
		<link rel="stylesheet" href="/godzmooc/Public/Home/css/reg/global.css">
		<link rel="stylesheet" href="/godzmooc/Public/Home/css/reg/autoComplete.css">
		<link rel="stylesheet" href="/godzmooc/Public/Home/css/reg/reg.css">
		<link rel="stylesheet" href="/godzmooc/Public/Home/css/reg/popup.css">
		<script type="text/javascript"src="/godzmooc/Public/Home/js/jquery.js"></script>
		<script type="text/javascript"src="/godzmooc/Public/Home/js/ajax.js"></script>
	<body class="s-study">
		<div class="g-doc" style="min-width:1240px">
			<div class="g-hd">
				<div class="g-in">
					<div class="m-logobar">
						<h1>
							<a href="#" target="_blank">
								<em>网易用户中心</em><img src="/godzmooc/Public/Home/imgs/reg/logo2.png" alt="网易用户中心" title="网易用户中心">
							</a>
						</h1>
						<i>|</i>
						<h2 class="f-ff1">注册</h2>
					</div>
				</div>
			</div>
			<div class="g-bd">
				<div class="g-in" style="min-width:1240px">

				<!-- tab模块 -->
					<div class="m-tab">
						<div class="tabHd">
							<ul class="f-cbli">
								<li class="z-on">
									<a href="javascript:void(0);">邮箱帐号注册</a>
								</li>
							</ul>
						</div>
						<div class="tabBdNew" style="overflow:visible;">
							<div class="tabBd" style="float:left;height:590px">
								<form method="post" action="/godzmooc/index.php/Login/add" autocomplete="off">
									<div id="regEmail">
										<div class="m-ipt f-mb0">
											<div class="u-ipt">
												<div class="iptctn">
													<input type="email" name="email" id="email_name_r" tabindex="1" value="" autocapitalize="off" myholder="常用邮箱地址" placeholder="常用邮箱地址">
													<span id="nu"></span>
												</div>
											</div>
											<p class="u-tips">
												<em>&nbsp;</em><span></span>
											</p>
										</div>
										<div class="regFormSplit">
											<a href="">没有邮箱？注册网易邮箱</a>
										</div>
										<div class="m-ipt">
											<div class="u-popup f-dn" id="j-popup">
												<div class="pophd">
													<p class="f-ff1 f-fwb">网易用户中心的 程序猿们建议您:</p>
												</div>
												<div class="popcnt">
												</div>
											</div>
											<div class="u-ipt ">
												<div class="iptctn">
													<input type="password" name="password" id="password" tabindex="2" maxlength="16" value="" autocapitalize="off" myholder="设置密码" placeholder="设置密码"><span id="pwd"></span>
												</div>
											</div>
											<p class="u-tips ">
												<em>&nbsp;</em><span></span>
											</p>
										</div>
										<div class="m-ipt">
											<div class="u-ipt "><div class="iptctn"><input type="password" name="pwd" id="re_password" tabindex="3" value="" autocapitalize="off" maxlength="16" myholder="确认密码" placeholder="确认密码"><span id="pwd1"></span></div></div>
											<p class="u-tips ">
												<em>&nbsp;</em><span></span>
											</p>
										</div>
										<div class="m-ipt m-ipt-code">
											<div class="u-ipt "><div class="iptctn"><input type="text" name="code" id="usercheckcode" tabindex="4" autocapitalize="off" myholder="验证码" style="width:170px;" placeholder="验证码"></div></div>
											<img id="code" width="128" height="40" src="/godzmooc/index.php/Login/verify" alt="验证码" title="验证码">
											<a href="javascript:void(0);" class="u-btn u-btn-img u-btn-img-code"><span><em></em></span></a>
											<p class="u-tips ">
												<em>&nbsp;</em><span></span>
											</p>
										</div>
										<input type="submit" class="u-btn2" value="立即注册"/>
									</div>

									<span class="u-check">
										<input type="checkbox" name="agree" id="agree" checked="checked">
										<label for="agree">我同意  
											<a href="" target="_blank">" 服务条款  "</a> 和  
											<a href="" target="_blank">" 网络游戏用户隐私权保护和个人信息利用政策 "</a>
										</label>
									</span>
								</form>
							</div>
							<!-- 广告模块 -->
							<div class="tabBdAd">
									<div>
										<p class="ad_title">用网易邮箱大师</p>
										<p class="ad_title">管理邮箱更简单</p>
										<p class="ad_lit_title">[自动登录、再也不用记密码]</p><p class="ad_lit_title">[不用费心、所有邮箱自动收发]</p>
									</div>
									<div style="width: 200px;height: 257px;margin: 20px auto;">
										<img src="/godzmooc/Public/Home/imgs/reg/got2.jpg"></div>
										<a class="f-ib" target="_blank" href="" style="width: 145px;height: 40px;background:url(/images2/got1.jpg) no-repeat"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="g-ft">
				<div class="g-in">
					<div class="m-cp">
						<p>
							<a href="" target="_blank">About NetEase</a>-
							<a href="" target="_blank">公司简介</a>-<a href="" target="_blank">联系方式</a>-
							<a href="" target="_blank">OAuth2.0认证</a>-<a href="" target="_blank">招聘信息</a>-
							<a href="" target="_blank">客户服务</a>-<a href="" target="_blank">相关法律</a>-
							<a href="" target="_blank">网络营销</a>
						</p>
						<p>
							网易公司版权所有 ©1997- 2015
						</p>
					</div>
				</div>
			</div>
		</div>
		<div id="autoCompleteList"></div>
	</body>
		<script type="text/javascript"charset="utf-8">
		
		var u=true;
		$("#email_name_r").blur(function()
		{
			var email=this.value;
			if(!email)
			{
				$("#nu").css("color","red");
				$("#nu").html("请输入邮箱");
				return u = false;
			}else
			{
				$.get("/godzmooc/index.php/Login/reg1?email="+email,function(b){
					if(b){
						$("#nu").css("color","red");
						$("#nu").html("邮箱已被注册");
						return u = false;
					}else{
						$("#nu").css("color","green");
						$("#nu").html("");
						return u = true;
					}
				});
				
				//$("#nu").html("");
				//return u = true;
			}
		});
	
		var p=true;
		$("#password").blur(function(){
			var val=this.value;
			if(!val){
				$("#pwd").css("color","red");
				$("#pwd").html("请输入密码");
				return p = false;
			}else if(val.length < 9){
				$("#pwd").css("color","red");
				$("#pwd").html("密码过短");
				return p = false;
			}else{
				$("#pwd").css("color","green");
				$("#pwd").html("密码可用");
				return p = true;
			}
		});		
			
		var p1=true;
		$("#re_password").blur(function(){
			var val=this.value;
			if(!val
			){
				$("#pwd1").css("color","red");
				$("#pwd1").html("请再次输入密码");
				return p1 = false;
			}else if(val != $(":password").val()){
				$("#pwd1").css("color","red");
				$("#pwd1").html("两次输入不同");
				return p1 = false;
			}else{
				$("#pwd1").css("color","green");
				$("#pwd1").html("密码格式正确");
				return p1 = true;
			}
		});
		
		$("form").submit(function()
		{
			$("#email_name_r").blur();
			$("#password").blur();
			$("#re_password").blur();
			
			if(u && p && p1)
			{
				return true;
			}
			return false;
		});
		
		$("#code").click(function(){
			this.src = this.src+'?'+Math.random();
		});
		
		
		
	</script>

</html>