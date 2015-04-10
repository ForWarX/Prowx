<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.js,json2.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'transport_modifyed.js,utils.js')); ?>
<div id="ECS_COMMENT"> <?php 
$k = array (
  'name' => 'comments',
  'type' => $this->_var['type'],
  'id' => $this->_var['id'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
