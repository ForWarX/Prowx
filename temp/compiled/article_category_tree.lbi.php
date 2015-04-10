<?php if ($this->_var['article_categories']): ?>
<div class="">
 <div class="box_shadow" id="left_nav">
  <div class="boxCenterList RelaArticle">
  
  

	<table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
		<tr>
		
  
  
  <td>
  
  
  
  
  
  <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
		<tr>
		<td style="width:100%;">
		<table border="0" cellspacing="0" cellpadding="0" style="height:5px;width:100%;"><tr><td></td></tr></table>
    <?php $_from = $this->_var['article_categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
	<table class="left_nav_table" border="0" cellspacing="0" cellpadding="0" style="width:100%;">
		<tr>
		<td style="width:100%;">
	<?php if ($this->_var['cat']['hightlight'] == "1"): ?>
	<a href="<?php echo $this->_var['cat']['url']; ?>" style="font-weight:700;background-color:#4fb75e;color:#fff;padding:1px 2px;"><?php echo htmlspecialchars($this->_var['cat']['cat_name']); ?></a><br />
	<?php else: ?>
    <a href="<?php echo $this->_var['cat']['url']; ?>" style="font-weight:700;color: #4fb75e;padding:1px 2px;"><?php echo htmlspecialchars($this->_var['cat']['cat_name']); ?></a><br />
	<?php endif; ?>
	</td>
	</tr>
	<tr height="1"><td><table border="0" cellpadding="0" cellspacing="0" style="border-top:1px solid #e0e0e0;height:1px;width: 100%;"><tr><td></td></tr></table></td></tr>
	
	
	<tr>
	<td style="width:;">
	<table border="0" cellspacing="0" cellpadding="0" style="padding:4px;">
		<tr>
		<td style="width:10px;">
		</td>
		<td>
      <?php $_from = $this->_var['cat']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
	  <?php if ($this->_var['child']['hightlight'] == "1"): ?>
	  <a href="<?php echo $this->_var['child']['url']; ?>" style=" color: #4fb75e;font-weight:500;border:1px solid #4fb75e;"><?php echo htmlspecialchars($this->_var['child']['title']); ?></a><br />
	  <?php else: ?>
      <a href="<?php echo $this->_var['child']['url']; ?>" style=""><?php echo htmlspecialchars($this->_var['child']['title']); ?></a><br />
	  <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	  </td>
	
	<td style="width:10px;">
	</td>
		</tr>
	</table>
	
	
	
	
	</td>
	</tr>
	</table>
	  
	  
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</td>
	</tr>
	</table>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	</td>
	
	
	
		</tr>
	</table>
	
  </div>
 </div>
</div>
<div class="blank5"></div>
<?php endif; ?>