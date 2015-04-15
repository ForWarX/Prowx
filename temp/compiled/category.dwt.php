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
<?php if ($this->_var['cat_style']): ?>
<link href="<?php echo $this->_var['cat_style']; ?>" rel="stylesheet" type="text/css" />
<?php endif; ?>

<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.js,json2.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'jssor.js,jssor.slider.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,compare.js,gototop.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="block box">
 <div id="ur_here">
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
 </div>
</div>

<div class="blank"></div>
<div class="block clearfix">
  
  <div class="AreaL">
    



 
<?php echo $this->fetch('library/category_tree.lbi'); ?>
 <?php echo $this->fetch('library/history.lbi'); ?>



    
  </div>
  
  
  <div class="AreaR">
	 
	  <?php if ($this->_var['brands']['1'] || $this->_var['price_grade']['1'] || $this->_var['filter_attr_list']): ?>
	  <div class="box_shadow">
	  
<table border="0" cellspacing="0" cellpadding="0" style="width:100%;padding:5px;">
<tr>
<td>
<div  style="padding:5px;"><span class="h3_title"><?php echo $this->_var['lang']['goods_filter']; ?></span></div>
</td>
</tr>
<tr height="1"><td><table border="0" cellpadding="0" cellspacing="0" style="border-top:1px solid #cecece;height:1px;width: 100%;"><tr><td></td></tr></table></td></tr>
<tr>
<td>
	  
	  
		 <div>
			
			<?php if ($this->_var['brands']['1']): ?>
			<div class="screeBox">
<table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
<tr>
<td width="60" style="vertical-align:top;padding:4px;">
			
			  <font class="_strong"><?php echo $this->_var['lang']['brand']; ?>：</font>
</td>			  
<td style="">		
				<div style="display: block;">
				<?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['brand']):
?>
				<div class="filter_div" style="">
					<?php if ($this->_var['brand']['selected']): ?>
					<font class="filter_selected"><?php echo $this->_var['brand']['brand_name']; ?></font>
					<?php else: ?>
					<a href="<?php echo $this->_var['brand']['url']; ?>" class="filter_a"><?php echo $this->_var['brand']['brand_name']; ?></a>&nbsp;
					<?php endif; ?>
				</div>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</div>
</td>
</tr>
</table>				
			</div>
			<?php endif; ?>
			<?php if ($this->_var['price_grade']['1']): ?>
			<div class="screeBox">
<table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
<tr>
<td width="60" style="vertical-align:top;padding:4px;">			
			
			
			
			
			<font class="_strong"><?php echo $this->_var['lang']['price']; ?>：</font>
			
</td>			  
<td style="">			
			
			
			
			
			<div style="display: block;">
			<?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'grade');if (count($_from)):
    foreach ($_from AS $this->_var['grade']):
?>
			<div class="filter_div" style="">
				<?php if ($this->_var['grade']['selected']): ?>
				<font class="filter_selected"><?php echo $this->_var['grade']['price_range']; ?></font>
				<?php else: ?>
				<a href="<?php echo $this->_var['grade']['url']; ?>" class="filter_a"><?php echo $this->_var['grade']['price_range']; ?></a>&nbsp;
				<?php endif; ?>
			</div>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</div>
			
			
			
			
</td>
</tr>
</table>				
			</div>
			<?php endif; ?>
			<?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr_0_42112100_1429039515');if (count($_from)):
    foreach ($_from AS $this->_var['filter_attr_0_42112100_1429039515']):
?>
      <div class="screeBox">
<table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
<tr>
<td width="60" style="vertical-align:top;padding:4px;">	  
	  
	  
	  
	  
	  
			<font class="_strong"><?php echo htmlspecialchars($this->_var['filter_attr_0_42112100_1429039515']['filter_attr_name']); ?> :</font>
</td>			  
<td style="">			
			
			<div style="display: block;">
			<?php $_from = $this->_var['filter_attr_0_42112100_1429039515']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
			<div class="filter_div" style="">
				<?php if ($this->_var['attr']['selected']): ?>
				<font class="filter_selected"><?php echo $this->_var['attr']['attr_value']; ?></font>
				<?php else: ?>
				<a href="<?php echo $this->_var['attr']['url']; ?>" class="filter_a"><?php echo $this->_var['attr']['attr_value']; ?></a>&nbsp;
				<?php endif; ?>
			</div>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</div>
			
			
			
</td>
</tr>
</table>				
			</div>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		 </div>
		 
		 
		 
		 
		 
		 
</td>
</tr>
</table>		 
		</div>
		<div class="blank5"></div>
	  <?php endif; ?>
	 
   
<?php echo $this->fetch('library/recommend_best.lbi'); ?>
  <?php echo $this->fetch('library/goods_list.lbi'); ?>
  <?php echo $this->fetch('library/pages.lbi'); ?>



  </div>  
  
</div>
<div class="blank5"></div>


<?php if ($this->_var['img_links'] || $this->_var['txt_links']): ?>
<div id="bottomNav" class="box">
 <div class="box_1">
  <div class="links clearfix">
    <?php $_from = $this->_var['img_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
    <a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><img src="<?php echo $this->_var['link']['logo']; ?>" alt="<?php echo $this->_var['link']['name']; ?>" border="0" /></a>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php if ($this->_var['txt_links']): ?>
    <?php $_from = $this->_var['txt_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
    [<a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><?php echo $this->_var['link']['name']; ?></a>] 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php endif; ?>
  </div>
 </div>
</div>
<?php endif; ?>

<div class="blank"></div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
