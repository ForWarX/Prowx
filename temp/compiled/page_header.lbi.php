
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>
<div id="body_mask"></div>
<div id="empty_container"></div>
<div class="block clearfix" id="top">
  <div class="log">
    <div class="logbackground">
        <ul>
         <?php if ($this->_var['navigator_list']['top']): ?>
         <li id="topNav" class="clearfix">
                  <?php echo $this->smarty_insert_scripts(array('files'=>'transport_modifyed.js,utils.js')); ?>
                  <font style="color:#868485;"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </font>
                    |
                 
          <?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?>
                  <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a>
                  <?php if (! ($this->_foreach['nav_top_list']['iteration'] == $this->_foreach['nav_top_list']['total'])): ?>
                   |
                  <?php endif; ?>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
         </li>
         <?php endif; ?>
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
  <a href="index.php"<?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> class="cur"<?php endif; ?>>&emsp;<?php echo $this->_var['lang']['home']; ?>&emsp;</a>
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
</div>
