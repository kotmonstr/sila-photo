<?php

$Array=array();
$i=0;

foreach($data as $row){
    $i++;
    $Array[$i]=$row->news_name;
}
$data2=$Array;





$model=new News;
?>
<center>
<div class="form">
<?php echo CHtml::beginForm(); ?>
 
<?php echo CHtml::errorSummary($model); ?>
 
<div class="row">
<?php echo CHtml::activeLabel($model,'Name'); ?>
<?php echo CHtml::activeTextField($model,'news_name'); ?>
<?php echo CHtml::error($model,'news_name'); ?>
</div>
 
<div class="row">
<?php echo CHtml::activeLabel($model,'Content'); ?>
<?php echo CHtml::activeTextField($model,'news_content'); ?>
</div>
<div class="row">
<?php //echo CHtml::activeLabel($model,'Dropdown'); ?>
<?php //echo CHtml::activeDropDownList($model,'news_content',array($data2)); ?>
</div>
 

 
<div class="row submit">
<?php echo CHtml::submitButton('Send',array('color'=>TbHtml::BUTTON_COLOR_PRIMARY)); ?>
</div>
 
<?php echo CHtml::endForm(); ?>
</div><!-- form -->
</center>



