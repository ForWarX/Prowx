<div id="append_parent"></div>
<?php if ($this->_var['user_info']): ?>
<font style="position:relative;">
<?php echo $this->_var['lang']['hello']; ?>，<font class="f4_b"><?php echo $this->_var['user_info']['username']; ?></font>, <?php echo $this->_var['lang']['welcome_return']; ?>！
<a href="user.php"><?php echo $this->_var['lang']['user_center']; ?></a><font style="color:#bebfc1;"> |</font>
<a href="user.php?act=logout"><?php echo $this->_var['lang']['user_logout']; ?></a>
</font>
<?php else: ?>
 <?php echo $this->_var['lang']['welcome']; ?> <a href="user.php" style="color:#868485;">请登录</a>   
                 <font style="color:#bebfc1;">|</font>
                  <a href="user.php?act=register" style="color:#868485;">免费注册</a>    
                
<?php endif; ?>