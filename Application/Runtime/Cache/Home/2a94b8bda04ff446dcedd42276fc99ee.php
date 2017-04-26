<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?php echo ($configs["title"]); ?></title>
	<meta name="keywords" content="<?php echo ($configs["keywords"]); ?>">
	<meta name="description" content="<?php echo ($configs["description"]); ?>">
<script type="text/javascript" async src="/Public/Home/js/ga.js"></script>
<script src="/Public/Home/js/jquery.js" type="text/javascript"></script>
<script src="/Public/Home/js/ajax.js" type="text/javascript"></script>
<link href="/Public/Home/css/public.css" type="text/css" rel="stylesheet">
<link href="/Public/Home/css/index.css" type="text/css" rel="stylesheet">

</head>
<body class="m-index auto-1449466856996-parent" style="padding-top: 0px;">
<script></script>
<script type="text/javascript">window.navNotFixed=!1;window.isNavIndex=!0;</script>
		<div id="login1">
			<div><a href="/index.php/Detail/personal/id/<?php echo ($_SESSION["id"]); ?>"><?php echo ($lo["username"]); ?></a></div>
			<div><a href="/index.php/Detail/personalCenter/id/<?php echo ($lo["id"]); ?>">个人主页</a></div>
			<div><a href="/index.php/User/advice/id/<?php echo ($lo["id"]); ?>">反馈意见</a></div>
			<div><a href="/index.php/Detail/index/id/<?php echo ($lo["id"]); ?>">设置</a></div>
			<div><a href="/index.php/Index/logout">退出</a></div>
		</div>
