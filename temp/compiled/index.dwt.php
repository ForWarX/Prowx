<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />



<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.js,json2.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js,jssor.js,jssor.slider.js,gototop.js,marquee.js')); ?>
</head>


<body>


<?php echo $this->fetch('library/page_header.lbi'); ?>



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
			<?php $_from = $this->_var['main_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
			<div>
            <a style="width:450px; height:250px;" href="<?php echo $this->_var['item']['url']; ?>" target="_blank">
              <img u="image" src="<?php echo $this->_var['item']['src']; ?>" width="500" height="280"/>
            </a>
			</div>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   	
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
        <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
		<?php $this->assign('g',$this->_var['key+2']); ?>
        <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?> <?php if ($this->_var['nav']['active'] == 1): ?> class="cur"<?php endif; ?>>
          <?php echo $this->_var['nav']['name']; ?> 
          <?php $this->assign('key_plus',$this->_foreach['nav_middle_list']['iteration']); ?>
          <?php $this->assign('na',$this->_var['navigator_list']['middle'][$this->_var['key_plus']]); ?>
        </a>
       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       <font>本周特价</font>
       <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
        <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?> <?php if ($this->_var['nav']['active'] == 1): ?> class="cur"<?php endif; ?>>
          <?php echo $this->_var['nav']['name']; ?> 
          <?php $this->assign('key_plus',$this->_foreach['nav_middle_list']['iteration']); ?>
          <?php $this->assign('na',$this->_var['navigator_list']['middle'][$this->_var['key_plus']]); ?>
        </a>
       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
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
			<?php $_from = $this->_var['vege_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');$this->_foreach['vege_banner_db'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['vege_banner_db']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
        $this->_foreach['vege_banner_db']['iteration']++;
?>
			<?php if ($this->_var['item']['position'] == "left"): ?>
			<?php if ($this->_var['item']['url'] != "" && $this->_var['item']['url'] != "http://"): ?>
			<a style="width:100%;" href="<?php echo $this->_var['item']['url']; ?>" target="_blank">
              <img src="<?php echo $this->_var['item']['src']; ?>" style="width:100%;"/>
            </a>
			<?php else: ?>
			<img src="<?php echo $this->_var['item']['src']; ?>" style="width:100%;"/>
			<?php endif; ?>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
          </td>
          <td style="vertical-align:top;">
            <table border="0" cellspacing="0" cellpadding="0" style="width:100%;margin:0 auto;">
              <tr>
                <td id="top-banner-td" style="vertical-align:top;text-align:center;padding:0 2px;">
					<?php $_from = $this->_var['vege_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');$this->_foreach['vege_banner_db'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['vege_banner_db']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
        $this->_foreach['vege_banner_db']['iteration']++;
?>
					<?php if ($this->_var['item']['position'] == "top"): ?>
					<?php if ($this->_var['item']['url'] != "" && $this->_var['item']['url'] != "http://"): ?>
					<a style="width:100%;" href="<?php echo $this->_var['item']['url']; ?>" target="_blank">
					  <img src="<?php echo $this->_var['item']['src']; ?>" style="width:100%;"/>
					</a>
					<?php else: ?>
					<img src="<?php echo $this->_var['item']['src']; ?>" style="width:100%;"/>
					<?php endif; ?>
					<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
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
        
        <div u="slides"  class="" style="cursor: <?php if ($this->_var['vege_page'] != 1): ?>move<?php endif; ?>; position: absolute; left: 0px; top: 0px; width: 620px;
            height: 260px; overflow: hidden;">
           
               <?php $_from = $this->_var['vegegroup_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'gitem');$this->_foreach['vegegroup_array'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['vegegroup_array']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['gitem']):
        $this->_foreach['vegegroup_array']['iteration']++;
?>
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
                      <?php $_from = $this->_var['gitem']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('topkey', 'topitem');$this->_foreach['vegegroup_item_top'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['vegegroup_item_top']['total'] > 0):
    foreach ($_from AS $this->_var['topkey'] => $this->_var['topitem']):
        $this->_foreach['vegegroup_item_top']['iteration']++;
?>
                             <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;text-align:center;height:90px;vertical-align:top;">
                                              <?php if ($this->_var['topitem']['src'] != ""): ?>
											  <a href="<?php echo $this->_var['topitem']['url']; ?>">
                                              <img class="" src="<?php echo $this->_var['topitem']['src']; ?>" style="width:105px;height:85px;padding:0;">
											  </a>
                                              <?php else: ?>
                                              &nbsp;
                                              <?php endif; ?>
                                            </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											  <a href="<?php echo $this->_var['topitem']['url']; ?>" class="banner_a">
                                              <?php echo $this->_var['topitem']['text']; ?>
											  </a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;"><?php echo $this->_var['topitem']['price']; ?></span>											  
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                              </td>
                            </tr>

                            <tr>
                              <td style="width:100%;">
                      <?php $_from = $this->_var['gitem']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('bottomkey', 'bottomitem');$this->_foreach['vegegroup_item_bottom'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['vegegroup_item_bottom']['total'] > 0):
    foreach ($_from AS $this->_var['bottomkey'] => $this->_var['bottomitem']):
        $this->_foreach['vegegroup_item_bottom']['iteration']++;
?>
                                <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;height:90px;vertical-align:top;">
                                              <?php if ($this->_var['bottomitem']['src'] != ""): ?>
                                              <img class="" src="<?php echo $this->_var['bottomitem']['src']; ?>" style="width:105px;height:85px;padding:0;">
                                              <?php else: ?>
                                              &nbsp;
                                              <?php endif; ?>
                                            </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											<a href="<?php echo $this->_var['bottomitem']['url']; ?>" class="banner_a">
                                              <span style="font-family:arial;font-size:12px;"><?php echo $this->_var['bottomitem']['text']; ?></span>
											</a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;"><?php echo $this->_var['bottomitem']['price']; ?></span>
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
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
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>             
           
        </div>
                
       
        
        <div u="navigator" class="jssorb21" style="position: absolute; bottom: 2px; left: 6px;">
            
            <div u="prototype" style="POSITION: absolute; WIDTH: 19px; HEIGHT: 19px; text-align:center; line-height:19px; color:White; font-size:12px;"></div>
        </div>
        

        
       
        
        <span u="arrowleft" class="jssora21l" style="width: 55px; height: 55px; top: 123px; left: 8px;<?php if ($this->_var['vege_page'] == 1): ?>display:none;<?php endif; ?>">
        </span>
        
        <span u="arrowright" class="jssora21r" style="width: 55px; height: 55px; top: 123px; right: 8px;<?php if ($this->_var['vege_page'] == 1): ?>display:none;<?php endif; ?>">
        </span>
        
  
    </div>
    
    <script>
        if ( <?php echo $this->_var['vege_page']; ?> != 1){jssor_panel_slide_starter('vege_slide_container');}
    </script>
    





                  </div>
                </td>
              </tr>
            </table>
          </td>
          <td id="top-right-img-td" style="width:19%;vertical-align:top;">
            <?php $_from = $this->_var['vege_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');$this->_foreach['vege_banner_db'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['vege_banner_db']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
        $this->_foreach['vege_banner_db']['iteration']++;
?>
			<?php if ($this->_var['item']['position'] == "right"): ?>
			<?php if ($this->_var['item']['url'] != "" && $this->_var['item']['url'] != "http://"): ?>
			<a style="width:100%;" href="<?php echo $this->_var['item']['url']; ?>" target="_blank">
              <img src="<?php echo $this->_var['item']['src']; ?>" style="width:100%;"/>
            </a>
			<?php else: ?>
			<img src="<?php echo $this->_var['item']['src']; ?>" style="width:100%;"/>
			<?php endif; ?>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
          </td>
        </tr>
      </table>
    </td>
  </tr>
 <tr><td class="blank" colspan="3" >&nbsp;</td></tr>
  <tr>
      <td id="bottom-banner-id" colspan="3" style="text-align:center;">
          <div class="bottom-banner">
			<?php $_from = $this->_var['vege_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');$this->_foreach['vege_banner_db'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['vege_banner_db']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
        $this->_foreach['vege_banner_db']['iteration']++;
?>
			<?php if ($this->_var['item']['position'] == "bottom"): ?>
			<?php if ($this->_var['item']['url'] != "" && $this->_var['item']['url'] != "http://"): ?>
			<a style="width:100%;" href="<?php echo $this->_var['item']['url']; ?>" target="_blank">
				<img src="<?php echo $this->_var['item']['src']; ?>" style="width:1000px; height:50px;"/>
			</a>
			<?php else: ?>
			<img src="<?php echo $this->_var['item']['src']; ?>" style="width:1000px; height:50px;"/>
			<?php endif; ?>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
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
			<?php $_from = $this->_var['fruit_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');$this->_foreach['fruit_banner_db'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fruit_banner_db']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
        $this->_foreach['fruit_banner_db']['iteration']++;
?>
			<?php if ($this->_var['item']['position'] == "left"): ?>
			<?php if ($this->_var['item']['url'] != "" && $this->_var['item']['url'] != "http://"): ?>
			<a style="width:100%;" href="<?php echo $this->_var['item']['url']; ?>" target="_blank">
              <img src="<?php echo $this->_var['item']['src']; ?>" style="width:100%;"/>
            </a>
			<?php else: ?>
			<img src="<?php echo $this->_var['item']['src']; ?>" style="width:100%;"/>
			<?php endif; ?>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
          </td>
          <td style="vertical-align:top;">
            <table border="0" cellspacing="0" cellpadding="0" style="width:100%;margin:0 auto;">
              <tr>
                <td id="top-banner-td" style="vertical-align:top;text-align:center;padding:0 2px;">
					<?php $_from = $this->_var['fruit_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');$this->_foreach['fruit_banner_db'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fruit_banner_db']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
        $this->_foreach['fruit_banner_db']['iteration']++;
?>
					<?php if ($this->_var['item']['position'] == "top"): ?>
					<?php if ($this->_var['item']['url'] != "" && $this->_var['item']['url'] != "http://"): ?>
					<a style="width:100%;" href="<?php echo $this->_var['item']['url']; ?>" target="_blank">
					  <img src="<?php echo $this->_var['item']['src']; ?>" style="width:100%;"/>
					</a>
					<?php else: ?>
					<img src="<?php echo $this->_var['item']['src']; ?>" style="width:100%;"/>
					<?php endif; ?>
					<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
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
        
        <div u="slides"  class="" style="cursor: <?php if ($this->_var['fruit_page'] != 1): ?>move<?php endif; ?>; position: absolute; left: 0px; top: 0px; width: 620px;
            height: 260px; overflow: hidden;">
           
               <?php $_from = $this->_var['fruitgroup_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'gitem');$this->_foreach['fruitgroup_array'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fruitgroup_array']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['gitem']):
        $this->_foreach['fruitgroup_array']['iteration']++;
?>
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
                      <?php $_from = $this->_var['gitem']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('topkey', 'topitem');$this->_foreach['fruitgroup_item_top'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fruitgroup_item_top']['total'] > 0):
    foreach ($_from AS $this->_var['topkey'] => $this->_var['topitem']):
        $this->_foreach['fruitgroup_item_top']['iteration']++;
?>
                             <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;text-align:center;height:90px;vertical-align:top;">
                                              <?php if ($this->_var['topitem']['src'] != ""): ?>
											  <a href="<?php echo $this->_var['topitem']['url']; ?>">
                                              <img class="" src="<?php echo $this->_var['topitem']['src']; ?>" style="width:105px;height:85px;padding:0;">
											  </a>
                                              <?php else: ?>
                                              &nbsp;
                                              <?php endif; ?>
                                            </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											  <a href="<?php echo $this->_var['topitem']['url']; ?>" class="banner_a">
                                              <?php echo $this->_var['topitem']['text']; ?>
											  </a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;"><?php echo $this->_var['topitem']['price']; ?></span>											  
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                              </td>
                            </tr>

                            <tr>
                              <td style="width:100%;">
                      <?php $_from = $this->_var['gitem']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('bottomkey', 'bottomitem');$this->_foreach['fruitgroup_item_bottom'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fruitgroup_item_bottom']['total'] > 0):
    foreach ($_from AS $this->_var['bottomkey'] => $this->_var['bottomitem']):
        $this->_foreach['fruitgroup_item_bottom']['iteration']++;
?>
                                <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;height:90px;vertical-align:top;">
                                              <?php if ($this->_var['bottomitem']['src'] != ""): ?>
                                              <img class="" src="<?php echo $this->_var['bottomitem']['src']; ?>" style="width:105px;height:85px;padding:0;">
                                              <?php else: ?>
                                              &nbsp;
                                              <?php endif; ?>
                                            </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											<a href="<?php echo $this->_var['bottomitem']['url']; ?>" class="banner_a">
                                              <span style="font-family:arial;font-size:12px;"><?php echo $this->_var['bottomitem']['text']; ?></span>
											</a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;"><?php echo $this->_var['bottomitem']['price']; ?></span>
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
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
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>             
           
        </div>
                
       
        
        <div u="navigator" class="jssorb21" style="position: absolute; bottom: 2px; left: 6px;">
            
            <div u="prototype" style="POSITION: absolute; WIDTH: 19px; HEIGHT: 19px; text-align:center; line-height:19px; color:White; font-size:12px;"></div>
        </div>
        

        
   
        
        <span u="arrowleft" class="jssora21l" style="width: 55px; height: 55px; top: 123px; left: 8px;<?php if ($this->_var['fruit_page'] == 1): ?>display:none;<?php endif; ?>">
        </span>
        
        <span u="arrowright" class="jssora21r" style="width: 55px; height: 55px; top: 123px; right: 8px;<?php if ($this->_var['fruit_page'] == 1): ?>display:none;<?php endif; ?>">
        </span>
        
  
    </div>
    
    <script>
        if ( <?php echo $this->_var['fruit_page']; ?> != 1){jssor_panel_slide_starter('fruit_slide_container');}
    </script>
    





                  </div>
                </td>
              </tr>
            </table>
          </td>
          <td id="top-right-img-td" style="width:19%;vertical-align:top;">
            <?php $_from = $this->_var['fruit_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');$this->_foreach['fruit_banner_db'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fruit_banner_db']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
        $this->_foreach['fruit_banner_db']['iteration']++;
?>
			<?php if ($this->_var['item']['position'] == "right"): ?>
			<?php if ($this->_var['item']['url'] != "" && $this->_var['item']['url'] != "http://"): ?>
			<a style="width:100%;" href="<?php echo $this->_var['item']['url']; ?>" target="_blank">
              <img src="<?php echo $this->_var['item']['src']; ?>" style="width:100%;"/>
            </a>
			<?php else: ?>
			<img src="<?php echo $this->_var['item']['src']; ?>" style="width:100%;"/>
			<?php endif; ?>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
          </td>
        </tr>
      </table>
    </td>
  </tr>
 <tr><td class="blank" colspan="3" >&nbsp;</td></tr>
  <tr>
      <td id="bottom-banner-id" colspan="3" style="text-align:center;">
          <div class="bottom-banner">
			<?php $_from = $this->_var['fruit_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');$this->_foreach['fruit_banner_db'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fruit_banner_db']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
        $this->_foreach['fruit_banner_db']['iteration']++;
?>
			<?php if ($this->_var['item']['position'] == "bottom"): ?>
			<?php if ($this->_var['item']['url'] != "" && $this->_var['item']['url'] != "http://"): ?>
			<a style="width:100%;" href="<?php echo $this->_var['item']['url']; ?>" target="_blank">
				<img src="<?php echo $this->_var['item']['src']; ?>" style="width:1000px; height:50px;"/>
			</a>
			<?php else: ?>
			<img src="<?php echo $this->_var['item']['src']; ?>" style="width:1000px; height:50px;"/>
			<?php endif; ?>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
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
			<?php $_from = $this->_var['meat_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');$this->_foreach['meat_banner_db'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['meat_banner_db']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
        $this->_foreach['meat_banner_db']['iteration']++;
?>
			<?php if ($this->_var['item']['position'] == "left"): ?>
			<?php if ($this->_var['item']['url'] != "" && $this->_var['item']['url'] != "http://"): ?>
			<a style="width:100%;" href="<?php echo $this->_var['item']['url']; ?>" target="_blank">
              <img src="<?php echo $this->_var['item']['src']; ?>" style="width:100%;"/>
            </a>
			<?php else: ?>
			<img src="<?php echo $this->_var['item']['src']; ?>" style="width:100%;"/>
			<?php endif; ?>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
          </td>
          <td style="vertical-align:top;">
            <table border="0" cellspacing="0" cellpadding="0" style="width:100%;margin:0 auto;">
              <tr>
                <td id="top-banner-td" style="vertical-align:top;text-align:center;padding:0 2px;">
					<?php $_from = $this->_var['meat_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');$this->_foreach['meat_banner_db'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['meat_banner_db']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
        $this->_foreach['meat_banner_db']['iteration']++;
?>
					<?php if ($this->_var['item']['position'] == "top"): ?>
					<?php if ($this->_var['item']['url'] != "" && $this->_var['item']['url'] != "http://"): ?>
					<a style="width:100%;" href="<?php echo $this->_var['item']['url']; ?>" target="_blank">
					  <img src="<?php echo $this->_var['item']['src']; ?>" style="width:100%;"/>
					</a>
					<?php else: ?>
					<img src="<?php echo $this->_var['item']['src']; ?>" style="width:100%;"/>
					<?php endif; ?>
					<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
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
        
        <div u="slides"  class="" style="cursor: <?php if ($this->_var['meat_page'] != 1): ?>move<?php endif; ?>; position: absolute; left: 0px; top: 0px; width: 620px;
            height: 260px; overflow: hidden;">
           
               <?php $_from = $this->_var['meatgroup_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'gitem');$this->_foreach['meatgroup_array'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['meatgroup_array']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['gitem']):
        $this->_foreach['meatgroup_array']['iteration']++;
?>
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
                      <?php $_from = $this->_var['gitem']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('topkey', 'topitem');$this->_foreach['meatgroup_item_top'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['meatgroup_item_top']['total'] > 0):
    foreach ($_from AS $this->_var['topkey'] => $this->_var['topitem']):
        $this->_foreach['meatgroup_item_top']['iteration']++;
?>
                             <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;text-align:center;height:90px;vertical-align:top;">
                                              <?php if ($this->_var['topitem']['src'] != ""): ?>
											  <a href="<?php echo $this->_var['topitem']['url']; ?>">
                                              <img class="" src="<?php echo $this->_var['topitem']['src']; ?>" style="width:105px;height:85px;padding:0;">
											  </a>
                                              <?php else: ?>
                                              &nbsp;
                                              <?php endif; ?>
                                            </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											  <a href="<?php echo $this->_var['topitem']['url']; ?>" class="banner_a">
                                              <?php echo $this->_var['topitem']['text']; ?>
											  </a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;"><?php echo $this->_var['topitem']['price']; ?></span>											  
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                              </td>
                            </tr>

                            <tr>
                              <td style="width:100%;">
                      <?php $_from = $this->_var['gitem']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('bottomkey', 'bottomitem');$this->_foreach['meatgroup_item_bottom'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['meatgroup_item_bottom']['total'] > 0):
    foreach ($_from AS $this->_var['bottomkey'] => $this->_var['bottomitem']):
        $this->_foreach['meatgroup_item_bottom']['iteration']++;
?>
                                <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;height:90px;vertical-align:top;">
                                              <?php if ($this->_var['bottomitem']['src'] != ""): ?>
                                              <img class="" src="<?php echo $this->_var['bottomitem']['src']; ?>" style="width:105px;height:85px;padding:0;">
                                              <?php else: ?>
                                              &nbsp;
                                              <?php endif; ?>
                                            </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											<a href="<?php echo $this->_var['bottomitem']['url']; ?>" class="banner_a">
                                              <span style="font-family:arial;font-size:12px;"><?php echo $this->_var['bottomitem']['text']; ?></span>
											</a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;"><?php echo $this->_var['bottomitem']['price']; ?></span>
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
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
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>             
           
        </div>
                
       
        
        <div u="navigator" class="jssorb21" style="position: absolute; bottom: 2px; left: 6px;">
            
            <div u="prototype" style="POSITION: absolute; WIDTH: 19px; HEIGHT: 19px; text-align:center; line-height:19px; color:White; font-size:12px;"></div>
        </div>
        

        
       
        
        <span u="arrowleft" class="jssora21l" style="width: 55px; height: 55px; top: 123px; left: 8px;<?php if ($this->_var['meat_page'] == 1): ?>display:none;<?php endif; ?>">
        </span>
        
        <span u="arrowright" class="jssora21r" style="width: 55px; height: 55px; top: 123px; right: 8px;<?php if ($this->_var['meat_page'] == 1): ?>display:none;<?php endif; ?>">
        </span>
        
  
    </div>
    
    <script>
        if ( <?php echo $this->_var['meat_page']; ?> != 1){jssor_panel_slide_starter('meat_slide_container');}
    </script>
    





                  </div>
                </td>
              </tr>
            </table>
          </td>
          <td id="top-right-img-td" style="width:19%;vertical-align:top;">
            <?php $_from = $this->_var['meat_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');$this->_foreach['meat_banner_db'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['meat_banner_db']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
        $this->_foreach['meat_banner_db']['iteration']++;
?>
			<?php if ($this->_var['item']['position'] == "right"): ?>
			<?php if ($this->_var['item']['url'] != "" && $this->_var['item']['url'] != "http://"): ?>
			<a style="width:100%;" href="<?php echo $this->_var['item']['url']; ?>" target="_blank">
              <img src="<?php echo $this->_var['item']['src']; ?>" style="width:100%;"/>
            </a>
			<?php else: ?>
			<img src="<?php echo $this->_var['item']['src']; ?>" style="width:100%;"/>
			<?php endif; ?>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
          </td>
        </tr>
      </table>
    </td>
  </tr>
 <tr><td class="blank" colspan="3" >&nbsp;</td></tr>
  <tr>
      <td id="bottom-banner-id" colspan="3" style="text-align:center;">
          <div class="bottom-banner">
			<?php $_from = $this->_var['meat_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');$this->_foreach['meat_banner_db'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['meat_banner_db']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
        $this->_foreach['meat_banner_db']['iteration']++;
?>
			<?php if ($this->_var['item']['position'] == "bottom"): ?>
			<?php if ($this->_var['item']['url'] != "" && $this->_var['item']['url'] != "http://"): ?>
			<a style="width:100%;" href="<?php echo $this->_var['item']['url']; ?>" target="_blank">
				<img src="<?php echo $this->_var['item']['src']; ?>" style="width:1000px; height:50px;"/>
			</a>
			<?php else: ?>
			<img src="<?php echo $this->_var['item']['src']; ?>" style="width:1000px; height:50px;"/>
			<?php endif; ?>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
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
			<?php $_from = $this->_var['wok_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');$this->_foreach['wok_banner_db'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['wok_banner_db']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
        $this->_foreach['wok_banner_db']['iteration']++;
?>
			<?php if ($this->_var['item']['position'] == "left"): ?>
			<?php if ($this->_var['item']['url'] != "" && $this->_var['item']['url'] != "http://"): ?>
			<a style="width:100%;" href="<?php echo $this->_var['item']['url']; ?>" target="_blank">
              <img src="<?php echo $this->_var['item']['src']; ?>" style="width:100%;"/>
            </a>
			<?php else: ?>
			<img src="<?php echo $this->_var['item']['src']; ?>" style="width:100%;"/>
			<?php endif; ?>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
          </td>
          <td style="vertical-align:top;">
            <table border="0" cellspacing="0" cellpadding="0" style="width:100%;margin:0 auto;">
              <tr>
                <td id="top-banner-td" style="vertical-align:top;text-align:center;padding:0 2px;">
					<?php $_from = $this->_var['wok_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');$this->_foreach['wok_banner_db'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['wok_banner_db']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
        $this->_foreach['wok_banner_db']['iteration']++;
?>
					<?php if ($this->_var['item']['position'] == "top"): ?>
					<?php if ($this->_var['item']['url'] != "" && $this->_var['item']['url'] != "http://"): ?>
					<a style="width:100%;" href="<?php echo $this->_var['item']['url']; ?>" target="_blank">
					  <img src="<?php echo $this->_var['item']['src']; ?>" style="width:100%;"/>
					</a>
					<?php else: ?>
					<img src="<?php echo $this->_var['item']['src']; ?>" style="width:100%;"/>
					<?php endif; ?>
					<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
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
        
        <div u="slides"  class="" style="cursor: <?php if ($this->_var['wok_page'] != 1): ?>move<?php endif; ?>; position: absolute; left: 0px; top: 0px; width: 620px;
            height: 260px; overflow: hidden;">
           
               <?php $_from = $this->_var['wokgroup_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'gitem');$this->_foreach['wokgroup_array'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['wokgroup_array']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['gitem']):
        $this->_foreach['wokgroup_array']['iteration']++;
?>
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
                      <?php $_from = $this->_var['gitem']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('topkey', 'topitem');$this->_foreach['wokgroup_item_top'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['wokgroup_item_top']['total'] > 0):
    foreach ($_from AS $this->_var['topkey'] => $this->_var['topitem']):
        $this->_foreach['wokgroup_item_top']['iteration']++;
?>
                             <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;text-align:center;height:90px;vertical-align:top;">
                                              <?php if ($this->_var['topitem']['src'] != ""): ?>
											  <a href="<?php echo $this->_var['topitem']['url']; ?>">
                                              <img class="" src="<?php echo $this->_var['topitem']['src']; ?>" style="width:105px;height:85px;padding:0;">
											  </a>
                                              <?php else: ?>
                                              &nbsp;
                                              <?php endif; ?>
                                            </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											  <a href="<?php echo $this->_var['topitem']['url']; ?>" class="banner_a">
                                              <?php echo $this->_var['topitem']['text']; ?>
											  </a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;"><?php echo $this->_var['topitem']['price']; ?></span>											  
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                              </td>
                            </tr>

                            <tr>
                              <td style="width:100%;">
                      <?php $_from = $this->_var['gitem']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('bottomkey', 'bottomitem');$this->_foreach['wokgroup_item_bottom'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['wokgroup_item_bottom']['total'] > 0):
    foreach ($_from AS $this->_var['bottomkey'] => $this->_var['bottomitem']):
        $this->_foreach['wokgroup_item_bottom']['iteration']++;
?>
                                <div style="padding:2px;width:117px;height:126px;float:left;">
                                <div style="width:117px;">
                                  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                          <tr>
                                            <td style="width:100%;height:90px;vertical-align:top;">
                                              <?php if ($this->_var['bottomitem']['src'] != ""): ?>
                                              <img class="" src="<?php echo $this->_var['bottomitem']['src']; ?>" style="width:105px;height:85px;padding:0;">
                                              <?php else: ?>
                                              &nbsp;
                                              <?php endif; ?>
                                            </td>
                                          </tr>     
                                          <tr>
                                            <td style="width:100%;text-align:center;">
											<a href="<?php echo $this->_var['bottomitem']['url']; ?>" class="banner_a">
                                              <span style="font-family:arial;font-size:12px;"><?php echo $this->_var['bottomitem']['text']; ?></span>
											</a>
											  <br/>
                                              <span style="font-family:arial;font-size:12px;"><?php echo $this->_var['bottomitem']['price']; ?></span>
                                            </td>
                                          </tr>                        
                                  </table>
                                </div>
                                </div>
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
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
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>             
           
        </div>
                
       
        
        <div u="navigator" class="jssorb21" style="position: absolute; bottom: 2px; left: 6px;">
            
            <div u="prototype" style="POSITION: absolute; WIDTH: 19px; HEIGHT: 19px; text-align:center; line-height:19px; color:White; font-size:12px;"></div>
        </div>
        

        
       
        
        <span u="arrowleft" class="jssora21l" style="width: 55px; height: 55px; top: 123px; left: 8px;<?php if ($this->_var['wok_page'] == 1): ?>display:none;<?php endif; ?>">
        </span>
        
        <span u="arrowright" class="jssora21r" style="width: 55px; height: 55px; top: 123px; right: 8px;<?php if ($this->_var['wok_page'] == 1): ?>display:none;<?php endif; ?>">
        </span>
        
  
    </div>
    
    <script>
        if ( <?php echo $this->_var['wok_page']; ?> != 1){jssor_panel_slide_starter('wok_slide_container');}
    </script>
    





                  </div>
                </td>
              </tr>
            </table>
          </td>
          <td id="top-right-img-td" style="width:19%;vertical-align:top;">
            <?php $_from = $this->_var['wok_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');$this->_foreach['wok_banner_db'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['wok_banner_db']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
        $this->_foreach['wok_banner_db']['iteration']++;
?>
			<?php if ($this->_var['item']['position'] == "right"): ?>
			<?php if ($this->_var['item']['url'] != "" && $this->_var['item']['url'] != "http://"): ?>
			<a style="width:100%;" href="<?php echo $this->_var['item']['url']; ?>" target="_blank">
              <img src="<?php echo $this->_var['item']['src']; ?>" style="width:100%;"/>
            </a>
			<?php else: ?>
			<img src="<?php echo $this->_var['item']['src']; ?>" style="width:100%;"/>
			<?php endif; ?>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
          </td>
        </tr>
      </table>
    </td>
  </tr>
 <tr><td class="blank" colspan="3" >&nbsp;</td></tr>
  <tr>
      <td id="bottom-banner-id" colspan="3" style="text-align:center;">
          <div class="bottom-banner">
			<?php $_from = $this->_var['wok_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');$this->_foreach['wok_banner_db'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['wok_banner_db']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
        $this->_foreach['wok_banner_db']['iteration']++;
?>
			<?php if ($this->_var['item']['position'] == "bottom"): ?>
			<?php if ($this->_var['item']['url'] != "" && $this->_var['item']['url'] != "http://"): ?>
			<a style="width:100%;" href="<?php echo $this->_var['item']['url']; ?>" target="_blank">
				<img src="<?php echo $this->_var['item']['src']; ?>" style="width:1000px; height:50px;"/>
			</a>
			<?php else: ?>
			<img src="<?php echo $this->_var['item']['src']; ?>" style="width:1000px; height:50px;"/>
			<?php endif; ?>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
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
                        <?php $_from = $this->_var['re_men_shai_dan_banner_db']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
            <div>
			
			<table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
			<tr>
			
			
			
			
			<td style="width:;font-family:Microsoft YaHei;font-size:1.1em;">
			
			
			
              <table style="width:100%">
                <tr>
                  <td style="width:20%;">
                    <a href="<?php echo $this->_var['item']['url']; ?>"><img src="<?php echo $this->_var['item']['src']; ?>" width="50" height="50" style="width:100%;"></a>
                  </td>
                  <td style="vertical-align:top;">
                    <table style="width:100%">
                      <tr>
                        <td>
                          <a href="<?php echo $this->_var['item']['url']; ?>" class="re_men_title"><?php echo $this->_var['item']['title']; ?></a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a href="<?php echo $this->_var['item']['url']; ?>" class="re_men_desc"><?php echo $this->_var['item']['text']; ?></a>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
			  
			  
			  
			  
			  
			  
			  
			  
			  
			      </td>
				  
				  
				  
				  	<td style="width:50%;font-family:Microsoft YaHei;font-size:1.1em;">
			<?php if ($this->_var['re_men_huo_dong_banner_db'][$this->_var['key']]): ?>
			<?php $this->assign('huo_dong',$this->_var['re_men_huo_dong_banner_db'][$this->_var['key']]); ?>
              <table style="width:100%">
                <tr>
                  <td style="width:20%;">
                    <a href="<?php echo $this->_var['huo_dong']['url']; ?>"><img src="<?php echo $this->_var['huo_dong']['src']; ?>" width="50" height="50" style="width:100%;"></a>
                  </td>
                  <td style="vertical-align:top;">
                    <table style="width:100%">
                      <tr>
                        <td>
                          <a href="<?php echo $this->_var['huo_dong']['url']; ?>" class="re_men_title"><?php echo $this->_var['huo_dong']['title']; ?></a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a href="<?php echo $this->_var['huo_dong']['url']; ?>" class="re_men_desc"><?php echo $this->_var['huo_dong']['text']; ?></a>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
			<?php else: ?>
			    <table style="width:100%">
                <tr>
                  <td style="width:20%;">
                   
                  </td>
                  <td style="vertical-align:top;">
                    <table>
                      <tr>
                        <td>
                          
                        </td>
                      </tr>
                      <tr>
                        <td>
                          
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
			<?php endif; ?>
			  
			  
			  
			  
			  
			  
			  
			      </td>
				  
				  
				  
				  
				  
				  
                </tr>
              </table>
			  
			  
            </div>
           <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
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
	<?php $_from = $this->_var['faq_comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
				<tr>
				<td>
				<a href="#" class="marquee_a"><?php echo $this->_var['item']['content']; ?></a>
				</td>
				</tr>
				<tr height="7"><td></td></tr>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
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
<?php echo $this->fetch('library/page_footer.lbi'); ?>


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
