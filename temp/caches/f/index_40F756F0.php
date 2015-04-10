<?php exit;?>a:3:{s:8:"template";a:3:{i:0;s:36:"D:/WWW/ecshop/themes/test1/index.dwt";i:1;s:50:"D:/WWW/ecshop/themes/test1/library/page_header.lbi";i:2;s:50:"D:/WWW/ecshop/themes/test1/library/page_footer.lbi";}s:7:"expires";i:1428678424;s:8:"maketime";i:1428674824;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="ECSHOP演示站" />
<meta name="Description" content="ECSHOP演示站" />
<title>ECSHOP演示站 - Powered by PBCC</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/test1/style.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|ECSHOP演示站 - Powered by PBCC" href="feed.php" />
<script type="text/javascript" src="js/jquery.js"></script><script type="text/javascript" src="js/json2.js"></script><script type="text/javascript" src="js/common.js"></script><script type="text/javascript" src="js/index.js"></script><script type="text/javascript" src="js/jssor.js"></script><script type="text/javascript" src="js/jssor.slider.js"></script><script type="text/javascript" src="js/gototop.js"></script><script type="text/javascript" src="js/marquee.js"></script></head>
<body>
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<div id="body_mask"></div>
<div id="empty_container"></div>
<div class="block clearfix" id="top">
  <div class="log">
    <div class="logbackground">
        <ul>
                  <li id="topNav" class="clearfix">
                  <script type="text/javascript" src="js/transport_modifyed.js"></script><script type="text/javascript" src="js/utils.js"></script>                  <font style="color:#868485;">554fcae493e564ee0dc75bdf2ebf94camember_info|a:1:{s:4:"name";s:11:"member_info";}554fcae493e564ee0dc75bdf2ebf94ca </font>
                    |
                 
                            <a href="pick_out.php" >选购中心</a>
                                     |
                                              <a href="tag_cloud.php" >标签云</a>
                                     |
                                              <a href="quotation.php" >报价单</a>
                                     </li>
                  </ul>
    </div>
  </div>
</div>
<div class="block clearfix">
 <div class="banner-1">
  <table border="0" celspacing="0" celpadding="0" style="width:100%;">
    <tr height="24">
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td width="419"></td>
        <td ><a href="index.php" name="top"><img style="height=110px;width:150px;"src="themes/test1/images/logo.png" /></a></td>
      </tr>
  </table>
 </div>
</div>
<div  class="blank"></div>
<div id="mainNav" class="clearfix">
  <a href="index.php" class="cur">&emsp;首页&emsp;</a>
    <a href="category.php?id=16"  >
    菜园 
          </a>
   <a href="category.php?id=17"  >
    果园 
          </a>
   <a href="category.php?id=21"  >
    零食铺 
          </a>
   <a href="category.php?id=1"  >
    手机类型 
          </a>
   <a href="category.php?id=18"  >
    童年小卖部 
          </a>
   <a href="category.php?id=19"  >
    米油盐 
          </a>
   <a href="category.php?id=20"  >
    酱料坊 
          </a>
 </div>
<!--===================================================== 
======================== slide show ===================== 
======================================================-->
<div class="blank"></div>
<div class="block clearfix">
    <script>
        jssor_main_banner_starter = function (containerId) {
            var options = {
                $AutoPlay: true,
                $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slideshow is auto playing, default value is false
                $ArrowKeyNavigation: true,   			            //Allows arrow key to navigate or not
                $SlideWidth: 500,                                   //[Optional] Width of every slide in pixels, the default is width of 'slides' container
                //$SlideHeight: 300,                                  //[Optional] Height of every slide in pixels, the default is width of 'slides' container
                $SlideSpacing: 2, 					                //Space between each slide in pixels
                $DisplayPieces: 2,                                  //Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 752,                                //The offset position to park slide (this options applys only when slideshow disabled).
                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };
            var jssor_main_banner = new $JssorSlider$(containerId, options);
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_main_banner.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_main_banner.$ScaleWidth(Math.min(parentWidth, 1000));
                else
                    $Jssor$.$Delay(ScaleSlider, 30);
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", $Jssor$.$WindowResizeFilter(window, ScaleSlider));
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
    </script>
    
    
    
    <div id="main_banner_container" style="position: relative; top: 0px; left: 0px; width: 1000px;
        height: 300px; overflow: hidden;">
		<div class="left-mask" style="z-index:200;background:rgba(103,214,112,0.6);width:24.8%;%;height:280px;position: absolute; top: 0px;left:0;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#4c67d670,endColorstr=#4c67d670);"></div>
		<div class="left-mask-bar" style="z-index:201;background:rgba(255,255,255,1);width:2px;height:280px;position: absolute; top: 0px;left: 24.8%;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#ffffff,endColorstr=#ffffff);"></div>
        
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1000px; height: 280px;
            overflow: hidden;">
						<div>
            <a style="width:450px; height:250px;" href="http://" target="_blank">
              <img u="image" src="data/afficheimg/20150226eptxfz.jpg" width="500" height="280"/>
            </a>
			</div>
						<div>
            <a style="width:450px; height:250px;" href="http://" target="_blank">
              <img u="image" src="data/afficheimg/20150226njwpzl.jpg" width="500" height="280"/>
            </a>
			</div>
						<div>
            <a style="width:450px; height:250px;" href="http://" target="_blank">
              <img u="image" src="data/afficheimg/20150226cukhhm.jpg" width="500" height="280"/>
            </a>
			</div>
						<div>
            <a style="width:450px; height:250px;" href="http://" target="_blank">
              <img u="image" src="data/afficheimg/20150226sjjclk.jpg" width="500" height="280"/>
            </a>
			</div>
						<div>
            <a style="width:450px; height:250px;" href="http://" target="_blank">
              <img u="image" src="data/afficheimg/20150226yuuhjr.jpg" width="500" height="280"/>
            </a>
			</div>
						<div>
            <a style="width:450px; height:250px;" href="http://" target="_blank">
              <img u="image" src="data/afficheimg/20150226rnjsxa.jpg" width="500" height="280"/>
            </a>
			</div>
						<div>
            <a style="width:450px; height:250px;" href="http://" target="_blank">
              <img u="image" src="data/afficheimg/20150226trczqh.jpg" width="500" height="280"/>
            </a>
			</div>
						<div>
            <a style="width:450px; height:250px;" href="http://" target="_blank">
              <img u="image" src="data/afficheimg/20150226qhwwao.jpg" width="500" height="280"/>
            </a>
			</div>
			   	
        </div>
        
        <style>
           
            .jssora13l, .jssora13r, .jssora13ldn, .jssora13rdn {
                position: absolute;
                cursor: pointer;
                display: block;
                background: url(themes/test1/images/a13.png) no-repeat;
                overflow: hidden;
				z-index:999;
            }
            .jssora13l {
                background-position: -10px -35px;
            }
            .jssora13r {
                background-position: -70px -35px;
            }
            .jssora13l:hover {
                background-position: -130px -35px;
            }
            .jssora13r:hover {
                background-position: -190px -35px;
            }
            .jssora13ldn {
                background-position: -250px -35px;
            }
            .jssora13rdn {
                background-position: -310px -35px;
            }
        </style>
        
        <span u="arrowleft" class="jssora13l" style="width: 40px; height: 50px; top: 120px; left: 250px;">
        </span>
        
        <span u="arrowright" class="jssora13r" style="width: 40px; height: 50px; top: 120px; right: 250px">
        </span>
        
		<div class="right-mask-bar" style="z-index:201;background:rgba(255,255,255,1);width:2px;height:280px;position: absolute; top: 0px;left: 75%;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#ffffff,endColorstr=#ffffff);"></div>
			<div class="right-mask" style="z-index:200;background:rgba(103,214,112,0.6);width:25%;height:280px;position: absolute;top: 0px;
		left: 75.2%;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#4c67d670,endColorstr=#4c67d670);"></div>
			</div>		
        
        <script>
            jssor_main_banner_starter('main_banner_container');
        </script>
    </div>
    
<!--===================================================== 
==================== end of slide show ================== 
======================================================-->
<!--===================================================== 
=================== everyWeekSelection-panel ============ 
======================================================-->
<div class="blank"></div>
<div id="everyWeekSelection-panel" class="clearfix">
<table border="0" cellspacing="0" cellpadding="0" style="width:90%;margin:0 auto;">
  <tr>
    <td>
      <table border="0" cellspacing="0" cellpadding="0" style="width:100%;margin:0 auto;">
        <tr>
          <td style="text-align:center;">
        		        <a href="category.php?id=16"  >
          菜园 
                            </a>
       		        <a href="category.php?id=17"  >
          果园 
                            </a>
       		        <a href="category.php?id=21"  >
          零食铺 
                            </a>
       		        <a href="category.php?id=1"  >
          手机类型 
                            </a>
       		        <a href="category.php?id=18"  >
          童年小卖部 
                            </a>
       		        <a href="category.php?id=19"  >
          米油盐 
                            </a>
       		        <a href="category.php?id=20"  >
          酱料坊 
                            </a>
              <font>本周特价</font>
               <a href="category.php?id=16"  >
          菜园 
                            </a>
               <a href="category.php?id=17"  >
          果园 
                            </a>
               <a href="category.php?id=21"  >
          零食铺 
                            </a>
               <a href="category.php?id=1"  >
          手机类型 
                            </a>
               <a href="category.php?id=18"  >
          童年小卖部 
                            </a>
               <a href="category.php?id=19"  >
          米油盐 
                            </a>
               <a href="category.php?id=20"  >
          酱料坊 
                            </a>
                 </td>
        </tr>
      </table>
     </td>
    </tr>
  </table>
</div>
<!--============================================================
================= end of everyWeekSelection-panel ============== 
=============================================================-->
<!--===================================================== 
======================== vege-panel ================
======================================================-->
<div class="blank"></div>
<div id="vege-panel" class="clearfix cat-panel">
<table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
  <tr>
    <td>
      <table border="0" cellspacing="0" cellpadding="0" style="width:100%;margin:0 auto;height:310px;">
        <tr>
          <td id="top-left-img-id" style="width:19%;vertical-align:top;">
																																																						<img src="data/afficheimg/20150227qhsmzl.jpg" style="width:100%;"/>
																																													 
          </td>
          <td style="vertical-align:top;">
            <table border="0" cellspacing="0" cellpadding="0" style="width:100%;margin:0 auto;">
              <tr>
                <td id="top-banner-td" style="vertical-align:top;text-align:center;padding:0 2px;">
																																																																																																														<a style="width:100%;" href="http://sdsad" target="_blank">
					  <img src="data/afficheimg/20150226kvmmhm.jpg" style="width:100%;"/>
					</a>
																																																							 
                </td>
              </tr>
              <tr style="height:5px;"><td></td></tr>
              <tr>
                <td id="vege-content-td" style="text-align:center;">
                  <div id="vege-content-wrapper" style="padding:0px 2px;">
   <script>
        jssor_panel_slide_starter = function (containerId) {
           
            var options = {
                $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
                $AutoPlay: false,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1
                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 788,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
               
                $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1,                                //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                    $Scale: false                                   //Scales bullets navigator or not while slider scale
                },
                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };
            var jssor_vege_slide = new $JssorSlider$(containerId, options);
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_vege_slide.$ScaleWidth(Math.min(620));
                else
                    $Jssor$.$Delay(ScaleSlider, 30);
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", $Jssor$.$WindowResizeFilter(window, ScaleSlider));
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
    </script>
    
    
    <div id="vege_slide_container" style="position: relative; margin: 0 auto;
        top: 0px; left: 0px; width: 620px; height: 260px; overflow: hidden;">
        
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
            <div style="position: absolute; display: block; background: url(themes/test1/images/loading.gif) no-repeat center center;
                top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
        </div>
        
        <div u="slides"  class="" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 620px;
            height: 260px; overflow: hidden;">
           
               			    <div>
                    <table border="0" cellspacing="0" cellpadding="0" style="width:620px;height:260px;position:relative;float:left;">
                      <tr>
                        <td style="vertical-align:top;">
                          <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                            <tr>
                              <td style="width:100%;">
                          <table border="0" cellspacing="0" cellpadding="0" style="width:100%;height:260px;border: 1px solid #ededed;
padding: 0px 4px;">
                            <tr>
                              <td style="width:610px;">
                                                   <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;text-align:center;height:90px;vertical-align:top;">
                                              											  <a href="http://">
                                              <img class="" src="data/afficheimg/20150227yerddx.jpg" style="width:105px;height:85px;padding:0;">
											  </a>
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											  <a href="http://" class="banner_a">
                                              戈夫岛											  </a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;">5345</span>											  
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                   <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;text-align:center;height:90px;vertical-align:top;">
                                              											  <a href="http://">
                                              <img class="" src="data/afficheimg/20150227neolrr.jpg" style="width:105px;height:85px;padding:0;">
											  </a>
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											  <a href="http://" class="banner_a">
                                              											  </a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;"></span>											  
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                   <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;text-align:center;height:90px;vertical-align:top;">
                                              											  <a href="http://">
                                              <img class="" src="data/afficheimg/20150227htlgdd.jpg" style="width:105px;height:85px;padding:0;">
											  </a>
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											  <a href="http://" class="banner_a">
                                              一条鱼											  </a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;">54654</span>											  
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                   <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;text-align:center;height:90px;vertical-align:top;">
                                              											  <a href="http://">
                                              <img class="" src="data/afficheimg/20150227apvsqp.jpg" style="width:105px;height:85px;padding:0;">
											  </a>
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											  <a href="http://" class="banner_a">
                                              											  </a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;"></span>											  
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                   <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;text-align:center;height:90px;vertical-align:top;">
                                              											  <a href="http://">
                                              <img class="" src="data/afficheimg/20150227hhapjf.jpg" style="width:105px;height:85px;padding:0;">
											  </a>
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											  <a href="http://" class="banner_a">
                                              份额发											  </a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;">323</span>											  
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                       
                              </td>
                            </tr>
                            <tr>
                              <td style="width:100%;">
                                                      <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;height:90px;vertical-align:top;">
                                                                                            <img class="" src="data/afficheimg/20150226jdrqts.jpg" style="width:105px;height:85px;padding:0;">
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											<a href="http://ss" class="banner_a">
                                              <span style="font-family:arial;font-size:12px;">fgdfgdf</span>
											</a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;">hhhh</span>
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                      <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;height:90px;vertical-align:top;">
                                                                                            <img class="" src="data/afficheimg/20150227bytsyb.jpg" style="width:105px;height:85px;padding:0;">
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											<a href="http://" class="banner_a">
                                              <span style="font-family:arial;font-size:12px;"></span>
											</a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;"></span>
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                      <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;height:90px;vertical-align:top;">
                                                                                            <img class="" src="data/afficheimg/20150227lcvosx.jpg" style="width:105px;height:85px;padding:0;">
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											<a href="http://" class="banner_a">
                                              <span style="font-family:arial;font-size:12px;">热夫为</span>
											</a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;">534</span>
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                      <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;height:90px;vertical-align:top;">
                                                                                            <img class="" src="data/afficheimg/20150227ddhoss.jpg" style="width:105px;height:85px;padding:0;">
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											<a href="http://" class="banner_a">
                                              <span style="font-family:arial;font-size:12px;">r3434t</span>
											</a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;">4trt</span>
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                      <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;height:90px;vertical-align:top;">
                                                                                            <img class="" src="data/afficheimg/20150227idousw.jpg" style="width:105px;height:85px;padding:0;">
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											<a href="http://" class="banner_a">
                                              <span style="font-family:arial;font-size:12px;">bofefw</span>
											</a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;">3443</span>
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                       
                            </td>
                          </tr>
                        </table>
                              </td>
                            </tr>
                        </table>    
                      </td>
                    </tr>
                  </table>
				</div>
                			    <div>
                    <table border="0" cellspacing="0" cellpadding="0" style="width:620px;height:260px;position:relative;float:left;">
                      <tr>
                        <td style="vertical-align:top;">
                          <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                            <tr>
                              <td style="width:100%;">
                          <table border="0" cellspacing="0" cellpadding="0" style="width:100%;height:260px;border: 1px solid #ededed;
padding: 0px 4px;">
                            <tr>
                              <td style="width:610px;">
                                                   <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;text-align:center;height:90px;vertical-align:top;">
                                              											  <a href="http://localhost/ecshop/category.php?id=3">
                                              <img class="" src="data/afficheimg/20150226abyyzd.jpg" style="width:105px;height:85px;padding:0;">
											  </a>
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											  <a href="http://localhost/ecshop/category.php?id=3" class="banner_a">
                                              新鲜菠菜											  </a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;">10</span>											  
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                   <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;text-align:center;height:90px;vertical-align:top;">
                                                                                            &nbsp;
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											  <a href="" class="banner_a">
                                              											  </a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;"></span>											  
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                   <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;text-align:center;height:90px;vertical-align:top;">
                                                                                            &nbsp;
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											  <a href="" class="banner_a">
                                              											  </a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;"></span>											  
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                   <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;text-align:center;height:90px;vertical-align:top;">
                                                                                            &nbsp;
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											  <a href="" class="banner_a">
                                              											  </a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;"></span>											  
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                   <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;text-align:center;height:90px;vertical-align:top;">
                                                                                            &nbsp;
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											  <a href="" class="banner_a">
                                              											  </a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;"></span>											  
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                       
                              </td>
                            </tr>
                            <tr>
                              <td style="width:100%;">
                                                      <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;height:90px;vertical-align:top;">
                                                                                            &nbsp;
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											<a href="" class="banner_a">
                                              <span style="font-family:arial;font-size:12px;"></span>
											</a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;"></span>
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                      <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;height:90px;vertical-align:top;">
                                                                                            &nbsp;
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											<a href="" class="banner_a">
                                              <span style="font-family:arial;font-size:12px;"></span>
											</a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;"></span>
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                      <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;height:90px;vertical-align:top;">
                                                                                            &nbsp;
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											<a href="" class="banner_a">
                                              <span style="font-family:arial;font-size:12px;"></span>
											</a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;"></span>
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                      <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;height:90px;vertical-align:top;">
                                                                                            &nbsp;
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											<a href="" class="banner_a">
                                              <span style="font-family:arial;font-size:12px;"></span>
											</a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;"></span>
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                      <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;height:90px;vertical-align:top;">
                                                                                            &nbsp;
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											<a href="" class="banner_a">
                                              <span style="font-family:arial;font-size:12px;"></span>
											</a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;"></span>
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                       
                            </td>
                          </tr>
                        </table>
                              </td>
                            </tr>
                        </table>    
                      </td>
                    </tr>
                  </table>
				</div>
                             
           
        </div>
                
       
        
        <div u="navigator" class="jssorb21" style="position: absolute; bottom: 2px; left: 6px;">
            
            <div u="prototype" style="POSITION: absolute; WIDTH: 19px; HEIGHT: 19px; text-align:center; line-height:19px; color:White; font-size:12px;"></div>
        </div>
        
        
       
        
        <span u="arrowleft" class="jssora21l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
        </span>
        
        <span u="arrowright" class="jssora21r" style="width: 55px; height: 55px; top: 123px; right: 8px;">
        </span>
        
  
    </div>
    
    <script>
        if ( 2 != 1){jssor_panel_slide_starter('vege_slide_container');}
    </script>
    
                  </div>
                </td>
              </tr>
            </table>
          </td>
          <td id="top-right-img-td" style="width:19%;vertical-align:top;">
            																											<img src="data/afficheimg/20150227ejomzq.jpg" style="width:100%;"/>
																																																																					 
          </td>
        </tr>
      </table>
    </td>
  </tr>
 <tr><td class="blank" colspan="3" >&nbsp;</td></tr>
  <tr>
      <td id="bottom-banner-id" colspan="3" style="text-align:center;">
          <div class="bottom-banner">
																																																																																							 
		  </div>
      </td>
    </tr>
  </table>
</div>
<!--============================================================
===================== end of vege-panel =================== 
=============================================================-->
<!--===================================================== 
======================== fruit-panel ================
======================================================-->
<div class="blank"></div>
<div id="fruit-panel" class="clearfix cat-panel">
<table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
  <tr>
    <td>
      <table border="0" cellspacing="0" cellpadding="0" style="width:100%;margin:0 auto;height:310px;">
        <tr>
          <td id="top-left-img-id" style="width:19%;vertical-align:top;">
																																																																																																																		<img src="data/afficheimg/20150227rroeti.jpg" style="width:100%;"/>
																																							 
          </td>
          <td style="vertical-align:top;">
            <table border="0" cellspacing="0" cellpadding="0" style="width:100%;margin:0 auto;">
              <tr>
                <td id="top-banner-td" style="vertical-align:top;text-align:center;padding:0 2px;">
																																																																																																																																		<img src="data/afficheimg/20150227xabrxc.jpg" style="width:100%;"/>
																																																																																																																													 
                </td>
              </tr>
              <tr style="height:5px;"><td></td></tr>
              <tr>
                <td id="fruit-content-td" style="text-align:center;">
                  <div id="fruit-content-wrapper" style="padding:0px 2px;">
    
    
    <div id="fruit_slide_container" style="position: relative; margin: 0 auto;
        top: 0px; left: 0px; width: 620px; height: 260px; overflow: hidden;">
        
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
            <div style="position: absolute; display: block; background: url(themes/test1/images/loading.gif) no-repeat center center;
                top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
        </div>
        
        <div u="slides"  class="" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 620px;
            height: 260px; overflow: hidden;">
           
               			    <div>
                    <table border="0" cellspacing="0" cellpadding="0" style="width:620px;height:260px;position:relative;float:left;">
                      <tr>
                        <td style="vertical-align:top;">
                          <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                            <tr>
                              <td style="width:100%;">
                          <table border="0" cellspacing="0" cellpadding="0" style="width:100%;height:260px;border: 1px solid #ededed;
padding: 0px 4px;">
                            <tr>
                              <td style="width:610px;">
                                                   <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;text-align:center;height:90px;vertical-align:top;">
                                              											  <a href="http://">
                                              <img class="" src="data/afficheimg/20150227ccpmjg.jpg" style="width:105px;height:85px;padding:0;">
											  </a>
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											  <a href="http://" class="banner_a">
                                              额外服务俄方											  </a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;">53453</span>											  
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                   <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;text-align:center;height:90px;vertical-align:top;">
                                              											  <a href="http://">
                                              <img class="" src="data/afficheimg/20150227smmeee.jpg" style="width:105px;height:85px;padding:0;">
											  </a>
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											  <a href="http://" class="banner_a">
                                              erfer											  </a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;">$53/lb</span>											  
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                   <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;text-align:center;height:90px;vertical-align:top;">
                                              											  <a href="http://">
                                              <img class="" src="data/afficheimg/20150227jqzocv.jpg" style="width:105px;height:85px;padding:0;">
											  </a>
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											  <a href="http://" class="banner_a">
                                              grace											  </a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;">$56/lb</span>											  
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                   <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;text-align:center;height:90px;vertical-align:top;">
                                              											  <a href="http://">
                                              <img class="" src="data/afficheimg/20150227fqkkoc.jpg" style="width:105px;height:85px;padding:0;">
											  </a>
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											  <a href="http://" class="banner_a">
                                              efsd											  </a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;">$53/lb</span>											  
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                   <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;text-align:center;height:90px;vertical-align:top;">
                                              											  <a href="http://">
                                              <img class="" src="data/afficheimg/20150227ypmyuh.jpg" style="width:105px;height:85px;padding:0;">
											  </a>
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											  <a href="http://" class="banner_a">
                                              fsdfsdvs											  </a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;">$56/lb</span>											  
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                       
                              </td>
                            </tr>
                            <tr>
                              <td style="width:100%;">
                                                      <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;height:90px;vertical-align:top;">
                                                                                            <img class="" src="data/afficheimg/20150227lffnuo.jpg" style="width:105px;height:85px;padding:0;">
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											<a href="http://" class="banner_a">
                                              <span style="font-family:arial;font-size:12px;">读书方法</span>
											</a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;">555</span>
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                      <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;height:90px;vertical-align:top;">
                                                                                            <img class="" src="data/afficheimg/20150227wrgmgw.jpg" style="width:105px;height:85px;padding:0;">
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											<a href="http://" class="banner_a">
                                              <span style="font-family:arial;font-size:12px;">就</span>
											</a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;">656</span>
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                      <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;height:90px;vertical-align:top;">
                                                                                            <img class="" src="data/afficheimg/20150227ewonhq.jpg" style="width:105px;height:85px;padding:0;">
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											<a href="http://" class="banner_a">
                                              <span style="font-family:arial;font-size:12px;">风</span>
											</a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;">434</span>
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                      <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;height:90px;vertical-align:top;">
                                                                                            <img class="" src="data/afficheimg/20150227gliqvd.jpg" style="width:105px;height:85px;padding:0;">
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											<a href="http://" class="banner_a">
                                              <span style="font-family:arial;font-size:12px;">东方大厦</span>
											</a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;">33</span>
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                      <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;height:90px;vertical-align:top;">
                                                                                            <img class="" src="data/afficheimg/20150227khdppb.jpg" style="width:105px;height:85px;padding:0;">
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											<a href="http://" class="banner_a">
                                              <span style="font-family:arial;font-size:12px;">dssd</span>
											</a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;">$53/lb</span>
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                       
                            </td>
                          </tr>
                        </table>
                              </td>
                            </tr>
                        </table>    
                      </td>
                    </tr>
                  </table>
				</div>
                			    <div>
                    <table border="0" cellspacing="0" cellpadding="0" style="width:620px;height:260px;position:relative;float:left;">
                      <tr>
                        <td style="vertical-align:top;">
                          <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                            <tr>
                              <td style="width:100%;">
                          <table border="0" cellspacing="0" cellpadding="0" style="width:100%;height:260px;border: 1px solid #ededed;
padding: 0px 4px;">
                            <tr>
                              <td style="width:610px;">
                                                   <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;text-align:center;height:90px;vertical-align:top;">
                                              											  <a href="http://">
                                              <img class="" src="data/afficheimg/20150227iiqhrz.jpg" style="width:105px;height:85px;padding:0;">
											  </a>
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											  <a href="http://" class="banner_a">
                                              ergfd											  </a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;">$53/lb</span>											  
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                   <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;text-align:center;height:90px;vertical-align:top;">
                                              											  <a href="http://">
                                              <img class="" src="data/afficheimg/20150227fwmyuc.jpg" style="width:105px;height:85px;padding:0;">
											  </a>
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											  <a href="http://" class="banner_a">
                                              dsadf											  </a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;">$56/lb</span>											  
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                   <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;text-align:center;height:90px;vertical-align:top;">
                                              											  <a href="http://">
                                              <img class="" src="data/afficheimg/20150227dqzyly.jpg" style="width:105px;height:85px;padding:0;">
											  </a>
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											  <a href="http://" class="banner_a">
                                              fruit											  </a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;">$53/lb</span>											  
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                   <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;text-align:center;height:90px;vertical-align:top;">
                                              											  <a href="http://">
                                              <img class="" src="data/afficheimg/20150227pcjyrw.jpg" style="width:105px;height:85px;padding:0;">
											  </a>
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											  <a href="http://" class="banner_a">
                                              wesas											  </a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;">$53/lb</span>											  
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                   <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;text-align:center;height:90px;vertical-align:top;">
                                              											  <a href="http://">
                                              <img class="" src="data/afficheimg/20150227wgyfua.jpg" style="width:105px;height:85px;padding:0;">
											  </a>
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											  <a href="http://" class="banner_a">
                                              上的											  </a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;">554</span>											  
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                       
                              </td>
                            </tr>
                            <tr>
                              <td style="width:100%;">
                                                      <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;height:90px;vertical-align:top;">
                                                                                            <img class="" src="data/afficheimg/20150227qvzqrv.jpg" style="width:105px;height:85px;padding:0;">
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											<a href="http://" class="banner_a">
                                              <span style="font-family:arial;font-size:12px;">发发</span>
											</a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;">33223</span>
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                      <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;height:90px;vertical-align:top;">
                                                                                            <img class="" src="data/afficheimg/20150227oohgkd.jpg" style="width:105px;height:85px;padding:0;">
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											<a href="http://" class="banner_a">
                                              <span style="font-family:arial;font-size:12px;">gdfser</span>
											</a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;">$53/lb</span>
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                      <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;height:90px;vertical-align:top;">
                                                                                            <img class="" src="data/afficheimg/20150227kmhjbq.jpg" style="width:105px;height:85px;padding:0;">
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											<a href="http://" class="banner_a">
                                              <span style="font-family:arial;font-size:12px;">娃娃</span>
											</a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;">654</span>
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                      <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;height:90px;vertical-align:top;">
                                                                                            <img class="" src="data/afficheimg/20150227zuugnk.jpg" style="width:105px;height:85px;padding:0;">
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											<a href="http://" class="banner_a">
                                              <span style="font-family:arial;font-size:12px;">犹太人人</span>
											</a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;">6</span>
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                      <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;height:90px;vertical-align:top;">
                                                                                            <img class="" src="data/afficheimg/20150227mqqoqu.jpg" style="width:105px;height:85px;padding:0;">
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											<a href="http://" class="banner_a">
                                              <span style="font-family:arial;font-size:12px;">发发和</span>
											</a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;">322</span>
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                       
                            </td>
                          </tr>
                        </table>
                              </td>
                            </tr>
                        </table>    
                      </td>
                    </tr>
                  </table>
				</div>
                             
           
        </div>
                
       
        
        <div u="navigator" class="jssorb21" style="position: absolute; bottom: 2px; left: 6px;">
            
            <div u="prototype" style="POSITION: absolute; WIDTH: 19px; HEIGHT: 19px; text-align:center; line-height:19px; color:White; font-size:12px;"></div>
        </div>
        
        
   
        
        <span u="arrowleft" class="jssora21l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
        </span>
        
        <span u="arrowright" class="jssora21r" style="width: 55px; height: 55px; top: 123px; right: 8px;">
        </span>
        
  
    </div>
    
    <script>
        if ( 2 != 1){jssor_panel_slide_starter('fruit_slide_container');}
    </script>
    
                  </div>
                </td>
              </tr>
            </table>
          </td>
          <td id="top-right-img-td" style="width:19%;vertical-align:top;">
            									<img src="data/afficheimg/20150227hhcerr.jpg" style="width:100%;"/>
																																																																																																																																													 
          </td>
        </tr>
      </table>
    </td>
  </tr>
 <tr><td class="blank" colspan="3" >&nbsp;</td></tr>
  <tr>
      <td id="bottom-banner-id" colspan="3" style="text-align:center;">
          <div class="bottom-banner">
																																																																																																																																													 
		  </div>
      </td>
    </tr>
  </table>
</div>
<!--============================================================
===================== end of fruit-panel =================== 
=============================================================-->
<!--===================================================== 
======================== meat-panel ================
======================================================-->
<div class="blank"></div>
<div id="meat-panel" class="clearfix cat-panel">
<table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
  <tr>
    <td>
      <table border="0" cellspacing="0" cellpadding="0" style="width:100%;margin:0 auto;height:310px;">
        <tr>
          <td id="top-left-img-id" style="width:19%;vertical-align:top;">
																														<img src="data/afficheimg/20150227yblspu.jpg" style="width:100%;"/>
																																							 
          </td>
          <td style="vertical-align:top;">
            <table border="0" cellspacing="0" cellpadding="0" style="width:100%;margin:0 auto;">
              <tr>
                <td id="top-banner-td" style="vertical-align:top;text-align:center;padding:0 2px;">
																																																												<img src="data/afficheimg/20150227aklauk.jpg" style="width:100%;"/>
																																																							 
                </td>
              </tr>
              <tr style="height:5px;"><td></td></tr>
              <tr>
                <td id="meat-content-td" style="text-align:center;">
                  <div id="meat-content-wrapper" style="padding:0px 2px;">
    
    
    <div id="meat_slide_container" style="position: relative; margin: 0 auto;
        top: 0px; left: 0px; width: 620px; height: 260px; overflow: hidden;">
        
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
            <div style="position: absolute; display: block; background: url(themes/test1/images/loading.gif) no-repeat center center;
                top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
        </div>
        
        <div u="slides"  class="" style="cursor: ; position: absolute; left: 0px; top: 0px; width: 620px;
            height: 260px; overflow: hidden;">
           
               			    <div>
                    <table border="0" cellspacing="0" cellpadding="0" style="width:620px;height:260px;position:relative;float:left;">
                      <tr>
                        <td style="vertical-align:top;">
                          <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                            <tr>
                              <td style="width:100%;">
                          <table border="0" cellspacing="0" cellpadding="0" style="width:100%;height:260px;border: 1px solid #ededed;
padding: 0px 4px;">
                            <tr>
                              <td style="width:610px;">
                                                   <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;text-align:center;height:90px;vertical-align:top;">
                                              											  <a href="http://">
                                              <img class="" src="data/afficheimg/20150227hbwnkh.jpg" style="width:105px;height:85px;padding:0;">
											  </a>
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											  <a href="http://" class="banner_a">
                                              鸡腿											  </a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;">98</span>											  
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                   <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;text-align:center;height:90px;vertical-align:top;">
                                              											  <a href="http://">
                                              <img class="" src="data/afficheimg/20150227yoveqw.jpg" style="width:105px;height:85px;padding:0;">
											  </a>
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											  <a href="http://" class="banner_a">
                                              瘦肉											  </a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;">233</span>											  
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                   <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;text-align:center;height:90px;vertical-align:top;">
                                              											  <a href="http://">
                                              <img class="" src="data/afficheimg/20150227pitbcs.jpg" style="width:105px;height:85px;padding:0;">
											  </a>
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											  <a href="http://" class="banner_a">
                                              小肉											  </a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;">585</span>											  
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                   <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;text-align:center;height:90px;vertical-align:top;">
                                              											  <a href="http://">
                                              <img class="" src="data/afficheimg/20150227xmsawc.jpg" style="width:105px;height:85px;padding:0;">
											  </a>
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											  <a href="http://" class="banner_a">
                                              鱼											  </a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;">432</span>											  
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                   <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;text-align:center;height:90px;vertical-align:top;">
                                              											  <a href="http://">
                                              <img class="" src="data/afficheimg/20150227ukeuzr.jpg" style="width:105px;height:85px;padding:0;">
											  </a>
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											  <a href="http://" class="banner_a">
                                              五花肉											  </a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;">999</span>											  
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                       
                              </td>
                            </tr>
                            <tr>
                              <td style="width:100%;">
                                                      <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;height:90px;vertical-align:top;">
                                                                                            <img class="" src="data/afficheimg/20150227vqkyqk.JPG" style="width:105px;height:85px;padding:0;">
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											<a href="http://" class="banner_a">
                                              <span style="font-family:arial;font-size:12px;">鸡翅</span>
											</a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;">693</span>
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                      <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;height:90px;vertical-align:top;">
                                                                                            &nbsp;
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											<a href="" class="banner_a">
                                              <span style="font-family:arial;font-size:12px;"></span>
											</a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;"></span>
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                      <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;height:90px;vertical-align:top;">
                                                                                            &nbsp;
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											<a href="" class="banner_a">
                                              <span style="font-family:arial;font-size:12px;"></span>
											</a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;"></span>
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                      <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;height:90px;vertical-align:top;">
                                                                                            &nbsp;
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											<a href="" class="banner_a">
                                              <span style="font-family:arial;font-size:12px;"></span>
											</a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;"></span>
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                      <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;height:90px;vertical-align:top;">
                                                                                            &nbsp;
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											<a href="" class="banner_a">
                                              <span style="font-family:arial;font-size:12px;"></span>
											</a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;"></span>
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                       
                            </td>
                          </tr>
                        </table>
                              </td>
                            </tr>
                        </table>    
                      </td>
                    </tr>
                  </table>
				</div>
                             
           
        </div>
                
       
        
        <div u="navigator" class="jssorb21" style="position: absolute; bottom: 2px; left: 6px;">
            
            <div u="prototype" style="POSITION: absolute; WIDTH: 19px; HEIGHT: 19px; text-align:center; line-height:19px; color:White; font-size:12px;"></div>
        </div>
        
        
       
        
        <span u="arrowleft" class="jssora21l" style="width: 55px; height: 55px; top: 123px; left: 8px;display:none;">
        </span>
        
        <span u="arrowright" class="jssora21r" style="width: 55px; height: 55px; top: 123px; right: 8px;display:none;">
        </span>
        
  
    </div>
    
    <script>
        if ( 1 != 1){jssor_panel_slide_starter('meat_slide_container');}
    </script>
    
                  </div>
                </td>
              </tr>
            </table>
          </td>
          <td id="top-right-img-td" style="width:19%;vertical-align:top;">
            																																							<img src="data/afficheimg/20150227lslhku.jpg" style="width:100%;"/>
																											 
          </td>
        </tr>
      </table>
    </td>
  </tr>
 <tr><td class="blank" colspan="3" >&nbsp;</td></tr>
  <tr>
      <td id="bottom-banner-id" colspan="3" style="text-align:center;">
          <div class="bottom-banner">
																																																									 
		  </div>
      </td>
    </tr>
  </table>
</div>
<!--============================================================
===================== end of meat-panel =================== 
=============================================================-->
<!--===================================================== 
======================== wok-panel ================
======================================================-->
<div class="blank"></div>
<div id="wok-panel" class="clearfix cat-panel">
<table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
  <tr>
    <td>
      <table border="0" cellspacing="0" cellpadding="0" style="width:100%;margin:0 auto;height:310px;">
        <tr>
          <td id="top-left-img-id" style="width:19%;vertical-align:top;">
																		<img src="data/afficheimg/20150305ujkosl.jpg" style="width:100%;"/>
																					 
          </td>
          <td style="vertical-align:top;">
            <table border="0" cellspacing="0" cellpadding="0" style="width:100%;margin:0 auto;">
              <tr>
                <td id="top-banner-td" style="vertical-align:top;text-align:center;padding:0 2px;">
																																								<img src="data/afficheimg/20150305rqdmzr.jpg" style="width:100%;"/>
																									 
                </td>
              </tr>
              <tr style="height:5px;"><td></td></tr>
              <tr>
                <td id="wok-content-td" style="text-align:center;">
                  <div id="wok-content-wrapper" style="padding:0px 2px;">
    
    
    <div id="wok_slide_container" style="position: relative; margin: 0 auto;
        top: 0px; left: 0px; width: 620px; height: 260px; overflow: hidden;">
        
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
            <div style="position: absolute; display: block; background: url(themes/test1/images/loading.gif) no-repeat center center;
                top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
        </div>
        
        <div u="slides"  class="" style="cursor: ; position: absolute; left: 0px; top: 0px; width: 620px;
            height: 260px; overflow: hidden;">
           
               			    <div>
                    <table border="0" cellspacing="0" cellpadding="0" style="width:620px;height:260px;position:relative;float:left;">
                      <tr>
                        <td style="vertical-align:top;">
                          <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                            <tr>
                              <td style="width:100%;">
                          <table border="0" cellspacing="0" cellpadding="0" style="width:100%;height:260px;border: 1px solid #ededed;
padding: 0px 4px;">
                            <tr>
                              <td style="width:610px;">
                                                   <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;text-align:center;height:90px;vertical-align:top;">
                                              											  <a href="http://">
                                              <img class="" src="data/afficheimg/20150305piuueh.jpg" style="width:105px;height:85px;padding:0;">
											  </a>
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											  <a href="http://" class="banner_a">
                                              锅											  </a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;">854</span>											  
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                   <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;text-align:center;height:90px;vertical-align:top;">
                                                                                            &nbsp;
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											  <a href="" class="banner_a">
                                              											  </a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;"></span>											  
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                   <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;text-align:center;height:90px;vertical-align:top;">
                                                                                            &nbsp;
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											  <a href="" class="banner_a">
                                              											  </a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;"></span>											  
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                   <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;text-align:center;height:90px;vertical-align:top;">
                                                                                            &nbsp;
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											  <a href="" class="banner_a">
                                              											  </a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;"></span>											  
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                   <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;text-align:center;height:90px;vertical-align:top;">
                                                                                            &nbsp;
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											  <a href="" class="banner_a">
                                              											  </a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;"></span>											  
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                       
                              </td>
                            </tr>
                            <tr>
                              <td style="width:100%;">
                                                      <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;height:90px;vertical-align:top;">
                                                                                            &nbsp;
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											<a href="" class="banner_a">
                                              <span style="font-family:arial;font-size:12px;"></span>
											</a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;"></span>
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                      <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;height:90px;vertical-align:top;">
                                                                                            &nbsp;
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											<a href="" class="banner_a">
                                              <span style="font-family:arial;font-size:12px;"></span>
											</a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;"></span>
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                      <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;height:90px;vertical-align:top;">
                                                                                            &nbsp;
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											<a href="" class="banner_a">
                                              <span style="font-family:arial;font-size:12px;"></span>
											</a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;"></span>
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                      <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;height:90px;vertical-align:top;">
                                                                                            &nbsp;
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											<a href="" class="banner_a">
                                              <span style="font-family:arial;font-size:12px;"></span>
											</a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;"></span>
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                                                      <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;height:90px;vertical-align:top;">
                                                                                            &nbsp;
                                                                                          </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											<a href="" class="banner_a">
                                              <span style="font-family:arial;font-size:12px;"></span>
											</a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;"></span>
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                       
                            </td>
                          </tr>
                        </table>
                              </td>
                            </tr>
                        </table>    
                      </td>
                    </tr>
                  </table>
				</div>
                             
           
        </div>
                
       
        
        <div u="navigator" class="jssorb21" style="position: absolute; bottom: 2px; left: 6px;">
            
            <div u="prototype" style="POSITION: absolute; WIDTH: 19px; HEIGHT: 19px; text-align:center; line-height:19px; color:White; font-size:12px;"></div>
        </div>
        
        
       
        
        <span u="arrowleft" class="jssora21l" style="width: 55px; height: 55px; top: 123px; left: 8px;display:none;">
        </span>
        
        <span u="arrowright" class="jssora21r" style="width: 55px; height: 55px; top: 123px; right: 8px;display:none;">
        </span>
        
  
    </div>
    
    <script>
        if ( 1 != 1){jssor_panel_slide_starter('wok_slide_container');}
    </script>
    
                  </div>
                </td>
              </tr>
            </table>
          </td>
          <td id="top-right-img-td" style="width:19%;vertical-align:top;">
            																											<img src="data/afficheimg/20150305yvwead.jpg" style="width:100%;"/>
									 
          </td>
        </tr>
      </table>
    </td>
  </tr>
 <tr><td class="blank" colspan="3" >&nbsp;</td></tr>
  <tr>
      <td id="bottom-banner-id" colspan="3" style="text-align:center;">
          <div class="bottom-banner">
																											 
		  </div>
      </td>
    </tr>
  </table>
</div>
<!--============================================================
===================== end of wok-panel =================== 
=============================================================-->
<div class="blank"></div>
<div id="re_men_outside_container" style="position: relative; width: 1000px;margin: 0 auto;overflow:hidden;">
	
	<table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
		<tr>
		<td style="width:68%;">
	
	<div style="width:100%;border:1px solid #E8E8E8;" >
	<table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
		<tr>
		<td style="width:100%;text-align:left;">
		<div style="margin-left:0px;font-family:Microsoft YaHei;font-size:1.2em;background:#f4f4f4;font-weight:700;cursor:default;">
			<table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
			<tr>	
			<td>
				<font style="padding:1px 3px;">热门晒单</font>
			</td>
			<td>	
				<font style="padding:1px 3px;">热门活动</font>
			</td>
			</tr>
			</table>
		</div>
		</td>
		</tr>
		
		<tr>
			<td style="width:100%;padding:4px;">
	
          <div id="slider1_container" style="position: relative; top: 8px; left: 0px; width: 650px;height: 140px;">
            
            <div u="slides" style="position: absolute; left: 0px; top: 0px; width: 650px; height: 140px;overflow: hidden;">
                                    <div>
			
			<table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
			<tr>
			
			
			
			
			<td style="width:;font-family:Microsoft YaHei;font-size:1.1em;">
			
			
			
              <table style="width:100%">
                <tr>
                  <td style="width:20%;">
                    <a href="http://"><img src="data/afficheimg/20150305ulqmgq.jpg" width="50" height="50" style="width:100%;"></a>
                  </td>
                  <td style="vertical-align:top;">
                    <table style="width:100%">
                      <tr>
                        <td>
                          <a href="http://" class="re_men_title">晒单啦</a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a href="http://" class="re_men_desc">5. 免责：如因不可抗力或其它PBCC无法控制的原因使PBCC销售系统崩溃或无法 ...</a>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
			  
			  
			  
			  
			  
			  
			  
			  
			  
			      </td>
				  
				  
				  
				  	<td style="width:50%;font-family:Microsoft YaHei;font-size:1.1em;">
						              <table style="width:100%">
                <tr>
                  <td style="width:20%;">
                    <a href="http://"><img src="data/afficheimg/20150305mubfmt.jpg" width="50" height="50" style="width:100%;"></a>
                  </td>
                  <td style="vertical-align:top;">
                    <table style="width:100%">
                      <tr>
                        <td>
                          <a href="http://" class="re_men_title">图表、标识，按钮图标</a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a href="http://" class="re_men_desc">本网站上的所有内容诸如文字、图表、标识、按钮图标、图像、声音文件片段、数字下载、 ...</a>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
						  
			  
			  
			  
			  
			  
			  
			      </td>
				  
				  
				  
				  
				  
				  
                </tr>
              </table>
			  
			  
            </div>
                       <div>
			
			<table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
			<tr>
			
			
			
			
			<td style="width:;font-family:Microsoft YaHei;font-size:1.1em;">
			
			
			
              <table style="width:100%">
                <tr>
                  <td style="width:20%;">
                    <a href="http://"><img src="data/afficheimg/20150305jjhcbi.jpg" width="50" height="50" style="width:100%;"></a>
                  </td>
                  <td style="vertical-align:top;">
                    <table style="width:100%">
                      <tr>
                        <td>
                          <a href="http://" class="re_men_title">一个字哪里</a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a href="http://" class="re_men_desc">本网站及其关联公司努力使产品说明尽可能准确。不过，由于实际条件限制，本网站并不保 ...</a>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
			  
			  
			  
			  
			  
			  
			  
			  
			  
			      </td>
				  
				  
				  
				  	<td style="width:50%;font-family:Microsoft YaHei;font-size:1.1em;">
						              <table style="width:100%">
                <tr>
                  <td style="width:20%;">
                    <a href="http://"><img src="data/afficheimg/20150305wfezpk.jpg" width="50" height="50" style="width:100%;"></a>
                  </td>
                  <td style="vertical-align:top;">
                    <table style="width:100%">
                      <tr>
                        <td>
                          <a href="http://" class="re_men_title">我们已经为您配货，包装完毕</a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a href="http://" class="re_men_desc">此状态表明，我们已经为您配货，包装完毕，并已离开我们仓库，发货成功。 (备注：此 ...</a>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
						  
			  
			  
			  
			  
			  
			  
			      </td>
				  
				  
				  
				  
				  
				  
                </tr>
              </table>
			  
			  
            </div>
                       <div>
			
			<table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
			<tr>
			
			
			
			
			<td style="width:;font-family:Microsoft YaHei;font-size:1.1em;">
			
			
			
              <table style="width:100%">
                <tr>
                  <td style="width:20%;">
                    <a href="http://"><img src="data/afficheimg/20150305posxpj.jpg" width="50" height="50" style="width:100%;"></a>
                  </td>
                  <td style="vertical-align:top;">
                    <table style="width:100%">
                      <tr>
                        <td>
                          <a href="http://" class="re_men_title">热门晒单啊</a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a href="http://" class="re_men_desc">1. 订购的商品价格以您下订单时PBCC网上价格为准。 2. 请清楚准确地填写您 ...</a>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
			  
			  
			  
			  
			  
			  
			  
			  
			  
			      </td>
				  
				  
				  
				  	<td style="width:50%;font-family:Microsoft YaHei;font-size:1.1em;">
						              <table style="width:100%">
                <tr>
                  <td style="width:20%;">
                    <a href="http://"><img src="data/afficheimg/20150305fmxoug.jpg" width="50" height="50" style="width:100%;"></a>
                  </td>
                  <td style="vertical-align:top;">
                    <table style="width:100%">
                      <tr>
                        <td>
                          <a href="http://" class="re_men_title">评论、意见、消息和其他内容</a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a href="http://" class="re_men_desc">访问者可以张贴评论、意见及其他内容，以及提出建议、主意、意见、问题或其他信息，只 ...</a>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
						  
			  
			  
			  
			  
			  
			  
			      </td>
				  
				  
				  
				  
				  
				  
                </tr>
              </table>
			  
			  
            </div>
                       </div>
         </div>
		 
				</td>
				<td>
				
				
				
				</td>
			</tr>
		</table>
		<table border="0" cellpadding="0" cellspacing="0"><tr height="3"><td></td></tr></table>
	</div>  
		 
		 
	</td>
	<td width="7">
	</td>
	<td style="height:164px;">
	
	
	<table border="0" cellspacing="0" cellpadding="0" style="width:100%;height:100%;">
	<tr>
	
	<td>
	
	
	<table border="0" cellspacing="0" cellpadding="0" style="width:100%;height:100%;">
	<tr>
	<td style="background-color:#FF9D9D;height:18px;">
	
	</td>
	</tr>
	<tr>
	<td>
	<div class="mar"  style="height:100%; padding:1px;border:1px solid #E8E8E8;">
	<marquee behavior="scroll" direction="up" scrollamount="1" style="height:100%;" onmouseover="this.stop();" onmouseout="this.start();" scrolldelay="2">
	
	<table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
					<tr>
				<td>
				<a href="#" class="marquee_a">商品：不好意思出差刚回来，水果特好！下次 ...</a>
				</td>
				</tr>
				<tr height="7"><td></td></tr>
					<tr>
				<td>
				<a href="#" class="marquee_a">忘记确认收货了，不好意思。。。水果收到了 ...</a>
				</td>
				</tr>
				<tr height="7"><td></td></tr>
					<tr>
				<td>
				<a href="#" class="marquee_a">商品：果品质量上乘，春节期间吃上质量这么 ...</a>
				</td>
				</tr>
				<tr height="7"><td></td></tr>
					<tr>
				<td>
				<a href="#" class="marquee_a">为什么不能再好一点呢 ...</a>
				</td>
				</tr>
				<tr height="7"><td></td></tr>
		
	</table>
	</marquee>
	
	</div>
	</td>
	</tr>
	</table>
	
	
	</td>
	</tr>
	</table>
	
	
	</td>
	</tr>
	</table>	 
</div>         
<script>
      /* $(document).ready(function () {
           $('div.mar marquee').marquee('pointer').mouseover(function () {
			  $(this).trigger('stop');
			}).mouseout(function () {
			  $(this).trigger('start');
			})        
	});*/
		 
</script>
<div class="blank"></div>
<div id="bottomNav" class="">
 <div class="">
  <div class="bNavList clearfix">
   <table border="0" cellspacing="0" cellpadding="0" style="width:98%;margin:0 auto;">
   <tr>
   <td>
         <div style="float:left;padding:0px 20px;width:154px;">
    <table class="footer_table" border="0" cellspacing="0" cellpadding="0">
		<tr>
		<td>
		        <div class="help_nav" style="width:40px;height:40px;background:url(themes/test1/images/xin_shou_shang_lu.png) no-repeat center; "></div>
				</td>
		<td>
        <a style="font-size:1.2em;" href="article_cat.php?id=5" >新手上路</a>
		</td>
		</tr>
		<tr height="8"><td colspan="2"></td></tr>
				<tr>
		<td style=""><div class="css-shapes-preview"></div>
		</td>
		<td>
        <a style="font-size:0.9em;" href="article.php?id=10" >购物流程</a>
		</td>
		</tr>
			</table>
	</div>
                 <div style="float:left;padding:0px 20px;width:154px;">
    <table class="footer_table" border="0" cellspacing="0" cellpadding="0">
		<tr>
		<td>
		        <div class="help_nav" style="width:40px;height:40px;background:url(themes/test1/images/gou_wu_zhi_nan.png) no-repeat center; "></div>
				</td>
		<td>
        <a style="font-size:1.2em;" href="article_cat.php?id=6" >购物指南</a>
		</td>
		</tr>
		<tr height="8"><td colspan="2"></td></tr>
				<tr>
		<td style=""><div class="css-shapes-preview"></div>
		</td>
		<td>
        <a style="font-size:0.9em;" href="article.php?id=38" >网站使用条款</a>
		</td>
		</tr>
				<tr>
		<td style=""><div class="css-shapes-preview"></div>
		</td>
		<td>
        <a style="font-size:0.9em;" href="article.php?id=39" >订单状态</a>
		</td>
		</tr>
				<tr>
		<td style=""><div class="css-shapes-preview"></div>
		</td>
		<td>
        <a style="font-size:0.9em;" href="article.php?id=40" >会员介绍</a>
		</td>
		</tr>
			</table>
	</div>
                 <div style="float:left;padding:0px 20px;width:154px;">
    <table class="footer_table" border="0" cellspacing="0" cellpadding="0">
		<tr>
		<td>
		        <div class="help_nav" style="width:40px;height:40px;background:url(themes/test1/images/zhi_fu_pei_song.png) no-repeat center; "></div>
				</td>
		<td>
        <a style="font-size:1.2em;" href="article_cat.php?id=7" >支付配送</a>
		</td>
		</tr>
		<tr height="8"><td colspan="2"></td></tr>
				<tr>
		<td style=""><div class="css-shapes-preview"></div>
		</td>
		<td>
        <a style="font-size:0.9em;" href="article.php?id=17" >支付方式说明</a>
		</td>
		</tr>
				<tr>
		<td style=""><div class="css-shapes-preview"></div>
		</td>
		<td>
        <a style="font-size:0.9em;" href="article.php?id=37" >配送方式说明</a>
		</td>
		</tr>
			</table>
	</div>
                 <div style="float:left;padding:0px 20px;width:154px;">
    <table class="footer_table" border="0" cellspacing="0" cellpadding="0">
		<tr>
		<td>
		        <div class="help_nav" style="width:40px;height:40px;background:url(themes/test1/images/shou_hou_fu_wu.png) no-repeat center; "></div>
				</td>
		<td>
        <a style="font-size:1.2em;" href="article_cat.php?id=8" >售后服务</a>
		</td>
		</tr>
		<tr height="8"><td colspan="2"></td></tr>
				<tr>
		<td style=""><div class="css-shapes-preview"></div>
		</td>
		<td>
        <a style="font-size:0.9em;" href="article.php?id=21" >退换货原则</a>
		</td>
		</tr>
				<tr>
		<td style=""><div class="css-shapes-preview"></div>
		</td>
		<td>
        <a style="font-size:0.9em;" href="article.php?id=36" >常见问题与建议</a>
		</td>
		</tr>
			</table>
	</div>
                 <div style="float:left;padding:0px 20px;width:154px;">
    <table class="footer_table" border="0" cellspacing="0" cellpadding="0">
		<tr>
		<td>
		        <div class="help_nav" style="width:40px;height:40px;background:url(themes/test1/images/guan_yu_wei_shi.png) no-repeat center; "></div>
				</td>
		<td>
        <a style="font-size:1.2em;" href="article_cat.php?id=9" >关于微市</a>
		</td>
		</tr>
		<tr height="8"><td colspan="2"></td></tr>
				<tr>
		<td style=""><div class="css-shapes-preview"></div>
		</td>
		<td>
        <a style="font-size:0.9em;" href="article.php?id=24" >我们的理念</a>
		</td>
		</tr>
				<tr>
		<td style=""><div class="css-shapes-preview"></div>
		</td>
		<td>
        <a style="font-size:0.9em;" href="article.php?id=25" >关于我们</a>
		</td>
		</tr>
			</table>
	</div>
                  </td>
  </tr>
   </table>
  </div>
 </div>
</div>
<div class="fixedBox">
  <ul class="fixedBoxList">
  <li id="cartboxs" style="display:block;" class="fixeBoxLi cart_bd">
    			<p class="good_cart">0</p>
		<span class="fixeBoxSpan"></span> 
		<strong>购物车</strong>
		<div class="cartBox">
			<div class="bjfff"></div>
			<div class="message">购物车内暂无商品，赶紧选购吧</div>
		</div>
            
</li>
    <!--<li class="fixeBoxLi Service startWork"> <span class="fixeBoxSpan"></span> <strong>联系客服</strong>
      <div class="ServiceBox">
        <div class="bjfff"></div>
        <dl onclick="javascript:;">
          <dt><img src="themes/ningbo/images/Service1.jpg"></dt>
          <dd> <strong>在线客服QQ</strong>
            <p class="p1">9:00-22:00</p>
            <p class="p2"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=2103926188&amp;site=qq&amp;menu=yes">点击交谈</a></p>
          </dd>
        </dl>
        <dl style="height:180px" onclick="javascript:;">
          <p>客服微信号:&nbsp;<span class="f4">kuajingcheng</span></p>
          <img width="160px" height="160px" src="themes/ningbo/images/kjcqrcode.jpg">
        </dl>
      </div>
    </li>
    <li class="fixeBoxLi Home"> <a href="./"> <span class="fixeBoxSpan"></span> <strong>返回首页</strong> </a> </li>-->
    <li class="fixeBoxLi"> <span class="fixeBoxSpan BackToTop" id="scroll_to_top"></span></li>
  </ul>
</div>
<div class="blank"></div>
<div id="footer">
 <div class="text">
 
  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
		<tr>
		<td style="text-align:center;">
<span>Copyrights © Polar Bear Canada Corp.,2013-2014</span>
</td>
		</tr>
		<tr>
		<td style="text-align:center;">
<span>ICP备案证书号:辽ICP备14005196号-1</span>
</td>
		</tr>
<tr>
		<td style="text-align:center;">
		<a href="http://www.pbcc.ca/en/html/index/index.html" target="_blank" style=" font-family:Verdana; font-size:11px;">Powered&nbsp;by&nbsp;<strong><span style="color: #4fb75e;"> PBCC</span></strong></a>&nbsp;<br />
</td>
		</tr>
	</table>
  
 </div>
</div>
<script>
         $(document).ready(function () {
            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $PlayOrientation: 6,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 0,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
				//$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                $SlideHeight: 70,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };
            var jssor_slider1 = new $JssorSlider$("slider1_container", options);
        });
		 
</script>
 
</body>
</html>
