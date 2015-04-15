<!-- $Id: category_info.htm 16752 2009-10-20 09:59:38Z wangleisvn $ -->
<?php echo $this->fetch('pageheader.htm'); ?>
<!-- start add new category form -->
<div class="main-div">
  <form action="category.php" method="post" name="theForm" enctype="multipart/form-data" onsubmit="return validate()">
  <table width="100%" id="general-table">
      <tr>
        <td class="label"><?php echo $this->_var['lang']['cat_name']; ?>:</td>
        <td>
          <input type='text' name='cat_name' maxlength="20" value='<?php echo htmlspecialchars($this->_var['cat_info']['cat_name']); ?>' size='27' /> <font color="red">*</font>
        </td>
      </tr>
      <tr>
        <td class="label"><?php echo $this->_var['lang']['parent_id']; ?>:</td>
        <td>
          <select name="parent_id">
            <option value="0"><?php echo $this->_var['lang']['cat_top']; ?></option>
            <?php echo $this->_var['cat_select']; ?>
          </select>
        </td>
      </tr>

      <tr id="measure_unit">
        <td class="label"><?php echo $this->_var['lang']['measure_unit']; ?>:</td>
        <td>
          <input type="text" name='measure_unit' value='<?php echo $this->_var['cat_info']['measure_unit']; ?>' size="12" />
        </td>
      </tr>
      <tr>
        <td class="label"><?php echo $this->_var['lang']['sort_order']; ?>:</td>
        <td>
          <input type="text" name='sort_order' <?php if ($this->_var['cat_info']['sort_order']): ?>value='<?php echo $this->_var['cat_info']['sort_order']; ?>'<?php else: ?> value="50"<?php endif; ?> size="15" />
        </td>
      </tr>

	  
	  
	  
	  
      <tr>
            <td class="label">图标</td>
            <td>
              <input type="file" name="cat_icon_img" size="35" />
              <?php if ($this->_var['have_icon']): ?>
                <a href="../data/caticon/<?php echo $this->_var['cat_info']['cat_id']; ?>.png" target="_blank"><img src="images/yes.gif" border="0" /></a>
              <?php else: ?>
                <img src="images/no.gif" />
              <?php endif; ?>
            </td>
         </tr>
		<tr>
        <td class="label">主题色:</td>
        <td><input class="color" name="theme_color" <?php if ($this->_var['cat_info']['theme_color'] != ""): ?> value="<?php echo $this->_var['cat_info']['theme_color']; ?>"<?php endif; ?>/>
        </td>
      </tr>

      <tr>
        <td class="label">设置为首页分类馆</td>
        <td><input type="checkbox" name="show_banner_in_home_page" value="1" <?php if ($this->_var['cat_info']['show_banner_in_home_page'] == 1): ?> checked="true"<?php endif; ?> onClick="showUpload('banner')"/></td>
      </tr>
      <tr id="banner" style="<?php if ($this->_var['cat_info']['show_banner_in_home_page'] != 1): ?>display:none;<?php endif; ?>">
      	<td class="label"></td>
      	<td>
		
		
		<table border="0" cellspacing="0" cellpadding="0" width="100%" id="gallery_table" class="gallery_table" align="center" style="background-color:#4FB75E;">
          <!-- 鍥剧墖鍒楄〃 -->

		
		
		
		
		
		
