
<div id="bottomNav" class="">
 <div class="">
  <div class="bNavList clearfix">
   <table border="0" cellspacing="0" cellpadding="0" style="width:98%;margin:0 auto;">
   <tr>
   <td>
   <?php if ($this->_var['navigator_list']['bottom']): ?>
   <?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav_0_86311200_1429025065');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav_0_86311200_1429025065']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?>
   <div style="float:left;padding:0px 20px;width:154px;">
    <table class="footer_table" border="0" cellspacing="0" cellpadding="0">
		<tr>
		<td>
		<?php if (isset ( $this->_var['nav_0_86311200_1429025065']['bg_img_src'] )): ?>
        <div class="help_nav" style="width:40px;height:40px;background:url(themes/test1/images/<?php echo $this->_var['nav_0_86311200_1429025065']['bg_img_src']; ?>) no-repeat center; "></div>
		<?php endif; ?>
		</td>
		<td>
        <a style="font-size:1.2em;" href="<?php echo $this->_var['nav_0_86311200_1429025065']['url']; ?>" <?php if ($this->_var['nav_0_86311200_1429025065']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav_0_86311200_1429025065']['name']; ?></a>
		</td>
		</tr>
		<tr height="8"><td colspan="2"></td></tr>
		<?php $_from = $this->_var['nav_0_86311200_1429025065']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?>
		<tr>
		<td style=""><div class="css-shapes-preview"></div>
		</td>
		<td>
        <a style="font-size:0.9em;" href="<?php echo $this->_var['child']['url']; ?>" <?php if ($this->_var['nav_0_86311200_1429025065']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['child']['title']; ?></a>
		</td>
		</tr>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</table>
	</div>
        <?php if (! ($this->_foreach['nav_bottom_list']['iteration'] == $this->_foreach['nav_bottom_list']['total'])): ?>
           
        <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  <?php endif; ?>
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
		<?php $_from = $this->_var['lang']['p_y']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pv');if (count($_from)):
    foreach ($_from AS $this->_var['pv']):
?><?php echo $this->_var['pv']; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?><br />
</td>
		</tr>
	</table>
  

 </div>
</div>