<div>
	<div class="m-indextopnav" id="j-indextopnav">
    <div class="g-flow">
		<!-- 登录界面 -->
      <div class="topheader f-pr f-cb">
        <div class="logo f-fl f-cb">
		  <img class="f-fl img" usemap="#Map" src="/Public/Upload/<?php echo ($configs["logo"]); ?>" alt="网易云课堂" width="500" height="100">
          <map name="Map">
            <area hidefocus="true" data-index="网易云课堂logo" title="网易云课堂" target="_self" href="" coords="56,40,250,75" shape="RECT">
          </map>
        </div>
        <script>window.huanbao = '';</script>
		
		<?php if($lo["id"] == null): ?><!-- 未登录显示的页面 -->
			<div class="userinfo f-fr f-cb f-pr">
				<div class="unlogin f-fr f-cb">
				<a  href="/index.php/Login/index.html" class="f-fr j-nav-loginBtn" id="j-login" data-index="登陆注册">登录/注册</a>
				<p class="f-fc3 f-f0 f-fr" style="color:#333;">支持网易邮箱、QQ、微博号</p>
				</div>
			</div>
		<?php else: ?>
			<!-- 登录显示的页面 -->
			
			<div id="login" class="name j-userinfo">
				<div class="f-pr">
					<a href="/index.php/Info/index/id/<?php echo ($lo["id"]); ?>">
						消息
					</a>
					<a href="/index.php">
						课程包
					</a>
					<a href="/index.php" style="" class="face">
						<img class="headImg" src="/Public/Upload/<?php echo ($_SESSION["pic"]); ?>"/>
					</a>
				</div>
			</div><?php endif; ?>
      </div>
      <div class="topnav f-pr f-cb" id="j-navshowoffset">
        <div class="u-indexnavcatebtn" id="j-nav-indexcatebtn">
			<a href="" target="_blank" class="cbtn f-cb" data-index="全部课程">
				<div class="ic f-fl"></div>
				<span class="qb f-fl f-f0">全部课程</span>
			</a>
		</div>
        <div class="u-indexnavcatedialog f-pa" id="j-nav-indexcatedialog">
          <div class="f-fl cateleft f-pa j-cateleft" id="auto-id-1449466857071">
            <div class="catebg f-pa"></div>
            <div class="items f-pa">
			  <!-- IT互联网 -->
			  <?php $num = '66'; ?>
			  <?php if(is_array($types)): foreach($types as $key=>$types): ?><div class="item j-item " id="auto-id-14494668570<?php echo ($num); ?>">
                <div class="curbg"></div>
                <div class="inn">
					<a data-index="<?php echo ($types["name"]); ?>" id="<?php echo ($types["id"]); ?>" target="_blank" href="/index.php/type/index/id/<?php echo ($types["id"]); ?>" data-name="" class="f-f0 first"><?php echo ($types["name"]); ?></a>
                </div>
              </div>
			  <b style="display:none;"><?php echo ($num++); ?></b><?php endforeach; endif; ?>
			</div>
          </div>
          <div class="branch" id="auto-id-1449466857072" style="display:none;">
		    <a class="close f-pa j-close" id="auto-id-1449466857065"></a>
			
			<!-- IT互联网 -->
            <div class="IT" style="display:none;">
			  <a href = "">
				<h4 class = "tit">分类目录</h4>
              </a>
              <p class = "links">

			  </p>
              <a href = "#">系列课程</a>
              <p class = "links">
				<a href = "#">互联网+时代如何创业？</a><br>
                <a href = "#">平面设计师必学4大技能</a><br>
                <a href = "#">淘宝美工 玩转店铺装修</a><br>
                <a href = "#">零基础学会网页设计</a><br>
                <a href = "#">思维导图从入门到精通</a><br>
                <a href = "#">开发语言核心技术</a><br>
                <a href = "#">更多</a><br>
              </p>
              <a href = "">
				<img src = "/Public/Home/imgs/74826827C7C42F618FBD57644BB018FB.png" class="f-pa pic" alt = "图片">
			  </a>
  		    </div>
			
			<!-- 职场技能 -->
            <div class="work" style="display:none;">
			  <a href = "">
				<h4 class="tit">分类目录</h4>
              </a>
              <p class="links">
				
			  </p>
              <a href="">系列课程</a>
              <p class="links">
				<a href=""</a><br>
                <a href="">跟着大牛学Office办公技能</a><br>
                <a href="">市场从业者必学技能系列</a><br>
                <a href="">赢在职场，学习人际关系处理</a><br>
                <a href="">跟我考初级会计师</a><br>
                <a href="">和小蚊子学数据分析</a><br>
                <a href="">更多</a><br>
               </p>
               <a href="">
				<img src="/Public/Home/imgs/8F59299CC0954CA71D2D265B94DD8367.png" class="f-pa pic" alt="图片">
			   </a>
		    </div>
			
			<!-- 语言学习 -->
            <div class="study" style="display:none;">
			  <a href="">
				<h4 class="tit">分类目录</h4>
              </a>
              <p class="links">
					
  			  </p>
              <a href="">系列课程</a>
              <p class="links">
				<a href="">英语达人训练营</a><br>
                <a href="">更多</a><br>
              </p>
              <a href=""">
				<img src="/Public/Home/imgs/EE5D341A47C8811DE7A64190F9956E63.png" class="f-pa pic" alt="图片">
  			  </a>
			</div>
			
			<!-- 兴趣爱好 -->
            <div class="fave" style="display:none;">
			  <a href="">
				<h4 class="tit">分类目录</h4>
              </a>
              <p class="links">

  		     </p>
			  <a href="">系列课程</a>
              <p class="links">
			  <a href="">秋天不容错过的六大美食</a><br>
              <a href="">从零开始学摄影</a><br>
              <a href="">跟明星学唱歌，称霸KTV</a><br>
              <a href="">更多</a><br>
             </p>
              <a href="">
				<img src="/Public/Home/imgs/79D70AD3168F98C5C287DB84190B66C5.png" class="f-pa pic" alt="图片">
			 </a>
			</div>
			
			<!--  更多分类 -->
            <div class="more" style="display:none;">
			  <a href="">
				<h4 class="tit">分类目录</h4>
              </a>
              <p class="links">
					
			  </p>
              <a href="">系列课程</a>
              <p class="links">
				<a href="">大学一定要做的7件事</a><br>
                <a href="">学中医养生，炼成魅力女神</a><br>
                <a href="">宅家手册 天天不重样</a><br>
                <a href="">互联网时代的时间管理法则</a><br>
                <a href="">更多</a><br>
              </p>
              <a href="">
				<img src="/Public/Home/imgs/E00E907512ECBAE31B8BB180FBCE6312.png" class="f-pa pic" alt="图片">
 			  </a>
		    </div>
          
		  </div>
        </div>
		
        <div class="mainnav f-cb j-navFind">
		  <a data-index="首页" class="nitem f-f0" href="/index.php/Index/index.html" hidefocus="true">首页</a>
          <div class="f-cb nitem f-f0 x-hoverItem"> <span>课程体系</span>
            <div class="f-pa u-navdropmenu x-child">
				<span class="arrr f-pa"></span>
				<a data-index="大学计算机专业" class="f-f0 dropitem" href="/index.php/major/major_inter" hidefocus="true"> <span>大学计算机专业</span>
				</a>
				<a data-index="互联网职业技能" class="f-f0 dropitem" href="/index.php/major/major_skill" hidefocus="true">
					<span>互联网职业技能</span>
				</a>
				<a data-index="金融专业" class="f-f0 dropitem last" href="/index.php/major/major_money" hidefocus="true">
					<span>金融专业</span>
				</a>
			</div>
          </div>
          <a data-index="微专业" class="nitem f-f0" href="/index.php/major/major_small" hidefocus="true">微专业</a>
		  <div class="nitem f-f0 x-hoverItem" hidefocus="true"> <span class="j-dropmenubtn" data-href="/client/download.htm" id="auto-id-1449466857063">下载APP</span>
            <div class="u-navapptip f-pa x-child">
              <div class="arrr f-pa"></div>
              <img src="/Public/Home/imgs/nav_qrcode.png" class="ewm f-fl" alt="下载APP" title="下载APP">
              <div class="rcon f-fr">
                <h4 class="txt">扫码下载官方App</h4>
                <a data-index="appstore下载" href="/index.php/User/download" target="_blank" class="store apple"><img src="/Public/Home/imgs/upload(1).png" width="150px"></a> <a data-index="android下载" href="/index.php/User/download" target="_blank" class="store android"><img src="/Public/Home/imgs/upload(2).png"></a> </div>
            </div>
          </div>
          <a class="nitem f-f0" data-index="学习中心" href="" hidefocus="true">学习中心</a>
          <div class="xxzxtip f-pa f-dn" id="j-xxzxtip">
            <div class="arrr f-pa"></div>
            <div class="text f-fl">
              <p>“我的云课堂”改名为“学习中心”啦！</p>
              <p>你可以在学习中心查看所有学习记录和进度。</p>
            </div>
            <div class="xxzxtip-close f-pa" id="j-xxzxtip-close">X</div>
          </div>
        </div>
        <div class="search j-searchP">
          <div class="box j-search f-cb">
            <div class="submit j-submit f-hide f-fl" id="auto-id-1449466857049">搜索课程、计划或用户</div>
            <input type="text" class="j-input f-fl" data-index="搜索" placeholder="搜索" id="auto-id-1449466857055">
          </div>
          <div class="j-suggest u-navsearchsug"></div>
         </div>
       </div>
    </div>
  </div>
	<!-- 滚屏部分 -->
	<div id="pic">
		<div>
			<a href="/index.php/Type/index"><img src="/Public/Home/imgs/jp.jpg" style="display:none"/></a>
			<a href="/index.php/Type/index"><img src="/Public/Home/imgs/girl.jpg" style="display:none"/></a>
			<a href="/index.php/Type/index"><img src="/Public/Home/imgs/go.png" style="display:none"/></a>
			<a href="/index.php/Type/index"><img src="/Public/Home/imgs/she.jpg" style="display:none"/></a>
			<a href="/index.php/Type/index"><img src="/Public/Home/imgs/new.png" style="display:none"/></a>
			<a href="/index.php/Type/index"><img src="/Public/Home/imgs/qz.png" style="display:none"/></a>
			<a href="/index.php/Type/index"><img src="/Public/Home/imgs/four.png"/></a>
			<div id="a">
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div>
	</div>
	
<div class="u-gray" style="margin-top:16px;">
  <div class="m-micro">
    <div class="g-flow f-pr">
      <div class="f-cb m-micro-wrap">
        <div class="f-fl item0"> <a href="/index.php/course/course_list.html" target="_blank"> <img src="/Public/Home/imgs/microicon.png" alt="微专业介绍图">
          <p class="intro f-f0">一种专业有效的职业培训方案</p>
          </a> </div>
        <div class="cntwrap" id="j-cntwrap">
          <div class="cntlist" id="j-cntlist">
            <div class="item f-fl"> <a href="/index.php/course/course_list.html" data-index="1" data-name="iOS开发工程师_三个月学会iOS构建" target="_blank">
              <div class="tit f-f0 f-thide">5-iOS开发工程师</div>
              <div class="tip f-f0 f-thide">三个月学会iOS构建</div>
              </a> </div>
            <div class="item f-fl"> <a href="" data-index="2" data-name="产品经理_网易5个亿级产品总监亲授" target="_blank">
              <div class="tit f-f0 f-thide">产品经理</div>
              <div class="tip f-f0 f-thide">网易5个亿级产品总监亲授</div>
              </a> </div>
            <div class="item f-fl"> <a href="" data-index="3" data-name="Java 开发工程师_浙大Java男神翁恺执教" target="_blank">
              <div class="tit f-f0 f-thide">Java 开发工程师</div>
              <div class="tip f-f0 f-thide">浙大Java男神翁恺执教</div>
              </a> </div>
            <div class="item f-fl"> <a href="" data-index="4" data-name="税务会计主管_精通税务，办税不慌" target="_blank">
              <div class="tit f-f0 f-thide">税务会计主管</div>
              <div class="tip f-f0 f-thide">精通税务，办税不慌</div>
              </a> </div>
            
            <div class="larr f-pa" id="j-larr"></div>
            <div class="rarr f-pa" id="j-rarr"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  
  <div class="m-seckill f-dn" id="j-seckill">
    <div class="g-flow">
      <div class="m-seckill-wrap f-cb">
        <div class="time f-fl">
          <p class="tit" id="j-seckill-tit">限量秒杀</p>
          <div class="icon"><img src="" alt="" id="j-seckill-icon"></div>
          <p style="display:none" class="cnt" id="j-seckill-cnt">本场开始倒计时</p>
          <p style="display:none" class="overcnt" id="j-seckill-overcnt"></p>
          <p style="display:none" class="count" id="j-seckill-count">--:--:--</p>
        </div>
        <div id="xlms_course" class="f-fl m-seckill-container"></div>
      </div>
    </div>
  </div>
  <div class="g-flow  m-block-it" id="j-mftj">
    <div class="g-container f-cb"> <a href="/index.php/course/course_list.html" target="_blank"> <img src="/Public/Home/imgs/mfhk.png" class="g-cell" alt="免费好课推荐"> </a>
      <div class="f-fl" id="mfhk">
	    
        <div class="u-index-list f-cb">
		<?php if(is_array($videos)): foreach($videos as $key=>$video): ?><div class="u-cover u-find-cover first" id="auto-id-1449504749256">
            <div class="wrap f-cb"> <a href="/index.php/Course/index/id/<?php echo ($video["id"]); ?>" target="_blank" class="j-href wrap" data-href="/course/introduction/1522003.htm" data-index="1" data-name="女神美腿操">
		  
			 <div class="img">
			 
                <div class="pic f-pr"> <img class="imgPic j-img" src="/Public/Upload/<?php echo ($video["video"]); ?>" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://nos.netease.com/edu-image/35A9269EE09341F003BE51B48A82515D.png?imageView&amp;thumbnail=225y142&amp;quality=100_225x142x1x95.png?imageView&amp;thumbnail=225y142&amp;quality=100" alt="女神美腿操" id="auto-id-1449504749273"> </div>
                <div class="tit">
                  <h3 class="f-thide"><?php echo ($video["title"]); ?></h3>
                  <h3 class="f-thide"><?php echo ($video["tname"]); ?></h3>
                  <div class="continued sign f-dn">老师参与</div>
                  <div class="continued sign foxconn2 f-dn "></div>
                </div>
               
                <div class="thumb">
                  <div class="desc f-cb"> <span class="hot f-fs0">781</span> </div>
                  <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                </div>
                <div class="f-dn"></div>
              </div>
			  
              </a>
              <div class="j-mask mask" data-id="1522003" style="display:none">
                <div class="j-del delbtn"></div>
              </div>
           
		   </div>
			 
			</div><?php endforeach; endif; ?>
		  </div>
        
		 </div>
		 
    </div>
  </div>
  <div class="g-flow m-block-it m-hot" id="j-hot">
    <div class="u-bar f-cb">
      <h2 class="f-fl">畅销好课</h2>
      <a class="u-more f-fr j-more" data-index="更多" data-name="更多" target="_blank" href="http://study.163.com/find.htm"><span>更多</span><span class="icn"></span></a> 
	</div>
    <div class="f-cb">
      <div class="g-mn2">
        <div class="g-mn2c">
          <div class="g-container">
            <div class="g-cell"> <a href="http://study.163.com/course/introduction/940019.htm#/courseDetail" data-index="左边" data-name="英语口语革命" target="_blank">
              <div class="x-zoomImg"> <img class="j-llimg" id="auto-id-1449504748143" src="/Public/Home/imgs/index.png" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://nos.netease.com/edu-image/842CF923C1BB105949C5DDC8575047A9.png?imageView&amp;thumbnail=225y466&amp;quality=100_225x466x1x95.png" width="225" height="466" alt="英语口语革命"> </div>
              </a> </div>
            <div id="cxkctj">
			
              <div class="u-index-list f-cb">
			  <?php if(is_array($goods)): foreach($goods as $key=>$good): ?><div class="u-cover u-find-cover first" id="auto-id-1449504749390">
                  <div class="wrap f-cb"> <a  href="/index.php/Course/index/id/<?php echo ($good["id"]); ?>"target="_blank" class="j-href wrap" data-href="/course/introduction/1337018.htm" data-index="1" data-name="向《经济学人》学图表">
                    <div class="img">
                      <div class="pic f-pr"> <img class="imgPic j-img" src="/Public/Upload/<?php echo ($good["video"]); ?>" id="auto-id-1449504749421"> </div>
                      <div class="tit">
                        <h3 class="f-thide"><?php echo ($good["title"]); ?></h3>
                        <div class="continued sign f-dn">老师参与</div>
                        <div class="continued sign foxconn2 f-dn "></div>
                      </div>
                      <div class="orgName f-fs0 f-thide"><?php echo ($good["tname"]); ?></div>
                      <div class="thumb">
                        <div class="desc f-cb"> <span class="hot f-fs0">535</span> </div>
                        <div class="btn f-pr btn2"> <span class="normal f-fs0">¥<?php echo ($good["price"]); ?></span> <span class="discount"></span> </div>
                      </div>
                      <div class="u-cst-10"></div>
                    </div>
                    </a>
                    <div class="j-mask mask" data-id="1337018" style="display:none">
                      <div class="j-del delbtn"></div>
                    </div>
                  </div>
                </div><?php endforeach; endif; ?>
               </div>
           
			</div>
          </div>
        </div>
      </div>
	 
	 <!-- 新闻遍历-->
	  
      <div class="g-sd2">
        <div class="g-cell1 listrec">
          <ul>
		  <?php if(is_array($news)): foreach($news as $key=>$new): ?><li class="f-fcf">
				<a class="listlink f-thide" data-index="文字链" data-name="手把手教你读财报" href="" target="_blank"><?php echo ($new["title"]); ?>
				</a>
			</li><?php endforeach; endif; ?>
          </ul>
        </div>
        <div class="g-cell1"> <a href="http://study.163.com/course/introduction/608026.htm#/courseDetail" data-index="小图" data-name="小图" target="_blank">
          <div class="x-zoomImg"> <img class="j-llimg" id="auto-id-1449504748145" src="/Public/Home/imgs/index(1).png" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://nos.netease.com/edu-image/012D303308DF28AE2365CF57647CF72D.png?imageView&amp;thumbnail=225y324&amp;quality=100_225x324x1x95.png" width="225" height="324" alt="雷子思维导图"> </div>
          </a> </div>
      </div>
	  
    </div>
  </div>
  <div class="g-flow" id="j-teacher">
    <div class="u-bar f-cb">
      <h2 class="f-fl">名师大咖秀</h2>
      <a class="u-more f-fr j-more" data-index="申请加入" data-name="申请加入" target="_blank" href="#><span>申请加入</span><span class="icn"></span></a>
	</div>
    <ul id="j-recteachers" class="m-lectors f-cb">
		
	<?php if(is_array($teachers)): foreach($teachers as $key=>$teacher): ?><li class="lector f-fl f-pr"> 
			<a href="/index.php/Teacher/index/id/<?php echo ($teacher["id"]); ?>" target="_blank" class="head" data-index="1" data-name="翁恺" title="翁恺"> 
			<img class="" id="" src="/Public/Upload/<?php echo ($teacher["photo"]); ?>" width="240" height="240" alt="teacher.name">
			<h3 class="f-pa f-fcf info f-thide"> 
			<span class="name"><?php echo ($teacher["tname"]); ?></span>
			
			</h3>
			</a> 
		</li><?php endforeach; endif; ?>
		<li class="lector f-fl f-pr">
		<ul class="m-orgs f-cb">
	<?php if(is_array($teachers)): foreach($teachers as $key=>$teacher): ?><li class="olist f-fcf f-cb"> 
		  <a class="oname f-thide f-fl" href="http://study.163.com/u/3575790365" data-index="文字链" data-name="HRBar专业人资培训" target="_blank" title="HRBar专业人资培训"><?php echo ($teacher["organ"]); ?> </a> <span class="f-fr">[机构]</span> 
		  </li><?php endforeach; endif; ?>
		</ul>
      </li>
    </ul>
  </div>
  <div class="b-70"></div>
</div>

<!--
<div class="g-flow" id="auto-id-1449504749522">
  <div class="m-block-it j-cateBlock" data-cat="首页_IT互联网" id="auto-id-1449504748190">
    <div class="u-bar-70 f-cb">
      <h2 class="f-fl">IT互联网</h2>
      <a class="u-more f-fr j-more" data-index="更多" data-name="更多" target="_blank" href="http://study.163.com/find.htm#/courselist?ct=3"><span>更多</span><span class="icn"></span></a> <a class="f-fr f-fc6 kwLink" data-index="编程语言" data-name="编程语言" href="http://study.163.com/find.htm#/courselist?ct=7" target="_blank">编程语言</a> <a class="f-fr f-fc6 kwLink" data-index="产品经理" data-name="产品经理" href="http://mooc.study.163.com/smartSpec/detail/56001.htm" target="_blank">产品经理</a> <a class="f-fr f-fc6 kwLink" data-index="产品设计" data-name="产品设计" href="http://study.163.com/find.htm#/courselist?ct=3001" target="_blank">产品设计</a> <a class="f-fr f-fc6 kwLink" data-index="Web开发" data-name="Web开发" href="http://study.163.com/find.htm#/courselist?ct=8" target="_blank">Web开发</a> </div>
    <div class="f-cb" id="auto-id-1449504749521">
      <div class="g-mn2" id="auto-id-1449504749520">
        <div class="g-mn2c" id="auto-id-1449504749519">
          <div class="g-container" id="auto-id-1449504749518">
            <div class="g-cell2"> <a href="http://study.163.com/course/introduction/1564012.htm#/courseDetail" target="_blank" data-index="左边" data-name="黑客">
              <div class="x-zoomImg"> <img class="j-llimg" id="auto-id-1449504749494" src="/Public/Home/imgs/index(6).png" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://nos.netease.com/edu-image/485C48CA78D4C4FBBA6630B89D022156.png?imageView&amp;thumbnail=470y184&amp;quality=100_470x184x1x95.png" width="470" height="184" alt="黑客"> </div>
              </a> </div>
            <div id="3_kctj">
              <div class="u-index-list f-cb" id="auto-id-1449504749517">
                <div class="u-cover u-find-cover first" id="auto-id-1449504749285">
                  <div class="wrap f-cb"> <a target="_blank" class="j-href wrap" data-href="/course/introduction/1546006.htm" data-index="1" data-name="VMware Workstation虚拟机入门">
                    <div class="img">
                      <div class="pic f-pr"> <img class="imgPic j-img" src="/Public/Home/imgs/index(9).jpg" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://nos.netease.com/edu-image/955EDDEEBF7561403BE52C5EEA916A07.png?imageView&amp;thumbnail=225y142&amp;quality=100_225x142x1x95.png?imageView&amp;thumbnail=225y142&amp;quality=100" alt="VMware Workstation虚拟机入门" id="auto-id-1449504749498"> </div>
                      <div class="tit">
                        <h3 class="f-thide">VMware&nbsp;Workstation虚拟机入门</h3>
                        <div class="continued sign f-dn">老师参与</div>
                        <div class="continued sign foxconn2 f-dn "></div>
                      </div>
                      <div class="orgName f-fs0 f-thide">艾叔C语言学苑</div>
                      <div class="thumb">
                        <div class="desc f-cb"> <span class="hot f-fs0">222</span> </div>
                        <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                      </div>
                      <div class="f-dn"></div>
                    </div>
                    </a>
                    <div class="j-mask mask" data-id="1546006" style="display:none">
                      <div class="j-del delbtn"></div>
                    </div>
                  </div>
                </div>
                <div class="u-cover u-find-cover" id="auto-id-1449504749290">
                  <div class="wrap f-cb"> <a target="_blank" class="j-href wrap" data-href="/course/introduction/1000035.htm" data-index="2" data-name="用Python做些事">
                    <div class="img">
                      <div class="pic f-pr"> <img class="imgPic j-img" src="/Public/Home/imgs/index(10).jpg" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://nos.netease.com/edu-image/CD83EA171A4255A2438329E45536B2AD.png?imageView&amp;thumbnail=225y142&amp;quality=100_225x142x1x95.png?imageView&amp;thumbnail=225y142&amp;quality=100" alt="用Python做些事" id="auto-id-1449504749500"> </div>
                      <div class="tit">
                        <h3 class="f-thide">用Python做些事</h3>
                        <div class="continued sign ">老师参与</div>
                        <div class="continued sign foxconn2 f-dn foxconn"></div>
                      </div>
                      <div class="orgName f-fs0 f-thide">黑板客</div>
                      <div class="thumb">
                        <div class="desc f-cb"> <span class="hot f-fs0">1120</span> </div>
                        <div class="btn f-pr btn2"> <span class="normal f-fs0">¥ 18.00</span> <span class="discount"></span> </div>
                      </div>
                      <div class="f-dn"></div>
                    </div>
                    </a>
                    <div class="j-mask mask" data-id="1000035" style="display:none">
                      <div class="j-del delbtn"></div>
                    </div>
                  </div>
                </div>
                <div class="u-cover u-find-cover" id="auto-id-1449504749295">
                  <div class="wrap f-cb"> <a target="_blank" class="j-href wrap" data-href="/course/introduction/382025.htm" data-index="3" data-name="产品经理入门秘籍">
                    <div class="img">
                      <div class="pic f-pr"> <img class="imgPic j-img" src="/Public/Home/imgs/index(12).jpg" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://nos.netease.com/edu-image/9D626CE165B3086A141E05AFE7849D94.png?imageView&amp;thumbnail=225y142&amp;quality=100_225x142x1x95.png?imageView&amp;thumbnail=225y142&amp;quality=100" alt="产品经理入门秘籍" id="auto-id-1449504749502"> </div>
                      <div class="tit">
                        <h3 class="f-thide">产品经理入门秘籍</h3>
                        <div class="continued sign f-dn">老师参与</div>
                        <div class="continued sign foxconn2 f-dn "></div>
                      </div>
                      <div class="orgName f-fs0 f-thide">产品100</div>
                      <div class="thumb">
                        <div class="desc f-cb"> <span class="hot f-fs0">46636</span> </div>
                        <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                      </div>
                      <div class="f-dn"></div>
                    </div>
                    </a>
                    <div class="j-mask mask" data-id="382025" style="display:none">
                      <div class="j-del delbtn"></div>
                    </div>
                  </div>
                </div>
                <div class="u-cover u-find-cover" id="auto-id-1449504749300">
                  <div class="wrap f-cb"> <a target="_blank" class="j-href wrap" data-href="/course/introduction/1454006.htm" data-index="4" data-name="AutoCAD快速制图">
                    <div class="img">
                      <div class="pic f-pr"> <img class="imgPic j-img" src="/Public/Home/imgs/index(13).jpg" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://nos.netease.com/edu-image/AE8780F30AB4C9C9FCD559DC4F0921F8.png?imageView&amp;thumbnail=225y142&amp;quality=100_225x142x1x95.png?imageView&amp;thumbnail=225y142&amp;quality=100" alt="AutoCAD快速制图" id="auto-id-1449504749504"> </div>
                      <div class="tit">
                        <h3 class="f-thide">AutoCAD快速制图</h3>
                        <div class="continued sign ">老师参与</div>
                        <div class="continued sign foxconn2 f-dn foxconn"></div>
                      </div>
                      <div class="orgName f-fs0 f-thide">蓝领工程教育</div>
                      <div class="thumb">
                        <div class="desc f-cb"> <span class="hot f-fs0">3056</span> </div>
                        <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                      </div>
                      <div class="u-cst-10"></div>
                    </div>
                    </a>
                    <div class="j-mask mask" data-id="1454006" style="display:none">
                      <div class="j-del delbtn"></div>
                    </div>
                  </div>
                </div>
                <div class="u-cover u-find-cover g-hide" id="auto-id-1449504749305">
                  <div class="wrap f-cb"> <a target="_blank" class="j-href wrap" data-href="/course/introduction/647009.htm" data-index="5" data-name="你也能做的好莱坞特效">
                    <div class="img">
                      <div class="pic f-pr"> <img class="imgPic j-img" src="/Public/Home/imgs/index(14).jpg" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://nos.netease.com/edu-image/96F075F427A07F5EF2F893BE185C3480.png?imageView&amp;thumbnail=225y142&amp;quality=100_225x142x1x95.png?imageView&amp;thumbnail=225y142&amp;quality=100" alt="你也能做的好莱坞特效" id="auto-id-1449504749506"> </div>
                      <div class="tit">
                        <h3 class="f-thide">你也能做的好莱坞特效</h3>
                        <div class="continued sign f-dn">老师参与</div>
                        <div class="continued sign foxconn2 f-dn "></div>
                      </div>
                      <div class="orgName f-fs0 f-thide">邢帅教育</div>
                      <div class="thumb">
                        <div class="desc f-cb"> <span class="hot f-fs0">20427</span> </div>
                        <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                      </div>
                      <div class="f-dn"></div>
                    </div>
                    </a>
                    <div class="j-mask mask" data-id="647009" style="display:none">
                      <div class="j-del delbtn"></div>
                    </div>
                  </div>
                </div>
                <div class="u-cover u-find-cover g-hide" id="auto-id-1449504749310">
                  <div class="wrap f-cb"> <a target="_blank" class="j-href wrap" data-href="/course/introduction/1007013.htm" data-index="6" data-name="SPSS入门与提高">
                    <div class="img">
                      <div class="pic f-pr"> <img class="imgPic j-img" src="/Public/Home/imgs/index(15).jpg" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://nos.netease.com/edu-image/6D5CA38B848956B3F49602A1DC37C5A0.png?imageView&amp;thumbnail=225y142&amp;quality=100_225x142x1x95.png?imageView&amp;thumbnail=225y142&amp;quality=100" alt="SPSS入门与提高" id="auto-id-1449504749508"> </div>
                      <div class="tit">
                        <h3 class="f-thide">SPSS入门与提高</h3>
                        <div class="continued sign ">老师参与</div>
                        <div class="continued sign foxconn2 f-dn foxconn"></div>
                      </div>
                      <div class="orgName f-fs0 f-thide">松鼠学堂</div>
                      <div class="thumb">
                        <div class="desc f-cb"> <span class="hot f-fs0">13565</span> </div>
                        <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                      </div>
                      <div class="f-dn"></div>
                    </div>
                    </a>
                    <div class="j-mask mask" data-id="1007013" style="display:none">
                      <div class="j-del delbtn"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="g-sd2">
        <div class="g-cell1 listrec listrec-1">
          <ul>
            <li class="f-thide f-fcf"><a data-index="文字链" data-name="http://study.163.com/course/introduction/1338015.htm#/courseDetail" class="listlink" href="http://study.163.com/course/introduction/1338015.htm#/courseDetail" target="_blank">17门课精通数据挖掘与分析</a></li>
            <li class="f-thide f-fcf"><a data-index="文字链" data-name="http://study.163.com/series/79002.htm" class="listlink" href="http://study.163.com/series/79002.htm" target="_blank">零基础学会网页设计</a></li>
            <li class="f-thide f-fcf"><a data-index="文字链" data-name="http://study.163.com/course/introduction/1478003.htm#/courseDetail" class="listlink" href="http://study.163.com/course/introduction/1478003.htm#/courseDetail" target="_blank">Indesign排版速成记</a></li>
            <li class="f-thide f-fcf"><a data-index="文字链" data-name="http://study.163.com/course/introduction/1565012.htm#/courseDetail" class="listlink" href="http://study.163.com/course/introduction/1565012.htm#/courseDetail" target="_blank">一看就懂的React实战教程</a></li>
          </ul>
        </div>
        <div class="g-cell1"> <a href="http://study.163.com/course/introduction/993001.htm#/courseDetail" target="_blank" data-index="右边" data-name="http://nos.netease.com/edu-image/DD3BE8EB952917BB1AE735744F15C281.png?imageView&amp;thumbnail=225y248&amp;quality=100">
          <div class="x-zoomImg"> <img class="j-llimg" id="auto-id-1449504749496" src="/Public/Home/imgs/index(7).png" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://nos.netease.com/edu-image/DD3BE8EB952917BB1AE735744F15C281.png?imageView&amp;thumbnail=225y248&amp;quality=100_225x248x1x95.png" width="225" height="248" alt="引爆潮流的秘密"> </div>
          </a> </div>
      </div>
    </div>
  </div>
  <script>             window.recCourseId = window.recCourseId || [];             window.recCourseId.push(3);         </script>
  <div class="b-10"></div>
  <div class="m-block-it j-cateBlock" data-cat="首页_职场技能" id="auto-id-1449504748191">
    <div class="u-bar-70 f-cb">
      <h2 class="f-fl">职场技能</h2>
      <a class="u-more f-fr j-more" data-index="更多" data-name="更多" target="_blank" href="http://study.163.com/find.htm#/courselist?ct=18"><span>更多</span><span class="icn"></span></a> <a class="f-fr f-fc6 kwLink" data-index="求职应聘" data-name="求职应聘" href="http://study.163.com/find.htm#/courselist?ct=30" target="_blank">求职应聘</a> <a class="f-fr f-fc6 kwLink" data-index="职业考试" data-name="职业考试" href="http://study.163.com/find.htm#/courselist?ct=35" target="_blank">职业考试</a> <a class="f-fr f-fc6 kwLink" data-index="办公技能" data-name="办公技能" href="http://study.163.com/find.htm#/courselist?ct=19" target="_blank">办公技能</a> <a class="f-fr f-fc6 kwLink" data-index="商务礼仪" data-name="商务礼仪" href="http://study.163.com/find.htm#/courselist?ct=31" target="_blank">商务礼仪</a> </div>
    <div class="f-cb">
      <div class="g-mn2">
        <div class="g-mn2c">
          <div class="g-container">
            <div class="g-cell"> <a href="http://study.163.com/course/introduction/1545001.htm?sk=1#/courseDetail" target="_blank" data-index="左边" data-name="【简快阅读37】 天天25小时">
              <div class="x-zoomImg"> <img class="j-llimg" id="auto-id-1449504749526" src="/Public/Home/imgs/index(8).png" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://nos.netease.com/edu-image/8D4496D63D47D4EF55DB2F1BDD91E59B.png?imageView&amp;thumbnail=470y184&amp;quality=100_225x390x1x95.png" width="225" height="390" alt="【简快阅读37】 天天25小时"> </div>
              </a> </div>
            <div id="18_kctj">
              <div class="u-index-list f-cb">
                <div class="u-cover u-find-cover first" id="auto-id-1449504749320">
                  <div class="wrap f-cb"> <a target="_blank" class="j-href wrap" data-href="/course/introduction/260001.htm" data-index="1" data-name="职场新人公文写作训练">
                    <div class="img">
                      <div class="pic f-pr"> <img class="imgPic j-img" src="/Public/Home/imgs/index(16).jpg" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://nos.netease.com/edu-image/7BE7ECBA33499995EB8C93B720922EC7.png?imageView&amp;thumbnail=225y142&amp;quality=100_225x142x1x95.png?imageView&amp;thumbnail=225y142&amp;quality=100" alt="职场新人公文写作训练" id="auto-id-1449504749528"> </div>
                      <div class="tit">
                        <h3 class="f-thide">职场新人公文写作训练</h3>
                        <div class="continued sign f-dn">老师参与</div>
                        <div class="continued sign foxconn2 f-dn "></div>
                      </div>
                      <div class="orgName f-fs0 f-thide">魏洪滨</div>
                      <div class="thumb">
                        <div class="desc f-cb"> <span class="hot f-fs0">5623</span> </div>
                        <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                      </div>
                      <div class="f-dn"></div>
                    </div>
                    </a>
                    <div class="j-mask mask" data-id="260001" style="display:none">
                      <div class="j-del delbtn"></div>
                    </div>
                  </div>
                </div>
                <div class="u-cover u-find-cover" id="auto-id-1449504749325">
                  <div class="wrap f-cb"> <a target="_blank" class="j-href wrap" data-href="/course/introduction/1374004.htm" data-index="2" data-name="玩转搜索引擎">
                    <div class="img">
                      <div class="pic f-pr"> <img class="imgPic j-img" src="/Public/Home/imgs/index(17).jpg" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://nos.netease.com/edu-image/1FB6B2002B9E2AE4A298CFC7FA7A5729.png?imageView&amp;thumbnail=225y142&amp;quality=100_225x142x1x95.png?imageView&amp;thumbnail=225y142&amp;quality=100" alt="玩转搜索引擎" id="auto-id-1449504749530"> </div>
                      <div class="tit">
                        <h3 class="f-thide">玩转搜索引擎</h3>
                        <div class="continued sign f-dn">老师参与</div>
                        <div class="continued sign foxconn2 f-dn "></div>
                      </div>
                      <div class="orgName f-fs0 f-thide">爱科技</div>
                      <div class="thumb">
                        <div class="desc f-cb"> <span class="hot f-fs0">1641</span> </div>
                        <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                      </div>
                      <div class="f-dn"></div>
                    </div>
                    </a>
                    <div class="j-mask mask" data-id="1374004" style="display:none">
                      <div class="j-del delbtn"></div>
                    </div>
                  </div>
                </div>
                <div class="u-cover u-find-cover" id="auto-id-1449504749330">
                  <div class="wrap f-cb"> <a target="_blank" class="j-href wrap" data-href="/course/introduction/1000037.htm" data-index="3" data-name="如何在群面中脱颖而出？">
                    <div class="img">
                      <div class="pic f-pr"> <img class="imgPic j-img" src="/Public/Home/imgs/index(18).jpg" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://nos.netease.com/edu-image/7E1251FBCCBB5A7673A3DC2C34EE893E.png?imageView&amp;thumbnail=225y142&amp;quality=100_225x142x1x95.png?imageView&amp;thumbnail=225y142&amp;quality=100" alt="如何在群面中脱颖而出？" id="auto-id-1449504749532"> </div>
                      <div class="tit">
                        <h3 class="f-thide">如何在群面中脱颖而出？</h3>
                        <div class="continued sign f-dn">老师参与</div>
                        <div class="continued sign foxconn2 f-dn "></div>
                      </div>
                      <div class="orgName f-fs0 f-thide">知知网</div>
                      <div class="thumb">
                        <div class="desc f-cb"> <span class="hot f-fs0">306</span> </div>
                        <div class="btn f-pr btn2"> <span class="normal f-fs0">¥ 18.00</span> <span class="discount"></span> </div>
                      </div>
                      <div class="f-dn"></div>
                    </div>
                    </a>
                    <div class="j-mask mask" data-id="1000037" style="display:none">
                      <div class="j-del delbtn"></div>
                    </div>
                  </div>
                </div>
                <div class="u-cover u-find-cover" id="auto-id-1449504749335">
                  <div class="wrap f-cb"> <a target="_blank" class="j-href wrap" data-href="/course/introduction/214004.htm" data-index="4" data-name="如何制作商业PPT">
                    <div class="img">
                      <div class="pic f-pr"> <img class="imgPic j-img" src="/Public/Home/imgs/index(19).jpg" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://nos.netease.com/edu-image/1346D87ECA36B880CD19D2DF0642CC9E.png?imageView&amp;thumbnail=225y142&amp;quality=100_225x142x1x95.png?imageView&amp;thumbnail=225y142&amp;quality=100" alt="如何制作商业PPT" id="auto-id-1449504749536"> </div>
                      <div class="tit">
                        <h3 class="f-thide">如何制作商业PPT</h3>
                        <div class="continued sign f-dn">老师参与</div>
                        <div class="continued sign foxconn2 f-dn "></div>
                      </div>
                      <div class="orgName f-fs0 f-thide">秋叶</div>
                      <div class="thumb">
                        <div class="desc f-cb"> <span class="hot f-fs0">24449</span> </div>
                        <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                      </div>
                      <div class="f-dn"></div>
                    </div>
                    </a>
                    <div class="j-mask mask" data-id="214004" style="display:none">
                      <div class="j-del delbtn"></div>
                    </div>
                  </div>
                </div>
                <div class="u-cover u-find-cover g-hide" id="auto-id-1449504749340">
                  <div class="wrap f-cb"> <a target="_blank" class="j-href wrap" data-href="/course/introduction/832005.htm" data-index="5" data-name="麦肯锡教我的写作武器">
                    <div class="img">
                      <div class="pic f-pr"> <img class="imgPic j-img" src="/Public/Home/imgs/index(20).jpg" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://nos.netease.com/edu-image/64048853F307B0642CA9C0A4E8E18CCC.png?imageView&amp;thumbnail=225y142&amp;quality=100_225x142x1x95.png?imageView&amp;thumbnail=225y142&amp;quality=100" alt="麦肯锡教我的写作武器" id="auto-id-1449504749538"> </div>
                      <div class="tit">
                        <h3 class="f-thide">麦肯锡教我的写作武器</h3>
                        <div class="continued sign f-dn">老师参与</div>
                        <div class="continued sign foxconn2 f-dn "></div>
                      </div>
                      <div class="orgName f-fs0 f-thide">武汉幻方科技有限公司</div>
                      <div class="thumb">
                        <div class="desc f-cb"> <span class="hot f-fs0">15223</span> </div>
                        <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                      </div>
                      <div class="f-dn"></div>
                    </div>
                    </a>
                    <div class="j-mask mask" data-id="832005" style="display:none">
                      <div class="j-del delbtn"></div>
                    </div>
                  </div>
                </div>
                <div class="u-cover u-find-cover g-hide" id="auto-id-1449504749345">
                  <div class="wrap f-cb"> <a target="_blank" class="j-href wrap" data-href="/course/introduction/982033.htm" data-index="6" data-name="正确撰写商务邮件">
                    <div class="img">
                      <div class="pic f-pr"> <img class="imgPic j-img" src="/Public/Home/imgs/index(21).jpg" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://nos.netease.com/edu-image/F0E1A0906F3A7E6B40C2AF9A9980B469.png?imageView&amp;thumbnail=225y142&amp;quality=100_225x142x1x95.png?imageView&amp;thumbnail=225y142&amp;quality=100" alt="正确撰写商务邮件" id="auto-id-1449504749540"> </div>
                      <div class="tit">
                        <h3 class="f-thide">正确撰写商务邮件</h3>
                        <div class="continued sign f-dn">老师参与</div>
                        <div class="continued sign foxconn2 f-dn "></div>
                      </div>
                      <div class="orgName f-fs0 f-thide">知知网</div>
                      <div class="thumb">
                        <div class="desc f-cb"> <span class="hot f-fs0">13</span> </div>
                        <div class="btn f-pr btn2"> <span class="normal f-fs0">¥ 24.00</span> <span class="discount"></span> </div>
                      </div>
                      <div class="f-dn"></div>
                    </div>
                    </a>
                    <div class="j-mask mask" data-id="982033" style="display:none">
                      <div class="j-del delbtn"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="g-sd2">
        <div class="g-cell1 listrec listrec-2">
          <ul>
            <li class="f-thide f-fcf"><a data-index="文字链" data-name="http://study.163.com/course/introduction/270010.htm#/courseDetail" class="listlink" href="http://study.163.com/course/introduction/270010.htm#/courseDetail" target="_blank">5步写出1秒打动HR的简历</a></li>
            <li class="f-thide f-fcf"><a data-index="文字链" data-name="http://study.163.com/course/introduction/1571001.htm#/courseDetail" class="listlink" href="http://study.163.com/course/introduction/1571001.htm#/courseDetail" target="_blank">电商必看！微信营销新模式</a></li>
            <li class="f-thide f-fcf"><a data-index="文字链" data-name="http://study.163.com/series/79003.htm" class="listlink" href="http://study.163.com/series/79003.htm" target="_blank">即学即用的文案训练营</a></li>
            <li class="f-thide f-fcf"><a data-index="文字链" data-name="http://study.163.com/course/introduction/1017055.htm" class="listlink" href="http://study.163.com/course/introduction/1017055.htm" target="_blank">五百强公司最看重的特质</a></li>
          </ul>
        </div>
        <div class="g-cell1"> <a href="http://study.163.com/course/introduction.htm?courseId=1520002#/courseDetail" target="_blank" data-index="右边" data-name="http://nos.netease.com/edu-image/3163EFADCADAA0EA52035AC44B3FC1F2.png?imageView&amp;thumbnail=225y248&amp;quality=100">
          <div class="x-zoomImg"> <img class="j-llimg" id="auto-id-1449504749534" src="/Public/Home/imgs/index(9).png" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://nos.netease.com/edu-image/3163EFADCADAA0EA52035AC44B3FC1F2.png?imageView&amp;thumbnail=225y248&amp;quality=100_225x248x1x95.png" width="225" height="248" alt="专业硕士逻辑：冲刺串讲"> </div>
          </a> </div>
      </div>
    </div>
  </div>
  <script>             window.recCourseId = window.recCourseId || [];             window.recCourseId.push(18);         </script>
  <div class="b-10"></div>
  <div class="m-block-it j-cateBlock" data-cat="首页_语言学习" id="auto-id-1449504748192">
    <div class="u-bar-70 f-cb">
      <h2 class="f-fl">语言学习</h2>
      <a class="u-more f-fr j-more" data-index="更多" data-name="更多" target="_blank" href="http://study.163.com/find.htm#/courselist?ct=28"><span>更多</span><span class="icn"></span></a> <a class="f-fr f-fc6 kwLink" data-index="托福雅思" data-name="托福雅思" href="http://study.163.com/find.htm#/courselist?ct=47" target="_blank">托福雅思</a> <a class="f-fr f-fc6 kwLink" data-index="日常实用英语" data-name="日常实用英语" href="http://study.163.com/find.htm#/courselist?ct=41" target="_blank">日常实用英语</a> <a class="f-fr f-fc6 kwLink" data-index="日语" data-name="日语" href="http://study.163.com/find.htm#/courselist?ct=49" target="_blank">日语</a> <a class="f-fr f-fc6 kwLink" data-index="韩语" data-name="韩语" href="http://study.163.com/find.htm#/courselist?ct=50" target="_blank">韩语</a> </div>
    <div class="f-cb">
      <div class="g-mn2">
        <div class="g-mn2c">
          <div class="g-container">
            <div class="g-cell2"> <a href="http://study.163.com/course/introduction/1228001.htm#/courseDetail" target="_blank" data-index="左边" data-name="无痛职场英语口语">
              <div class="x-zoomImg"> <img class="j-llimg" id="auto-id-1449504749550" src="/Public/Home/imgs/index(10).png" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://nos.netease.com/edu-image/F7CF5461D844436F5CE2723954A26528.png?imageView&amp;thumbnail=470y184&amp;quality=100_470x184x1x95.png" width="470" height="184" alt="无痛职场英语口语"> </div>
              </a> 
			</div>
            <div id="28_kctj">
              <div class="u-index-list f-cb">
                <div class="u-cover u-find-cover first" id="auto-id-1449504749464">
                  <div class="wrap f-cb"> <a target="_blank" class="j-href wrap" data-href="/course/introduction/1456003.htm" data-index="1" data-name="书本上学不到的英语表达">
                    <div class="img">
                      <div class="pic f-pr"> <img class="imgPic j-img" src="/Public/Home/imgs/index(22).jpg" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://nos.netease.com/edu-image/ADE220CCE0A9BC38F7E635B6316A3F61.png?imageView&amp;thumbnail=225y142&amp;quality=100_225x142x1x95.png?imageView&amp;thumbnail=225y142&amp;quality=100" alt="书本上学不到的英语表达" id="auto-id-1449504749552"> </div>
                      <div class="tit">
                        <h3 class="f-thide">书本上学不到的英语表达</h3>
                        <div class="continued sign f-dn">老师参与</div>
                        <div class="continued sign foxconn2 f-dn "></div>
                      </div>
                      <div class="orgName f-fs0 f-thide">维视课堂</div>
                      <div class="thumb">
                        <div class="desc f-cb"> <span class="hot f-fs0">8248</span> </div>
                        <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                      </div>
                      <div class="f-dn"></div>
                    </div>
                    </a>
                    <div class="j-mask mask" data-id="1456003" style="display:none">
                      <div class="j-del delbtn"></div>
                    </div>
                  </div>
                </div>
                <div class="u-cover u-find-cover" id="auto-id-1449504749469">
                  <div class="wrap f-cb"> <a target="_blank" class="j-href wrap" data-href="/course/introduction/1255001.htm" data-index="2" data-name="雅思写作精细30讲">
                    <div class="img">
                      <div class="pic f-pr"> <img class="imgPic j-img" src="/Public/Home/imgs/index(23).jpg" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://nos.netease.com/edu-image/9A01CF0B9975111C4B173F0E86AE0FB7.png?imageView&amp;thumbnail=225y142&amp;quality=100_225x142x1x95.png?imageView&amp;thumbnail=225y142&amp;quality=100" alt="雅思写作精细30讲" id="auto-id-1449504749554"> </div>
                      <div class="tit">
                        <h3 class="f-thide">雅思写作精细30讲</h3>
                        <div class="continued sign f-dn">老师参与</div>
                        <div class="continued sign foxconn2 f-dn "></div>
                      </div>
                      <div class="orgName f-fs0 f-thide">美联英语</div>
                      <div class="thumb">
                        <div class="desc f-cb"> <span class="hot f-fs0">3656</span> </div>
                        <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                      </div>
                      <div class="f-dn"></div>
                    </div>
                    </a>
                    <div class="j-mask mask" data-id="1255001" style="display:none">
                      <div class="j-del delbtn"></div>
                    </div>
                  </div>
                </div>
                <div class="u-cover u-find-cover" id="auto-id-1449504749474">
                  <div class="wrap f-cb"> <a target="_blank" class="j-href wrap" data-href="/course/introduction/268001.htm" data-index="3" data-name="Ohlala法语">
                    <div class="img">
                      <div class="pic f-pr"> <img class="imgPic j-img" src="/Public/Home/imgs/index(24).jpg" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://nos.netease.com/edu-image/6A62238E143D7768E108BA2068C85037.png?imageView&amp;thumbnail=225y142&amp;quality=100_225x142x1x95.png?imageView&amp;thumbnail=225y142&amp;quality=100" alt="Ohlala法语" id="auto-id-1449504749558"> </div>
                      <div class="tit">
                        <h3 class="f-thide">Ohlala法语</h3>
                        <div class="continued sign f-dn">老师参与</div>
                        <div class="continued sign foxconn2 f-dn "></div>
                      </div>
                      <div class="orgName f-fs0 f-thide">沪江网校</div>
                      <div class="thumb">
                        <div class="desc f-cb"> <span class="hot f-fs0">32097</span> </div>
                        <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                      </div>
                      <div class="f-dn"></div>
                    </div>
                    </a>
                    <div class="j-mask mask" data-id="268001" style="display:none">
                      <div class="j-del delbtn"></div>
                    </div>
                  </div>
                </div>
                <div class="u-cover u-find-cover" id="auto-id-1449504749479">
                  <div class="wrap f-cb"> <a target="_blank" class="j-href wrap" data-href="/course/introduction/232009.htm" data-index="4" data-name="零基础学韩语">
                    <div class="img">
                      <div class="pic f-pr"> <img class="imgPic j-img" src="/Public/Home/imgs/index(25).jpg" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://nos.netease.com/edu-image/E9901AD9D81BC1FBD2AB4A5F99D9BA30.png?imageView&amp;thumbnail=225y142&amp;quality=100_225x142x1x95.png?imageView&amp;thumbnail=225y142&amp;quality=100" alt="零基础学韩语" id="auto-id-1449504749560"> </div>
                      <div class="tit">
                        <h3 class="f-thide">零基础学韩语</h3>
                        <div class="continued sign f-dn">老师参与</div>
                        <div class="continued sign foxconn2 f-dn "></div>
                      </div>
                      <div class="orgName f-fs0 f-thide">沪江网校</div>
                      <div class="thumb">
                        <div class="desc f-cb"> <span class="hot f-fs0">62676</span> </div>
                        <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                      </div>
                      <div class="f-dn"></div>
                    </div>
                    </a>
                    <div class="j-mask mask" data-id="232009" style="display:none">
                      <div class="j-del delbtn"></div>
                    </div>
                  </div>
                </div>
                <div class="u-cover u-find-cover g-hide" id="auto-id-1449504749484">
                  <div class="wrap f-cb"> <a target="_blank" class="j-href wrap" data-href="/course/introduction/657001.htm" data-index="5" data-name="旅游必学的基础日语">
                    <div class="img">
                      <div class="pic f-pr"> <img class="imgPic j-img" src="/Public/Home/imgs/index(26).jpg" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://nos.netease.com/edu-image/1E88827A5539695C8FAB473E2477302D.png?imageView&amp;thumbnail=225y142&amp;quality=100_225x142x1x95.png?imageView&amp;thumbnail=225y142&amp;quality=100" alt="旅游必学的基础日语" id="auto-id-1449504749562"> </div>
                      <div class="tit">
                        <h3 class="f-thide">旅游必学的基础日语</h3>
                        <div class="continued sign f-dn">老师参与</div>
                        <div class="continued sign foxconn2 f-dn "></div>
                      </div>
                      <div class="orgName f-fs0 f-thide">未名天日语网校</div>
                      <div class="thumb">
                        <div class="desc f-cb"> <span class="hot f-fs0">3509</span> </div>
                        <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                      </div>
                      <div class="f-dn"></div>
                    </div>
                    </a>
                    <div class="j-mask mask" data-id="657001" style="display:none">
                      <div class="j-del delbtn"></div>
                    </div>
                  </div>
                </div>
                <div class="u-cover u-find-cover g-hide" id="auto-id-1449504749489">
                  <div class="wrap f-cb"> <a target="_blank" class="j-href wrap" data-href="/course/introduction/975006.htm" data-index="6" data-name="四级！要来了！">
                    <div class="img">
                      <div class="pic f-pr"> <img class="imgPic j-img" src="/Public/Home/imgs/index(27).jpg" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://nos.netease.com/edu-image/99EDE363987E37CB2E9B3B6946983924.png?imageView&amp;thumbnail=225y142&amp;quality=100_225x142x1x95.png?imageView&amp;thumbnail=225y142&amp;quality=100" alt="四级！要来了！" id="auto-id-1449504749564"> </div>
                      <div class="tit">
                        <h3 class="f-thide">四级！要来了！</h3>
                        <div class="continued sign f-dn">老师参与</div>
                        <div class="continued sign foxconn2 f-dn "></div>
                      </div>
                      <div class="orgName f-fs0 f-thide">万学教育</div>
                      <div class="thumb">
                        <div class="desc f-cb"> <span class="hot f-fs0">9811</span> </div>
                        <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                      </div>
                      <div class="f-dn"></div>
                    </div>
                    </a>
                    <div class="j-mask mask" data-id="975006" style="display:none">
                      <div class="j-del delbtn"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="g-sd2">
        <div class="g-cell1 listrec listrec-3">
          <ul>
            <li class="f-thide f-fcf"><a data-index="文字链" data-name="http://study.163.com/course/introduction/1543008.htm#/courseDetail" class="listlink" href="http://study.163.com/course/introduction/1543008.htm#/courseDetail" target="_blank">精看电影学口语</a></li>
            <li class="f-thide f-fcf"><a data-index="文字链" data-name="http://study.163.com/course/introduction/1119010.htm" class="listlink" href="http://study.163.com/course/introduction/1119010.htm" target="_blank">立志！将英语变成母语</a></li>
            <li class="f-thide f-fcf"><a data-index="文字链" data-name="http://study.163.com/course/introduction/1385001.htm#/courseDetail" class="listlink" href="http://study.163.com/course/introduction/1385001.htm#/courseDetail" target="_blank">[日语挑战]实用口语200句</a></li>
            <li class="f-thide f-fcf"><a data-index="文字链" data-name="http://study.163.com/course/introduction/651003.htm#/courseDetail" class="listlink" href="http://study.163.com/course/introduction/651003.htm#/courseDetail" target="_blank">西班牙语语音零基础</a></li>
          </ul>
        </div>
        <div class="g-cell1"> <a href="http://study.163.com/course/introduction/926006.htm#/courseDetail" target="_blank" data-index="右边" data-name="http://nos.netease.com/edu-image/97CB9B466375B58C57ED674F4007DDCB.png?imageView&amp;thumbnail=225y248&amp;quality=100">
          <div class="x-zoomImg"> <img class="j-llimg" id="auto-id-1449504749556" src="/Public/Home/imgs/index(11).png" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://nos.netease.com/edu-image/97CB9B466375B58C57ED674F4007DDCB.png?imageView&amp;thumbnail=225y248&amp;quality=100_225x248x1x95.png" width="225" height="248" alt="看匹诺曹学韩语"> </div>
          </a> </div>
      </div>
    </div>
  </div>
  <script>             window.recCourseId = window.recCourseId || [];             window.recCourseId.push(28);         </script>
  <div class="b-10"></div>
  <div class="m-block-it j-cateBlock" data-cat="首页_兴趣爱好" id="auto-id-1449504748193">
    <div class="u-bar-70 f-cb">
      <h2 class="f-fl">兴趣爱好</h2>
      <a class="u-more f-fr j-more" data-index="更多" data-name="更多" target="_blank" href="http://study.163.com/find.htm#/courselist?ct=10001"><span>更多</span><span class="icn"></span></a> <a class="f-fr f-fc6 kwLink" data-index="乐器" data-name="乐器" href="http://study.163.com/find.htm#/courselist?ct=10002" target="_blank">乐器</a> <a class="f-fr f-fc6 kwLink" data-index="健身" data-name="健身" href="http://study.163.com/find.htm#/courselist?ct=11001" target="_blank">健身</a> <a class="f-fr f-fc6 kwLink" data-index="摄影" data-name="摄影" href="http://study.163.com/find.htm#/courselist?ct=13002" target="_blank">摄影</a> <a class="f-fr f-fc6 kwLink" data-index="美妆" data-name="美妆" href="http://study.163.com/find.htm#/courselist?ct=12002" target="_blank">美妆</a> </div>
    <div class="f-cb">
      <div class="g-mn2">
        <div class="g-mn2c">
          <div class="g-container">
            <div class="g-cell"> <a href="http://study.163.com/course/introduction.htm?courseId=1039031#/courseDetail" target="_blank" data-index="左边" data-name="文青速成——读诗赏句学修辞">
              <div class="x-zoomImg"> <img class="j-llimg" id="auto-id-1449504749577" src="/Public/Home/imgs/index(12).png" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://nos.netease.com/edu-image/D8536F84E93943A921678EBF017B7A67.png?imageView&amp;thumbnail=470y184&amp;quality=100_225x390x1x95.png" width="225" height="390" alt="文青速成——读诗赏句学修辞"> </div>
              </a> </div>
            <div id="10001_kctj">
              <div class="u-index-list f-cb">
                <div class="u-cover u-find-cover first" id="auto-id-1449504749355">
                  <div class="wrap f-cb"> <a target="_blank" class="j-href wrap" data-href="/course/introduction/1438003.htm" data-index="1" data-name="三阶魔方初级入门">
                    <div class="img">
                      <div class="pic f-pr"> <img class="imgPic j-img" src="/Public/Home/imgs/index(28).jpg" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://nos.netease.com/edu-image/8BB05A8B10F53E66D646573ECE3BF478.png?imageView&amp;thumbnail=225y142&amp;quality=100_225x142x1x95.png?imageView&amp;thumbnail=225y142&amp;quality=100" alt="三阶魔方初级入门" id="auto-id-1449504749579"> </div>
                      <div class="tit">
                        <h3 class="f-thide">三阶魔方初级入门</h3>
                        <div class="continued sign f-dn">老师参与</div>
                        <div class="continued sign foxconn2 f-dn "></div>
                      </div>
                      <div class="orgName f-fs0 f-thide">番茄魔方</div>
                      <div class="thumb">
                        <div class="desc f-cb"> <span class="hot f-fs0">1789</span> </div>
                        <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                      </div>
                      <div class="f-dn"></div>
                    </div>
                    </a>
                    <div class="j-mask mask" data-id="1438003" style="display:none">
                      <div class="j-del delbtn"></div>
                    </div>
                  </div>
                </div>
                <div class="u-cover u-find-cover" id="auto-id-1449504749360">
                  <div class="wrap f-cb"> <a target="_blank" class="j-href wrap" data-href="/course/introduction/392006.htm" data-index="2" data-name="发现《黄帝内经》的生命智慧">
                    <div class="img">
                      <div class="pic f-pr"> <img class="imgPic j-img" src="/Public/Home/imgs/index(29).jpg" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://nos.netease.com/edu-image/6BF7997EA1BC1A0654744496E52EDE70.png?imageView&amp;thumbnail=225y142&amp;quality=100_225x142x1x95.png?imageView&amp;thumbnail=225y142&amp;quality=100" alt="发现《黄帝内经》的生命智慧" id="auto-id-1449504749581"> </div>
                      <div class="tit">
                        <h3 class="f-thide">发现《黄帝内经》的生命智慧</h3>
                        <div class="continued sign f-dn">老师参与</div>
                        <div class="continued sign foxconn2 f-dn "></div>
                      </div>
                      <div class="orgName f-fs0 f-thide">中益训</div>
                      <div class="thumb">
                        <div class="desc f-cb"> <span class="hot f-fs0">10318</span> </div>
                        <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                      </div>
                      <div class="u-cst-10"></div>
                    </div>
                    </a>
                    <div class="j-mask mask" data-id="392006" style="display:none">
                      <div class="j-del delbtn"></div>
                    </div>
                  </div>
                </div>
                <div class="u-cover u-find-cover" id="auto-id-1449504749365">
                  <div class="wrap f-cb"> <a target="_blank" class="j-href wrap" data-href="/course/introduction/984031.htm" data-index="3" data-name="20万年薪设计师养成记">
                    <div class="img">
                      <div class="pic f-pr"> <img class="imgPic j-img" src="/Public/Home/imgs/index(30).jpg" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://nos.netease.com/edu-image/9C6DF922E65FB890BB4A11F86353B420.png?imageView&amp;thumbnail=225y142&amp;quality=100_225x142x1x95.png?imageView&amp;thumbnail=225y142&amp;quality=100" alt="20万年薪设计师养成记" id="auto-id-1449504749583"> </div>
                      <div class="tit">
                        <h3 class="f-thide">20万年薪设计师养成记</h3>
                        <div class="continued sign f-dn">老师参与</div>
                        <div class="continued sign foxconn2 f-dn "></div>
                      </div>
                      <div class="orgName f-fs0 f-thide">淘宝小学</div>
                      <div class="thumb">
                        <div class="desc f-cb"> <span class="hot f-fs0">10179</span> </div>
                        <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                      </div>
                      <div class="f-dn"></div>
                    </div>
                    </a>
                    <div class="j-mask mask" data-id="984031" style="display:none">
                      <div class="j-del delbtn"></div>
                    </div>
                  </div>
                </div>
                <div class="u-cover u-find-cover" id="auto-id-1449504749370">
                  <div class="wrap f-cb"> <a target="_blank" class="j-href wrap" data-href="/course/introduction/1459031.htm" data-index="4" data-name="轻松掌握15种构图法">
                    <div class="img">
                      <div class="pic f-pr"> <img class="imgPic j-img" src="/Public/Home/imgs/index(31).jpg" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://nos.netease.com/edu-image/D8687DE8021E919D9E255E1B89B933D1.png?imageView&amp;thumbnail=225y142&amp;quality=100_225x142x1x95.png?imageView&amp;thumbnail=225y142&amp;quality=100" alt="轻松掌握15种构图法" id="auto-id-1449504749587"> </div>
                      <div class="tit">
                        <h3 class="f-thide">轻松掌握15种构图法</h3>
                        <div class="continued sign f-dn">老师参与</div>
                        <div class="continued sign foxconn2 f-dn "></div>
                      </div>
                      <div class="orgName f-fs0 f-thide">FUN视觉摄影课堂</div>
                      <div class="thumb">
                        <div class="desc f-cb"> <span class="hot f-fs0">7194</span> </div>
                        <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
                      </div>
                      <div class="f-dn"></div>
                    </div>
                    </a>
                    <div class="j-mask mask" data-id="1459031" style="display:none">
                      <div class="j-del delbtn"></div>
                    </div>
                  </div>
                </div>
                <div class="u-cover u-find-cover g-hide" id="auto-id-1449504749375">
                  <div class="wrap f-cb"> <a target="_blank" class="j-href wrap" data-href="/course/introduction/1564002.htm" data-index="5" data-name="2016年流年风水催运布局" id="auto-id-1449504749600">
                    <div class="img" id="auto-id-1449504749602">
                      <div class="pic f-pr"> <img class="imgPic j-img" src="/Public/Home/imgs/index(32).jpg" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://nos.netease.com/edu-image/EE839CCAB18E752BB8227EBBFF8487E6.png?imageView&amp;thumbnail=225y142&amp;quality=100_225x142x1x95.png?imageView&amp;thumbnail=225y142&amp;quality=100" alt="2016年流年风水催运布局" id="auto-id-1449504749589"> </div>
                      <div class="tit">
                        <h3 class="f-thide">2016年流年风水催运布局</h3>
                        <div class="continued sign f-dn">老师参与</div>
                        <div class="continued sign foxconn2 f-dn "></div>
                      </div>
                      <div class="orgName f-fs0 f-thide" id="auto-id-1449504749601">福善易学工作室</div>
                      <div class="thumb">
                        <div class="desc f-cb"> <span class="hot f-fs0">1</span> </div>
                        <div class="btn f-pr btn2"> <span class="normal f-fs0">¥ 10.00</span> <span class="discount"></span> </div>
                      </div>
                      <div class="f-dn"></div>
                    </div>
                    </a>
                    <div class="j-mask mask" data-id="1564002" style="display:none">
                      <div class="j-del delbtn"></div>
                    </div>
                  </div>
                </div>
                <div class="u-cover u-find-cover g-hide" id="auto-id-1449504749380">
                  <div class="wrap f-cb"> <a target="_blank" class="j-href wrap" data-href="/course/introduction/1455016.htm" data-index="6" data-name="用相机捕捉真实">
                    <div class="img">
                      <div class="pic f-pr"> <img class="imgPic j-img" src="/Public/Home/imgs/index(33).jpg" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://nos.netease.com/edu-image/0BA64BEC25C7B9D97EBF73657350CE90.png?imageView&amp;thumbnail=225y142&amp;quality=100_225x142x1x95.png?imageView&amp;thumbnail=225y142&amp;quality=100" alt="用相机捕捉真实" id="auto-id-1449504749591"> </div>
                      <div class="tit">
                        <h3 class="f-thide">用相机捕捉真实</h3>
                        <div class="continued sign f-dn">老师参与</div>
                        <div class="continued sign foxconn2 f-dn "></div>
                      </div>
                      <div class="orgName f-fs0 f-thide">武汉创影文化传媒教育中心</div>
                      <div class="thumb">
                        <div class="desc f-cb"> <span class="hot f-fs0">1</span> </div>
                        <div class="btn f-pr btn2"> <span class="normal f-fs0">¥ 128.00</span> <span class="discount"></span> </div>
                      </div>
                      <div class="f-dn"></div>
                    </div>
                    </a>
                    <div class="j-mask mask" data-id="1455016" style="display:none">
                      <div class="j-del delbtn"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="g-sd2">
        <div class="g-cell1 listrec listrec-4">
          <ul>
            <li class="f-thide f-fcf"><a data-index="文字链" data-name="http://study.163.com/course/introduction/1536006.htm#/courseDetail" class="listlink" href="http://study.163.com/course/introduction/1536006.htm#/courseDetail" target="_blank">【音乐赏析】莫扎特最后10年</a></li>
            <li class="f-thide f-fcf"><a data-index="文字链" data-name="http://study.163.com/series/41001.htm" class="listlink" href="http://study.163.com/series/41001.htm" target="_blank">把妹达人教你约会技巧</a></li>
            <li class="f-thide f-fcf"><a data-index="文字链" data-name="http://study.163.com/course/introduction/1459031.htm" class="listlink" href="http://study.163.com/course/introduction/1459031.htm" target="_blank">摄影常用的15种构图法则</a></li>
            <li class="f-thide f-fcf"><a data-index="文字链" data-name="http://study.163.com/course/introduction/1445003.htm" class="listlink" href="http://study.163.com/course/introduction/1445003.htm" target="_blank">LOGO设计怎么玩？</a></li>
          </ul>
        </div>
        <div class="g-cell1"> <a href="http://study.163.com/course/introduction/1435021.htm#/courseDetail" target="_blank" data-index="右边" data-name="http://nos.netease.com/edu-image/6C14A17FC07226CD5AAEA3160D41BB21.png?imageView&amp;thumbnail=225y248&amp;quality=100">
          <div class="x-zoomImg"> <img class="j-llimg" id="auto-id-1449504749585" src="/Public/Home/imgs/index(47)" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://nos.netease.com/edu-image/6C14A17FC07226CD5AAEA3160D41BB21.png?imageView&amp;thumbnail=225y248&amp;quality=100_225x248x1x95.png" width="225" height="248" alt="设计思维"> </div>
          </a> </div>
      </div>
    </div>
  </div>
  -->
  <script>            
	  window.recCourseId = window.recCourseId || [];
	  window.recCourseId.push(10001);
  </script>
  <div class="b-10"></div>
  <div class="b-30"></div>
  
  <div class="m-ad g-container" id="j-ad" style="margin-left:100px;">
	<?php if(is_array($advs)): foreach($advs as $key=>$advs): switch($advs["place"]): case "2": ?><iframe scrolling="no" seamless src="/Public/Upload/<?php echo ($advs["pic"]); ?>" frameborder="0" class="g-cell4" marginwidth="0" marginheight="0"></iframe><?php break;?>
	
	<?php case "3": ?><iframe scrolling="no" seamless src="/Public/Upload/<?php echo ($advs["pic"]); ?>" class="g-cell g-inlinehide" frameborder="0" marginwidth="0" marginheight="0"></iframe><?php break; endswitch; endforeach; endif; ?>
    <div class="b-20"></div>
  </div>
  <!--
  <div class="m-ulike">
    <div class="u-bar f-cb">
      <h2 class="f-fl">猜你喜欢</h2>
      <a id="j-moreRecommend" class="u-more f-fr j-more" data-cat="首页_猜你喜欢" target="_blank" href="http://study.163.com/cloud/recommendList.htm"><span>更多</span><span class="icn"></span></a> </div>
    <div class="g-container" id="j-ulike">
      <div class="u-index-list f-cb">
        <div class="u-cover u-find-cover first" id="auto-id-1449504749437">
          <div class="wrap f-cb"> <a target="_blank" class="j-href wrap" data-href="/course/introduction/214017.htm" data-index="1" data-name="Abby学摄影">
            <div class="img">
              <div class="pic f-pr"> <img class="imgPic j-img" src="/Public/Home/imgs/index(34).jpg" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://img2.ph.126.net/EIvHtDn7ZEtIqHC-IHeVqQ==/6597150031006883092.jpg_225x124x1x95.jpg" alt="Abby学摄影" id="auto-id-1449504749603"> </div>
              <div class="tit">
                <h3 class="f-thide">Abby学摄影</h3>
                <div class="continued sign f-dn">老师参与</div>
                <div class="continued sign foxconn2 f-dn "></div>
              </div>
              <div class="orgName f-fs0 f-thide">咔图摄影教育中心</div>
              <div class="thumb">
                <div class="desc f-cb"> <span class="hot f-fs0">86742</span> </div>
                <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
              </div>
              <div class="f-dn"></div>
            </div>
            </a>
            <div class="j-mask mask" data-id="214017" style="display:none">
              <div class="j-del delbtn"></div>
            </div>
          </div>
        </div>
	
        <div class="u-cover u-find-cover" id="auto-id-1449504749442">
          <div class="wrap f-cb"> <a target="_blank" class="j-href wrap" data-href="/course/introduction/1436033.htm" data-index="2" data-name="艾问顶级投资人之创客法则">
            <div class="img">
              <div class="pic f-pr"> <img class="imgPic j-img" src="/Public/Home/imgs/index(35).jpg" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://img0.ph.126.net/86pAoY_bysompLfOTWU0mA==/6630255226607533029.jpg_225x124x1x95.jpg" alt="艾问顶级投资人之创客法则" id="auto-id-1449504749605"> </div>
              <div class="tit">
                <h3 class="f-thide">艾问顶级投资人之创客法则</h3>
                <div class="continued sign f-dn">老师参与</div>
                <div class="continued sign foxconn2 f-dn "></div>
              </div>
              <div class="orgName f-fs0 f-thide">艾问传媒</div>
              <div class="thumb">
                <div class="desc f-cb"> <span class="hot f-fs0">5750</span> </div>
                <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
              </div>
              <div class="f-dn"></div>
            </div>
            </a>
            <div class="j-mask mask" data-id="1436033" style="display:none">
              <div class="j-del delbtn"></div>
            </div>
          </div>
        </div>
        <div class="u-cover u-find-cover" id="auto-id-1449504749447">
          <div class="wrap f-cb"> <a target="_blank" class="j-href wrap" data-href="/course/introduction/1264002.htm" data-index="3" data-name="两个周末从PPT小白到导师">
            <div class="img">
              <div class="pic f-pr"> <img class="imgPic j-img" src="/Public/Home/imgs/index(36).jpg" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://img0.ph.126.net/xszC2-SLHL8TxK7O66mrrA==/6631334947024668681.jpg_225x124x1x95.jpg" alt="两个周末从PPT小白到导师" id="auto-id-1449504749607"> </div>
              <div class="tit">
                <h3 class="f-thide">两个周末从PPT小白到导师</h3>
                <div class="continued sign f-dn">老师参与</div>
                <div class="continued sign foxconn2 f-dn "></div>
              </div>
              <div class="orgName f-fs0 f-thide">乐训云课程</div>
              <div class="thumb">
                <div class="desc f-cb"> <span class="hot f-fs0">57764</span> </div>
                <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
              </div>
              <div class="f-dn"></div>
            </div>
            </a>
            <div class="j-mask mask" data-id="1264002" style="display:none">
              <div class="j-del delbtn"></div>
            </div>
          </div>
        </div>
        <div class="u-cover u-find-cover" id="auto-id-1449504749452">
          <div class="wrap f-cb"> <a target="_blank" class="j-href wrap" data-href="/course/introduction/1350013.htm" data-index="4" data-name="十分钟学会简笔画">
            <div class="img">
              <div class="pic f-pr"> <img class="imgPic j-img" src="/Public/Home/imgs/index(37).jpg" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://img0.ph.126.net/5LVl87xHAyMsVIoSgaqlAg==/6631256881699406211.jpg_225x124x1x95.jpg" alt="十分钟学会简笔画" id="auto-id-1449504749609"> </div>
              <div class="tit">
                <h3 class="f-thide">十分钟学会简笔画</h3>
                <div class="continued sign f-dn">老师参与</div>
                <div class="continued sign foxconn2 f-dn "></div>
              </div>
              <div class="orgName f-fs0 f-thide">图大狮</div>
              <div class="thumb">
                <div class="desc f-cb"> <span class="hot f-fs0">70332</span> </div>
                <div class="btn f-pr "> <span class="normal f-fs0">免费</span> <span class="discount"></span> </div>
              </div>
              <div class="f-dn"></div>
            </div>
            </a>
            <div class="j-mask mask" data-id="1350013" style="display:none">
              <div class="j-del delbtn"></div>
            </div>
          </div>
        </div>
        <div class="u-cover u-find-cover g-hide" id="auto-id-1449504749457">
          <div class="wrap f-cb"> <a target="_blank" class="j-href wrap" data-href="/course/introduction/940019.htm" data-index="5" data-name="英语口语革命（送直播+送录播+不限时学习）">
            <div class="img">
              <div class="pic f-pr"> <img class="imgPic j-img" src="/Public/Home/imgs/index(38).jpg" data-originsrc="http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://img0.ph.126.net/f4VbQWeZ_eLhEAXX9UMpCQ==/6630780793166334285.jpg_225x124x1x95.jpg" alt="英语口语革命（送直播+送录播+不限时学习）" id="auto-id-1449504749611"> </div>
              <div class="tit">
                <h3 class="f-thide">英语口语革命（送直播+送录播+不限时学习）</h3>
                <div class="continued sign f-dn">老师参与</div>
                <div class="continued sign foxconn2 f-dn "></div>
              </div>
              <div class="orgName f-fs0 f-thide">李先知</div>
              <div class="thumb">
                <div class="desc f-cb"> <span class="hot f-fs0">4514</span> </div>
                <div class="btn f-pr btn2"> <span class="normal f-fs0">¥ 399.00</span> <span class="discount">¥ 599.00</span> </div>
              </div>
              <div class="u-cst-10"></div>
            </div>
            </a>
            <div class="j-mask mask" data-id="940019" style="display:none">
              <div class="j-del delbtn"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="b-50"></div>
</div>
	-->
<div class="u-gray">
  <div class="g-flow m-corps">
    <div class="u-bar u-bar2 f-cb">
      <h2 class="f-fl">合作机构</h2>
      <a class="u-more f-fr j-more" id="j-more-corp" data-index="申请加入" data-cat="首页_合作机构" target="_blank" href="#"><span>申请加入</span><span class="icn"></span></a></div>
    <div id="j-corp" class="corpbox">
      <div class="u-corparea">
        <ul class="j-list f-cb" id="auto-id-1449466857189" style="margin-top: 0px;">
          <?php if(is_array($organs)): foreach($organs as $key=>$organ): ?><li class="item">
			<a target="_blank" hidefocus="false" class="f-fc9 j-link link" href="" id="auto-id-1449466857191" data-index="机构" data-name="麦子学院"><?php echo ($organ["name"]); ?>
			</a>
		  </li><?php endforeach; endif; ?>
		</ul>
      </div>
    </div>
  </div>
</div>
<div class="g-ft">
  <div class="m-yktFoot" id="j-yktfoot">
    <div class="g-flow ftwrapper f-cb">
      <div class="f-fl ftlf">
        <div class="logo"></div>
        <p class="txt f-fs0"> 网易公司(163.com)旗下实用技能学习平台。与顶级机构、院校和优秀讲师合作，为您提供海量优质课程，以及创新的在线学习体验，帮助您获得全新的个人发展和能力提升。</p>
        <div class="share f-cb">
          <p class="tit">关注我们：</p>
          <a href="http://weibo.com/study163" class="weibo" target="_blank" data-index="关注我们_微博"><img src="/Public/Home/imgs/1.png"></a> <a href="http://page.renren.com/601660242" class="renren" target="_blank" data-index="关注我们_人人"><img src="/Public/Home/imgs/2.png"></a> <a href="javascript:void(0)" class="yixin f-pr" data-index="关注我们_易信"><img src="/Public/Home/imgs/3.png">
          <div class="tipQrcode f-pa">
            <div class="qrImag"> <img src="/Public/Home/imgs/yixin.png" width="120px" height="120px" alt="加云课堂易信好友"> </div>
            <p class="qrTitle">易信号：study163</p>
            <div class="tip f-pa"></div>
          </div>
          </a> <a href="javascript:void(0)" class="weixin f-pr" data-index="关注我们_微信"><img src="/Public/Home/imgs/4.png">
          <div class="tipQrcode f-pa">
            <div class="qrImag"> <img src="/Public/Home/imgs/weixin.png" width="120px" height="120px" alt="加云课堂微信好友"> </div>
            <p class="qrTitle">微信号：study163</p>
            <div class="tip f-pa"></div>
          </div>
          </a> </div>
        <div class="copy">©<span>1997-2015</span> <?php echo ($configs["copyright"]); ?></div>
      </div>
      <div class="ftrt f-fr">
	  <a href="/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>" target="_blank" data-index="关于我们">关于我们</a> 
	  <a href="/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>" target="_blank" data-index="联系我们">联系我们</a>
	  <a href="/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>" target="_blank" data-index="帮助中心">帮助中心</a> 
	  <a href="/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>" target="_blank" data-index="内容招募">内容招募</a> 
	  <a href="/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>" target="_blank" data-index="意见反馈">意见反馈</a>
	  <a href="http://www.icourse163.org/" target="_blank" data-index="中国大学MOOC">中国大学MOOC</a>
        <div class="f-cb mobile f-fr">
          <div class="tit f-fl">移动App:</div>
          <a target="_blank" class="mlogo1" href="https://itunes.apple.com/cn/app/wang-yi-yun-ke-tang-for-iphone/id880452926?mt=8"></a> <a target="_blank" class="mlogo2" href="http://study.163.com/pub/study-android-official.apk"></a> </div>
      </div>
    </div>
  </div>
</div>
</body>
<script type="text/javascript" charset="utf-8">
	
	<!-- 头像的控制 -->
	$(".headImg").hover(function(){
			$("#login1").css("display","block");
	},function(){
		$("#login1").hover(function(){
				
		},function(){
			$("#login1").css("display","none");
		});
	});
	
	
	
	<!-- 全部课程 -->
		<!-- 互联网 -->
	$("#auto-id-1449466857066").hover(function(){
		
		var id=$("#auto-id-1449466857066 a").attr("id");
		var html="";
		$(".IT p:first-of-type").html('');
		$.post("/index.php/Index/se",{pid:id},function(b){
			for(var i in b){
				html+="<a href = /index.php/Type/index/tid/"+b[i]['id']+">"+b[i]['name']+"</a><span>&nbsp;&nbsp;/&nbsp;&nbsp;</span>";
			}
			$(".IT p:first-of-type").append(html);
		},'json');
		$(this).css("border","1px solid #39A531");
		$("#auto-id-1449466857072").attr("style","display:block");
		$(".IT").attr("style","display:block");
		$(".work").attr("style","display:none");
		$(".more").attr("style","display:none");
		$(".fave").attr("style","display:none");
		$(".study").attr("style","display:none");
		
	},function(){
		$(this).css("border","");
		
		$("#auto-id-1449466857072").hover(function(){

			
			$(this).css("border","");
			},function(){
			$(".IT p:first-of-type a").replaceAll("<a href='#'></a>");
			$(".IT p:first-of-type span").replaceAll("<a href='#'></a>");
			$("#auto-id-1449466857072").attr("style","display:none");
			$(".IT").attr("style","display:none");
			$(this).css("border","");
			});
	});

	
	
	<!-- 职场技能 -->
	$("#auto-id-1449466857067").hover(function(){
		
		var id=$("#auto-id-1449466857067 a").attr("id");
		var html="";
		$(".work p:first-of-type").html('');
		$.post("/index.php/Index/se",{pid:id},function(b){
			for(var i in b){
				html+="<a href = /index.php/Type/index/tid/"+b[i]['id']+">"+b[i]['name']+"</a><span>&nbsp;&nbsp;/&nbsp;&nbsp;</span>";
			}
			$(".work p:first-of-type").append(html);
		},'json');
		$(this).css("border","1px solid #39A531");
		$("#auto-id-1449466857072").attr("style","display:block");
		$(".IT").attr("style","display:none");
		$(".work").attr("style","display:block");
		$(".more").attr("style","display:none");
		$(".fave").attr("style","display:none");
		$(".study").attr("style","display:none");
	},function(){
		$(this).css("border","");
		$("#auto-id-1449466857072").hover(function(){

			$(this).css("border","");
			},function(){
			$(".work p:first-of-type a").replaceAll("<a href='#'></a>");
			$(".work p:first-of-type span").replaceAll("<a href='#'></a>");
			$("#auto-id-1449466857072").attr("style","display:none");
			$(".work").attr("style","display:none");
			$(this).css("border","");
			});
	});
	
	<!-- 语言学习 -->
	$("#auto-id-1449466857068").hover(function(){
		$(this).css("border","1px solid #39A531");
		$("#auto-id-1449466857072").attr("style","display:block");
		$(".IT").attr("style","display:none");
		$(".work").attr("style","display:none");
		$(".more").attr("style","display:none");
		$(".fave").attr("style","display:none");
		$(".study").attr("style","display:block");
		var id=$("#auto-id-1449466857068 a").attr("id");
		var html="";
		$(".study p:first-of-type").html('');
		$.post("/index.php/Index/se",{pid:id},function(b){
			for(var i in b){
				html+="<a href = /index.php/Type/index/tid/"+b[i]['id']+">"+b[i]['name']+"</a><span>&nbsp;&nbsp;/&nbsp;&nbsp;</span>";
			}
			$(".study p:first-of-type").append(html);
		},'json');
	},function(){

		$(this).css("border","");
		$("#auto-id-1449466857072").hover(function(){
			
			$(this).css("border","");
		},function(){
			$(".study p:first-of-type a").replaceAll("<a href='#'></a>");
			$(".study p:first-of-type span").replaceAll("<a href='#'></a>");
			$("#auto-id-1449466857072").attr("style","display:none");
			$(".study").attr("style","display:none");
			$(this).css("border","");
		});
	});
	
		<!-- 兴趣爱好 -->
	$("#auto-id-1449466857069").hover(function(){
		
		$(this).css("border","1px solid #39A531");
		$("#auto-id-1449466857072").attr("style","display:block");
		$(".IT").attr("style","display:none");
		$(".study").attr("style","display:none");
		$(".work").attr("style","display:none");
		$(".more").attr("style","display:none");
		$(".fave").attr("style","display:block");
		
		
		var id=$("#auto-id-1449466857069 a").attr("id");
		var html="";
		$(".fave p:first-of-type").html('');
		$.post("/index.php/Index/se",{pid:id},function(b){
			for(var i in b){
				html+="<a href = /index.php/Type/index/tid/"+b[i]['id']+">"+b[i]['name']+"</a><span>&nbsp;&nbsp;/&nbsp;&nbsp;</span>";
			}
			$(".fave p:first-of-type").append(html);
			},'json');
		},function(){
		$(this).css("border","");
		$("#auto-id-1449466857072").hover(function(){

			$(this).css("border","");
			},function(){
			$(".fave p:first-of-type a").replaceAll("<a href='#'></a>");
			$(".fave p:first-of-type span").replaceAll("<a href='#'></a>");
			$("#auto-id-1449466857072").attr("style","display:none");
			$(".fave").attr("style","display:none");
			
			});
	});
	
		<!-- 更多兴趣 -->
	$("#auto-id-1449466857070").hover(function(){
		$(this).css("border","1px solid #39A531");
		$("#auto-id-1449466857072").attr("style","display:block");
		$(".IT").attr("style","display:none");
		$(".study").attr("style","display:none");
		$(".work").attr("style","display:none");
		$(".fave").attr("style","display:none");
		$(".more").attr("style","display:block");
		var id=$("#auto-id-1449466857070 a").attr("id");
		var html="";
		$(".more p:first-of-type").html('');
		$.post("/index.php/Index/se",{pid:id},function(b){
			for(var i in b){
				html+="<a href = /index.php/Type/index/tid/"+b[i]['id']+">"+b[i]['name']+"</a><span>&nbsp;&nbsp;/&nbsp;&nbsp;</span>";
			}
			$(".more p:first-of-type").append(html);
			},'json');
	},function(){
		$(this).css("border","");
		$("#auto-id-1449466857072").hover(function(){

			$(this).css("border","");
			},function(){
			$(".more p:first-of-type a").replaceAll("<a href='#'></a>");
			$(".more p:first-of-type span").replaceAll("<a href='#'></a>");
			$("#auto-id-1449466857072").attr("style","display:none");
			$(".more").attr("style","display:none");
			});
	});
	
	
	
	

	<!-- 滚动的广告 -->
	var n=0;
	var time=setInterval(function(){
		if(n<7){
			$("#pic img").css("display","none");
			$("#pic img").eq(n).css("display","block");
			$("#a div").css("height","10px");
			n++;
		}else{
			n=0;
		}	
	},3000);
	$("#a div").click(function(){
		var index=$(this).index();
		$("#pic img").css("display","none");
		$("#pic img").eq(index).css("display","clock");
		$("#pic img").eq(index).fadeIn(3000);
		$("#a div").eq(index).fadeIn(3000,function(){
			$(this).css("height","20px");
		});
	});
</script>
</html>