<tr height="7"><td></td></tr>		
		
		
		
		 <tr>
		 <td>
      	<table width="50%" id="gallery_table_top" class="gallery_table" align="center" style="">
          <!-- 鍥剧墖鍒楄〃 -->
		  <tr><td><font class="category_banner_catption">顶部</font></td></tr>
          <tr>
            <td>
              <?php $_from = $this->_var['img_list_top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('i', 'img');if (count($_from)):
    foreach ($_from AS $this->_var['i'] => $this->_var['img']):
?>
              <div id="gallery_<?php echo $this->_var['img']['id']; ?>" style="float:left; text-align:center; border: 1px solid #DADADA; margin: 4px; padding:2px;">
				<table border="0" cellspacing="3" cellpadding="3" style="width:100%;">
				<tr>
				<td>
                <a href="javascript:;" onclick="if (confirm('确定删除？')) dropImg('<?php echo $this->_var['img']['id']; ?>',0)">[-]</a><br />
				</td>
				</tr>
				<tr>
				<td>
                <a href="goods.php?act=show_image&img_url=<?php echo $this->_var['img']['url']; ?>" target="_blank">
                <img src="../<?php echo $this->_var['img']['src']; ?>" width="100" height="" border="0" />
                </a>
				</td>
				</tr>
				<tr height="10"><td></td></tr>
				<tr>
				<td  style="text-align:left;">
                描述： <input type="text" value="<?php echo htmlspecialchars($this->_var['img']['desc']); ?>" size="15" name="old_img_desc_top[<?php echo $this->_var['img']['id']; ?>]" />
				</td>
				</tr>
                <tr>
				<td style="text-align:left;">
                链接： <input type="text" value="<?php echo htmlspecialchars($this->_var['img']['url']); ?>" size="15" name="old_img_url_top[<?php echo $this->_var['img']['id']; ?>]" />
				</td>
				</tr>
				<tr>
				<td style="text-align:left;">
                顺序： <input type="text" value="<?php echo htmlspecialchars($this->_var['img']['order']); ?>" size="3" name="old_img_order_top[<?php echo $this->_var['img']['id']; ?>]" />
				</td>
				</tr>
				<tr>
				<td  style="text-align:left;">
				<input type="checkbox" name="old_img_show_top[<?php echo $this->_var['img']['id']; ?>]" value="1" <?php if ($this->_var['img']['show'] == 1): ?>checked<?php endif; ?>> Show
				<input type="hidden" value="<?php echo htmlspecialchars($this->_var['img']['id']); ?>" name="old_img_id_top[<?php echo $this->_var['img']['id']; ?>]" />				
				</td>
				</tr>
				</table>
              </div>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </td>
          </tr>
          <!-- 涓婁紶鍥剧墖 -->
          <tr>
            <td>
			
			<table id="adding_image_table_top" border="0" cellspacing="10" cellpadding="0" style="width:100%;">
			<tr>
			<td style="width:10px;">
			
			</td>
			<td>
              banner描述
			</td>
			<td>
              banner上传
			</td>
			<td>
              banner链接
			</td>
			<td>
             顺序
			</td>
			<td>
             Show
			</td>
			</tr>	
			
			<tr height="1"><td colspan="7"><table border="0" cellpadding="0" cellspacing="0" style="border-top:1px dotted #bbbbbb;height:1px;width: 100%;"><tr><td></td></tr></table></td></tr>


			
			<tr>
			<td style="width:10px;">
			<a href="javascript:;" onclick="addImg(this, 'adding_image_table_top')">[+]</a>
			</td>
			<td>
              <input type="text" name="img_desc_top[]" size="20" />
			</td>
			<td>
              <input type="file" name="img_file_top[]" />
			</td>
			<td>
              <input type="text" size="40" value="<?php echo $this->_var['lang']['img_file']; ?>" style="color:#aaa;" onfocus="if (this.value == '<?php echo $this->_var['lang']['img_file']; ?>'){this.value='http://';this.style.color='#000';}" name="img_url_top[]"/>
			</td>
			<td>
              <input type="text" size="3" name="img_order_top[]" value="0"/>
			  <input type="hidden" name="img_position_top[]" value="top"/>
			</td>
			<td>
			<input type="checkbox" checked value="1" name="" onclick="if(this.checked){this.nextSibling.value = 1;}else{this.nextSibling.value = 0;}"/><input type="hidden" value="1" name="img_show_top[]"/>
			</td>
			</tr>		
			</table>
			
            </td>
          </tr>
        </table>
		</td>
		</tr>		
		
		
		
		
		
<tr height="7"><td></td></tr>		
		
		
		
		
		 <tr>
		 <td>
      	<table width="50%" id="gallery_table_right" class="gallery_table" align="center" style="">
          <!-- 鍥剧墖鍒楄〃 -->
          <tr><td><font class="category_banner_catption">右侧</font></td></tr>		  
          <tr>
            <td>
              <?php $_from = $this->_var['img_list_right']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('i', 'img');if (count($_from)):
    foreach ($_from AS $this->_var['i'] => $this->_var['img']):
?>
              <div id="gallery_<?php echo $this->_var['img']['id']; ?>" style="float:left; text-align:center; border: 1px solid #DADADA; margin: 4px; padding:2px;">
				<table border="0" cellspacing="3" cellpadding="3" style="width:100%;">
				<tr>
				<td>
                <a href="javascript:;" onclick="if (confirm('确定删除？')) dropImg('<?php echo $this->_var['img']['id']; ?>',0)">[-]</a><br />
				</td>
				</tr>
				<tr>
				<td>
                <a href="goods.php?act=show_image&img_url=<?php echo $this->_var['img']['url']; ?>" target="_blank">
                <img src="../<?php echo $this->_var['img']['src']; ?>" width="100" border="0" />
                </a>
				</td>
				</tr>
				<tr height="10"><td></td></tr>
				<tr>
				<td  style="text-align:left;">
                描述： <input type="text" value="<?php echo htmlspecialchars($this->_var['img']['desc']); ?>" size="15" name="old_img_desc_right[<?php echo $this->_var['img']['id']; ?>]" />
				</td>
				</tr>
                <tr>
				<td style="text-align:left;">
                链接： <input type="text" value="<?php echo htmlspecialchars($this->_var['img']['url']); ?>" size="15" name="old_img_url_right[<?php echo $this->_var['img']['id']; ?>]" />
				</td>
				</tr>
				<tr>
				<td style="text-align:left;">
                顺序： <input type="text" value="<?php echo htmlspecialchars($this->_var['img']['order']); ?>" size="3" name="old_img_order_right[<?php echo $this->_var['img']['id']; ?>]" />
				</td>
				</tr>
				<tr>
				<td  style="text-align:left;">
				<input type="checkbox" name="old_img_show_right[<?php echo $this->_var['img']['id']; ?>]" value="1" <?php if ($this->_var['img']['show'] == 1): ?>checked<?php endif; ?>> Show
				<input type="hidden" value="<?php echo htmlspecialchars($this->_var['img']['id']); ?>" name="old_img_id_right[<?php echo $this->_var['img']['id']; ?>]" />				
				</td>
				</tr>
				</table>
              </div>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </td>
          </tr>
          <!-- 涓婁紶鍥剧墖 -->
          <tr>
            <td>
			
			<table id="adding_image_table_right" border="0" cellspacing="10" cellpadding="0" style="width:100%;">
			<tr>
			<td style="width:10px;">
			
			</td>
			<td>
              banner描述
			</td>
			<td>
              banner上传
			</td>
			<td>
              banner链接
			</td>
			<td>
             顺序
			</td>
			<td>
             Show
			</td>
			</tr>	
			
			<tr height="1"><td colspan="7"><table border="0" cellpadding="0" cellspacing="0" style="border-top:1px dotted #bbbbbb;height:1px;width: 100%;"><tr><td></td></tr></table></td></tr>


			
			<tr>
			<td style="width:10px;">
			<a href="javascript:;" onclick="addImg(this, 'adding_image_table_right')">[+]</a>
			</td>
			<td>
              <input type="text" name="img_desc_right[]" size="20" />
			</td>
			<td>
              <input type="file" name="img_file_right[]" />
			</td>
			<td>
              <input type="text" size="40" value="<?php echo $this->_var['lang']['img_file']; ?>" style="color:#aaa;" onfocus="if (this.value == '<?php echo $this->_var['lang']['img_file']; ?>'){this.value='http://';this.style.color='#000';}" name="img_url_right[]"/>
			</td>
			<td>
              <input type="text" size="3" name="img_order_right[]" value="0"/>
			  <input type="hidden" name="img_position_right[]" value="right"/>
			</td>
			<td>
			<input type="checkbox" checked value="1" name="" onclick="if(this.checked){this.nextSibling.value = 1;}else{this.nextSibling.value = 0;}"/><input type="hidden" value="1" name="img_show_right[]"/>
			</td>			
			</tr>		
			</table>
			
            </td>
          </tr>
        </table>
		</td>
		</tr>
		
		
<tr height="7"><td></td></tr>		
		
		
		 <tr>
		 <td>
      	<table width="50%" id="gallery_table_left" class="gallery_table" align="center" style="">
          <!-- 鍥剧墖鍒楄〃 -->
          <tr><td><font class="category_banner_catption">左侧</font></td></tr>		  
          <tr>
            <td>
              <?php $_from = $this->_var['img_list_left']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('i', 'img');if (count($_from)):
    foreach ($_from AS $this->_var['i'] => $this->_var['img']):
?>
              <div id="gallery_<?php echo $this->_var['img']['id']; ?>" style="float:left; text-align:center; border: 1px solid #DADADA; margin: 4px; padding:2px;">
				<table border="0" cellspacing="3" cellpadding="3" style="width:100%;">
				<tr>
				<td>
                <a href="javascript:;" onclick="if (confirm('确定删除？')) dropImg('<?php echo $this->_var['img']['id']; ?>',0)">[-]</a><br />
				</td>
				</tr>
				<tr>
				<td>
                <a href="goods.php?act=show_image&img_url=<?php echo $this->_var['img']['url']; ?>" target="_blank">
                <img src="../<?php echo $this->_var['img']['src']; ?>" width="100" border="0" />
                </a>
				</td>
				</tr>
				<tr height="10"><td></td></tr>
				<tr>
				<td  style="text-align:left;">
                描述： <input type="text" value="<?php echo htmlspecialchars($this->_var['img']['desc']); ?>" size="15" name="old_img_desc_left[<?php echo $this->_var['img']['id']; ?>]" />
				</td>
				</tr>
                <tr>
				<td style="text-align:left;">
                链接： <input type="text" value="<?php echo htmlspecialchars($this->_var['img']['url']); ?>" size="15" name="old_img_url_left[<?php echo $this->_var['img']['id']; ?>]" />
				</td>
				</tr>
				<tr>
				<td style="text-align:left;">
                顺序： <input type="text" value="<?php echo htmlspecialchars($this->_var['img']['order']); ?>" size="3" name="old_img_order_left[<?php echo $this->_var['img']['id']; ?>]" />
				</td>
				</tr>
				<tr>
				<td  style="text-align:left;">
				<input type="checkbox" name="old_img_show_left[<?php echo $this->_var['img']['id']; ?>]" value="1" <?php if ($this->_var['img']['show'] == 1): ?>checked<?php endif; ?>> Show
				<input type="hidden" value="<?php echo htmlspecialchars($this->_var['img']['id']); ?>" name="old_img_id_left[<?php echo $this->_var['img']['id']; ?>]" />
				</td>
				</tr>
				</table>
              </div>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </td>
          </tr>
          <!-- 涓婁紶鍥剧墖 -->
          <tr>
            <td>
			
			<table id="adding_image_table_left" border="0" cellspacing="10" cellpadding="0" style="width:100%;">
			<tr>
			<td style="width:10px;">
			
			</td>
			<td>
              banner描述
			</td>
			<td>
              banner上传
			</td>
			<td>
              banner链接
			</td>
			<td>
             顺序
			</td>
			<td>
             Show
			</td>
			</tr>	
			
			<tr height="1"><td colspan="7"><table border="0" cellpadding="0" cellspacing="0" style="border-top:1px dotted #bbbbbb;height:1px;width: 100%;"><tr><td></td></tr></table></td></tr>


			
			<tr>
			<td style="width:10px;">
			<a href="javascript:;" onclick="addImg(this, 'adding_image_table_left')">[+]</a>
			</td>
			<td>
              <input type="text" name="img_desc_left[]" size="20" />
			</td>
			<td>
              <input type="file" name="img_file_left[]" />
			</td>
			<td>
              <input type="text" size="40" value="<?php echo $this->_var['lang']['img_file']; ?>" style="color:#aaa;" onfocus="if (this.value == '<?php echo $this->_var['lang']['img_file']; ?>'){this.value='http://';this.style.color='#000';}" name="img_url_left[]"/>
			</td>
			<td>
              <input type="text" size="3" name="img_order_left[]" value="0"/>
			  <input type="hidden" name="img_position_left[]" value="left"/>
			</td>
			<td>
			<input type="checkbox" checked value="1" name="" onclick="if(this.checked){this.nextSibling.value = 1;}else{this.nextSibling.value = 0;}"/><input type="hidden" value="1" name="img_show_left[]"/>
			</td>
			</tr>		
			</table>
			
            </td>
          </tr>
        </table>
		</td>
		</tr>
		
		
		
		
		
<tr height="7"><td></td></tr>		
		
		
		
		 <tr>
		 <td>
      	<table width="50%" id="gallery_table_bottom" class="gallery_table" align="center" style="">
          <!-- 鍥剧墖鍒楄〃 -->
          <tr><td><font class="category_banner_catption">底部</font></td></tr>		  
          <tr>
            <td>
              <?php $_from = $this->_var['img_list_bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('i', 'img');if (count($_from)):
    foreach ($_from AS $this->_var['i'] => $this->_var['img']):
?>
              <div id="gallery_<?php echo $this->_var['img']['id']; ?>" style="float:left; text-align:center; border: 1px solid #DADADA; margin: 4px; padding:2px;">
				<table border="0" cellspacing="3" cellpadding="3" style="width:100%;">
				<tr>
				<td>
                <a href="javascript:;" onclick="if (confirm('确定删除？')) dropImg('<?php echo $this->_var['img']['id']; ?>',0)">[-]</a><br />
				</td>
				</tr>
				<tr>
				<td>
                <a href="goods.php?act=show_image&img_url=<?php echo $this->_var['img']['url']; ?>" target="_blank">
                <img src="../<?php echo $this->_var['img']['src']; ?>" width="100" border="0" />
                </a>
				</td>
				</tr>
				<tr height="10"><td></td></tr>
				<tr>
				<td  style="text-align:left;">
                描述： <input type="text" value="<?php echo htmlspecialchars($this->_var['img']['desc']); ?>" size="15" name="old_img_desc_bottom[<?php echo $this->_var['img']['id']; ?>]" />
				</td>
				</tr>
                <tr>
				<td style="text-align:left;">
                链接： <input type="text" value="<?php echo htmlspecialchars($this->_var['img']['url']); ?>" size="15" name="old_img_url_bottom[<?php echo $this->_var['img']['id']; ?>]" />
				</td>
				</tr>
				<tr>
				<td style="text-align:left;">
                顺序： <input type="text" value="<?php echo htmlspecialchars($this->_var['img']['order']); ?>" size="3" name="old_img_order_bottom[<?php echo $this->_var['img']['id']; ?>]" />
				</td>
				<tr>
				<td  style="text-align:left;">
				<input type="checkbox" name="old_img_show_bottom[<?php echo $this->_var['img']['id']; ?>]" value="1" <?php if ($this->_var['img']['show'] == 1): ?>checked<?php endif; ?>> Show
				<input type="hidden" value="<?php echo htmlspecialchars($this->_var['img']['id']); ?>" name="old_img_id_bottom[<?php echo $this->_var['img']['id']; ?>]" />
				</td>
				</tr>
				</table>
              </div>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </td>
          </tr>
          <!-- 涓婁紶鍥剧墖 -->
          <tr>
            <td>
			
			<table id="adding_image_table_bottom" border="0" cellspacing="10" cellpadding="0" style="width:100%;">
			<tr>
			<td style="width:10px;">
			
			</td>
			<td>
              banner描述
			</td>
			<td>
              banner上传
			</td>
			<td>
              banner链接
			</td>
			<td>
             顺序
			</td>
			<td>
             Show
			</td>
			</tr>	
			
			<tr height="1"><td colspan="7"><table border="0" cellpadding="0" cellspacing="0" style="border-top:1px dotted #bbbbbb;height:1px;width: 100%;"><tr><td></td></tr></table></td></tr>


			
			<tr>
			<td style="width:10px;">
			<a href="javascript:;" onclick="addImg(this, 'adding_image_table_bottom')">[+]</a>
			</td>
			<td>
              <input type="text" name="img_desc_bottom[]" size="20" />
			</td>
			<td>
              <input type="file" name="img_file_bottom[]" />
			</td>
			<td>
              <input type="text" size="40" value="<?php echo $this->_var['lang']['img_file']; ?>" style="color:#aaa;" onfocus="if (this.value == '<?php echo $this->_var['lang']['img_file']; ?>'){this.value='http://';this.style.color='#000';}" name="img_url_bottom[]"/>
			</td>
			<td>
              <input type="text" size="3" name="img_order_bottom[]" value="0"/>
			  <input type="hidden" name="img_position_bottom[]" value="bottom"/>
			</td>
			<td>
			<input type="checkbox" checked value="1" name="" onclick="if(this.checked){this.nextSibling.value = 1;}else{this.nextSibling.value = 0;}"/><input type="hidden" value="1" name="img_show_bottom[]"/>
			</td>
			</tr>		
			</table>
			
            </td>
          </tr>
        </table>
		</td>
		</tr>
		
		
		
		
		
<tr height="7"><td></td></tr>		
		
		
		
		
		
		
		
		
		
		

        </table>
      	</td>
      </tr>
      <!--分类页显示的BANNER START-->
      <tr>
        <td class="label">设置分类页Banner</td>
        <td><input type="checkbox" name="show_banner_in_category_page" value="1" <?php if ($this->_var['cat_info']['show_banner_in_category_page'] == 1): ?> checked="true"<?php endif; ?> onClick="showUpload('pagebanner')" /></td>
      </tr>
      <tr id="pagebanner" style="<?php if ($this->_var['cat_info']['show_banner_in_category_page'] != 1): ?>display:none;<?php endif; ?>">
      	<td class="label"></td>
      	<td>
      	<table border="0" cellspacing="0" cellpadding="0" width="100%" id="gallery_table2" class="gallery_table" align="center" style="background-color:#4F80B7;">
		
		<tr height="7"><td></td></tr>		
          <tr>
            <td>		
      	<table border="0" cellspacing="0" cellpadding="0" width="100%" id="gallery_table2_top" class="gallery_table" align="center" style="">		
          <!-- 鍥剧墖鍒楄〃 -->
          <tr>
            <td>
              <?php $_from = $this->_var['img_list2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('i', 'img');if (count($_from)):
    foreach ($_from AS $this->_var['i'] => $this->_var['img']):
?>
              <div id="gallery_page_<?php echo $this->_var['img']['id']; ?>" style="float:left; text-align:center; border: 1px solid #DADADA; margin: 4px; padding:2px;">
				<table border="0" cellspacing="3" cellpadding="3" style="width:100%;">
				<tr>
				<td>
                <a href="javascript:;" onclick="if (confirm('确定删除？')) dropImg('<?php echo $this->_var['img']['id']; ?>',1)">[-]</a><br />
				</td>
				</tr>
				<tr>
				<td>
                <a href="goods.php?act=show_image&img_url=<?php echo $this->_var['img']['url']; ?>" target="_blank">
                <img src="../<?php echo $this->_var['img']['src']; ?>" width="100" border="0" />
                </a>
				</td>
				</tr>
				<tr height="10"><td></td></tr>
				<tr>
				<td  style="text-align:left;">
                描述： <input type="text" value="<?php echo htmlspecialchars($this->_var['img']['desc']); ?>" size="15" name="old_img_desc2[<?php echo $this->_var['img']['id']; ?>]" />
				</td>
				</tr>
                <tr>
				<td style="text-align:left;">
                链接： <input type="text" value="<?php echo htmlspecialchars($this->_var['img']['url']); ?>" size="15" name="old_img_url2[<?php echo $this->_var['img']['id']; ?>]" />
				</td>
				</tr>
				<tr>
				<td style="text-align:left;">
                顺序： <input type="text" value="<?php echo htmlspecialchars($this->_var['img']['order']); ?>" size="3" name="old_img_order2[<?php echo $this->_var['img']['id']; ?>]" />
				</td>
				</tr>
				<tr>
				<td  style="text-align:left;">
				<input type="checkbox" name="old_img_show2[<?php echo $this->_var['img']['id']; ?>]" value="1" <?php if ($this->_var['img']['show'] == 1): ?>checked<?php endif; ?>> Show
				<input type="hidden" value="<?php echo htmlspecialchars($this->_var['img']['id']); ?>" name="old_img_id2[<?php echo $this->_var['img']['id']; ?>]" />
				</td>
				</tr>
				</table>
              </div>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </td>
          </tr>
          <!-- 涓婁紶鍥剧墖 -->
          <tr>
            <td>
			
			<table id="adding_image_table2" border="0" cellspacing="10" cellpadding="0" style="width:100%;">
			<tr>
			<td style="width:10px;">
			
			</td>
			<td>
              banner描述
			</td>
			<td>
              banner上传
			</td>
			<td>
              banner链接
			</td>
			<td>
             顺序
			</td>
			<td>
             Show
			</td>
			</tr>	
			
			<tr height="1"><td colspan="7"><table border="0" cellpadding="0" cellspacing="0" style="border-top:1px dotted #bbbbbb;height:1px;width: 100%;"><tr><td></td></tr></table></td></tr>


			
			<tr>
			<td style="width:10px;">
			<a href="javascript:;" onclick="addImg(this, 'adding_image_table2')">[+]</a>
			</td>
			<td>
              <input type="text" name="img_desc2[]" size="20" />
			</td>
			<td>
              <input type="file" name="img_file2[]" />
			</td>
			<td>
              <input type="text" size="40" value="<?php echo $this->_var['lang']['img_file']; ?>" style="color:#aaa;" onfocus="if (this.value == '<?php echo $this->_var['lang']['img_file']; ?>'){this.value='http://';this.style.color='#000';}" name="img_url2[]"/>
			</td>
			<td>
              <input type="text" size="3" name="img_order2[]" value="0"/>
			  <input type="hidden" name="img_position2[]" value="none"/>
			</td>
			<td>
			<input type="checkbox" checked value="1" name="" onclick="if(this.checked){this.nextSibling.value = 1;}else{this.nextSibling.value = 0;}"/><input type="hidden" value="1" name="img_show2[]"/>
			</td>
			</tr>		
			</table>
			
            </td>
          </tr>
		  
	  
		  
		  
             </table>		  
            </td>
          </tr>



<tr height="7"><td></td></tr>				  
        </table>
      	</td>
      </tr>
      <!--分类页显示的BANNER END-->

	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
      <tr>
        <td class="label"><?php echo $this->_var['lang']['is_show']; ?>:</td>
        <td>
          <input type="radio" name="is_show" value="1" <?php if ($this->_var['cat_info']['is_show'] != 0): ?> checked="true"<?php endif; ?>/> <?php echo $this->_var['lang']['yes']; ?>
          <input type="radio" name="is_show" value="0" <?php if ($this->_var['cat_info']['is_show'] == 0): ?> checked="true"<?php endif; ?> /> <?php echo $this->_var['lang']['no']; ?>
        </td>
      </tr>
      <tr>
        <td class="label"><?php echo $this->_var['lang']['show_in_nav']; ?>:</td>
        <td>
          <input type="radio" name="show_in_nav" value="1" <?php if ($this->_var['cat_info']['show_in_nav'] != 0): ?> checked="true"<?php endif; ?>/> <?php echo $this->_var['lang']['yes']; ?>
          <input type="radio" name="show_in_nav" value="0" <?php if ($this->_var['cat_info']['show_in_nav'] == 0): ?> checked="true"<?php endif; ?> /> <?php echo $this->_var['lang']['no']; ?>
        </td>
      </tr>
      <tr>
        <td class="label"><?php echo $this->_var['lang']['show_in_index']; ?>:</td>
        <td>
          <input type="checkbox" name="cat_recommend[]" value="1" <?php if ($this->_var['cat_recommend'] [ 1 ] == 1): ?> checked="true"<?php endif; ?>/> <?php echo $this->_var['lang']['index_best']; ?>
          <input type="checkbox" name="cat_recommend[]" value="2" <?php if ($this->_var['cat_recommend'] [ 2 ] == 1): ?> checked="true"<?php endif; ?> /> <?php echo $this->_var['lang']['index_new']; ?>
          <input type="checkbox" name="cat_recommend[]" value="3" <?php if ($this->_var['cat_recommend'] [ 3 ] == 1): ?> checked="true"<?php endif; ?> /> <?php echo $this->_var['lang']['index_hot']; ?>
        </td>
      </tr>
      <tr>
        <td class="label"><a href="javascript:showNotice('noticeFilterAttr');" title="<?php echo $this->_var['lang']['form_notice']; ?>"><img src="images/notice.gif" width="16" height="16" border="0" alt="<?php echo $this->_var['lang']['notice_style']; ?>"></a><?php echo $this->_var['lang']['filter_attr']; ?>:</td>
        <td>
          <script type="text/javascript">
          var arr = new Array();
          var sel_filter_attr = "<?php echo $this->_var['lang']['sel_filter_attr']; ?>";
          <?php $_from = $this->_var['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('att_cat_id', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['att_cat_id'] => $this->_var['val']):
?>
            arr[<?php echo $this->_var['att_cat_id']; ?>] = new Array();
            <?php $_from = $this->_var['val']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('i', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['i'] => $this->_var['item']):
?>
              <?php $_from = $this->_var['item']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('attr_id', 'attr_val');if (count($_from)):
    foreach ($_from AS $this->_var['attr_id'] => $this->_var['attr_val']):
?>
                arr[<?php echo $this->_var['att_cat_id']; ?>][<?php echo $this->_var['i']; ?>] = ["<?php echo $this->_var['attr_val']; ?>", <?php echo $this->_var['attr_id']; ?>];
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

          function changeCat(obj)
          {
            var key = obj.value;
            var sel = window.ActiveXObject ? obj.parentNode.childNodes[4] : obj.parentNode.childNodes[5];
            sel.length = 0;
            sel.options[0] = new Option(sel_filter_attr, 0);
            if (arr[key] == undefined)
            {
              return;
            }
            for (var i= 0; i < arr[key].length ;i++ )
            {
              sel.options[i+1] = new Option(arr[key][i][0], arr[key][i][1]);
            }

          }

          </script>

         
          <table width="100%" id="tbody-attr" align="center">
            <?php if ($this->_var['attr_cat_id'] == 0): ?>
            <tr>
              <td>   
                   <a href="javascript:;" onclick="addFilterAttr(this)">[+]</a> 
                   <select onChange="changeCat(this)"><option value="0"><?php echo $this->_var['lang']['sel_goods_type']; ?></option><?php echo $this->_var['goods_type_list']; ?></select>&nbsp;&nbsp;
                   <select name="filter_attr[]"><option value="0"><?php echo $this->_var['lang']['sel_filter_attr']; ?></option></select><br />                   
              </td>
            </tr> 
            <?php endif; ?>           
            <?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr');$this->_foreach['filter_attr_tab'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['filter_attr_tab']['total'] > 0):
    foreach ($_from AS $this->_var['filter_attr']):
        $this->_foreach['filter_attr_tab']['iteration']++;
?>
            <tr>
              <td>
                 <?php if ($this->_foreach['filter_attr_tab']['iteration'] == 1): ?>
                   <a href="javascript:;" onclick="addFilterAttr(this)">[+]</a>
                 <?php else: ?>
                   <a href="javascript:;" onclick="removeFilterAttr(this)">[-]&nbsp;</a>
                 <?php endif; ?>
                 <select onChange="changeCat(this)"><option value="0"><?php echo $this->_var['lang']['sel_goods_type']; ?></option><?php echo $this->_var['filter_attr']['goods_type_list']; ?></select>&nbsp;&nbsp;
                 <select name="filter_attr[]"><option value="0"><?php echo $this->_var['lang']['sel_filter_attr']; ?></option><?php echo $this->html_options(array('options'=>$this->_var['filter_attr']['option'],'selected'=>$this->_var['filter_attr']['filter_attr'])); ?></select><br />
              </td>
            </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </table>

          <span class="notice-span" <?php if ($this->_var['help_open']): ?>style="display:block" <?php else: ?> style="display:none" <?php endif; ?> id="noticeFilterAttr"><?php echo $this->_var['lang']['filter_attr_notic']; ?></span>
        </td>
      </tr>
      <tr>
        <td class="label"><a href="javascript:showNotice('noticeGrade');" title="<?php echo $this->_var['lang']['form_notice']; ?>"><img src="images/notice.gif" width="16" height="16" border="0" alt="<?php echo $this->_var['lang']['notice_style']; ?>"></a><?php echo $this->_var['lang']['grade']; ?>:</td>
        <td>
          <input type="text" name="grade" value="<?php echo empty($this->_var['cat_info']['grade']) ? '0' : $this->_var['cat_info']['grade']; ?>" size="40" /> <br />
          <span class="notice-span" <?php if ($this->_var['help_open']): ?>style="display:block" <?php else: ?> style="display:none" <?php endif; ?> id="noticeGrade"><?php echo $this->_var['lang']['notice_grade']; ?></span>
        </td>
      </tr>
      <tr>
        <td class="label"><a href="javascript:showNotice('noticeGoodsSN');" title="<?php echo $this->_var['lang']['form_notice']; ?>"><img src="images/notice.gif" width="16" height="16" border="0" alt="<?php echo $this->_var['lang']['notice_style']; ?>"></a><?php echo $this->_var['lang']['cat_style']; ?>:</td>
        <td>
          <input type="text" name="style" value="<?php echo htmlspecialchars($this->_var['cat_info']['style']); ?>" size="40" /> <br />
          <span class="notice-span" <?php if ($this->_var['help_open']): ?>style="display:block" <?php else: ?> style="display:none" <?php endif; ?> id="noticeGoodsSN"><?php echo $this->_var['lang']['notice_style']; ?></span>
        </td>
      </tr>
      <tr>
        <td class="label"><?php echo $this->_var['lang']['keywords']; ?>:</td>
        <td><input type="text" name="keywords" value='<?php echo $this->_var['cat_info']['keywords']; ?>' size="50">
        </td>
      </tr>

      <tr>
        <td class="label"><?php echo $this->_var['lang']['cat_desc']; ?>:</td>
        <td>
          <textarea name='cat_desc' rows="6" cols="48"><?php echo $this->_var['cat_info']['cat_desc']; ?></textarea>
        </td>
      </tr>
      </table>
      <div class="button-div">
        <input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" />
        <input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" />
      </div>
    <input type="hidden" name="act" value="<?php echo $this->_var['form_act']; ?>" />
    <input type="hidden" name="old_cat_name" value="<?php echo $this->_var['cat_info']['cat_name']; ?>" />
    <input type="hidden" name="cat_id" value="<?php echo $this->_var['cat_info']['cat_id']; ?>" />
  </form>
</div>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,validator.js,jscolor/jscolor.js')); ?>

<script language="JavaScript">
<!--
document.forms['theForm'].elements['cat_name'].focus();
/**
 * 检查表单输入的数据
 */
function validate()
{
  validator = new Validator("theForm");
  validator.required("cat_name",      catname_empty);
  if (parseInt(document.forms['theForm'].elements['grade'].value) >10 || parseInt(document.forms['theForm'].elements['grade'].value) < 0)
  {
    validator.addErrorMsg('<?php echo $this->_var['lang']['grade_error']; ?>');
  }
  return validator.passed();
}
onload = function()
{
  // 开始检查订单
  startCheckOrder();
}

/**
 * 新增一个筛选属性
 */
function addFilterAttr(obj)
{
  var src = obj.parentNode.parentNode;
  var tbl = document.getElementById('tbody-attr');

  var validator  = new Validator('theForm');
  var filterAttr = document.getElementsByName("filter_attr[]");

  if (filterAttr[filterAttr.length-1].selectedIndex == 0)
  {
    validator.addErrorMsg(filter_attr_not_selected);
  }
  
  for (i = 0; i < filterAttr.length; i++)
  {
    for (j = i + 1; j <filterAttr.length; j++)
    {
      if (filterAttr.item(i).value == filterAttr.item(j).value)
      {
        validator.addErrorMsg(filter_attr_not_repeated);
      } 
    } 
  }

  if (!validator.passed())
  {
    return false;
  }

  var row  = tbl.insertRow(tbl.rows.length);
  var cell = row.insertCell(-1);
  cell.innerHTML = src.cells[0].innerHTML.replace(/(.*)(addFilterAttr)(.*)(\[)(\+)/i, "$1removeFilterAttr$3$4-");
  filterAttr[filterAttr.length-1].selectedIndex = 0;
}

/**
 * 删除一个筛选属性
 */
function removeFilterAttr(obj)
{
  var row = rowindex(obj.parentNode.parentNode);
  var tbl = document.getElementById('tbody-attr');

  tbl.deleteRow(row);
}
//-->


function showUpload (box) {
        
	if (document.getElementById(box).style.display == 'none'){document.getElementById(box).style.display = 'table-row';}
	else{
	document.getElementById(box).style.display = 'none';
	}

}


/**
* 添加上传图片的row
*/
function addImg(obj,table_id)
{
  var src  = obj.parentNode.parentNode;
  var idx  = rowindex(src);

  var tbl  = document.getElementById(table_id);

  var row  = tbl.insertRow(idx - 3);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
  var cell5 = row.insertCell(4);
  var cell6 = row.insertCell(5);
  cell1.innerHTML = src.cells[0].innerHTML.replace(/(.*)(addImg)(.*)(\[)(\+)/i, "$1removeImg$3$4-");
  cell2.innerHTML = src.cells[1].innerHTML.replace(/(.*)(addImg)(.*)(\[)(\+)/i, "$1removeImg$3$4-");
  cell3.innerHTML = src.cells[2].innerHTML.replace(/(.*)(addImg)(.*)(\[)(\+)/i, "$1removeImg$3$4-");
  cell4.innerHTML = src.cells[3].innerHTML.replace(/(.*)(addImg)(.*)(\[)(\+)/i, "$1removeImg$3$4-");
  cell5.innerHTML = src.cells[4].innerHTML.replace(/(.*)(addImg)(.*)(\[)(\+)/i, "$1removeImg$3$4-");
  	  //checkbox and hidden//
	  cell6.innerHTML = src.cells[5].innerHTML;
	  cell6.innerHTML = cell6.innerHTML.replace("<input type=\"hidden\" value=\"0\"", "<input type=\"hidden\" value=\"1\"");
	  cell6.innerHTML = cell6.innerHTML;
}

/**
* 鍒犻櫎鍥剧墖涓婁紶
*/
function removeImg(obj,table_id)
{
  var row = rowindex(obj.parentNode.parentNode);

  var tbl = document.getElementById(table_id);

  tbl.deleteRow(row);
}

/**
* 鍒犻櫎鍥剧墖
*/
function dropImg(imgId,type)
{
	var cat_id = document.forms['theForm'].elements['cat_id'].value;
	Ajax.call('category.php?act=drop_image', "img_id="+imgId+"&cat_id="+cat_id+"&type="+type, dropImgResponse, "GET", "JSON");
}

function dropImgResponse(result)
{
  if (result.error == 0)
  {
	var id = '';
	if (result.content.type == 0){id = 'gallery_';}
	else if (result.content.type == 1){id = 'gallery_page_';}
	  document.getElementById(id + result.content.id).style.display = 'none';
  }
}

</script>

<?php echo $this->fetch('pagefooter.htm'); ?>