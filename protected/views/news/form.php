<?php
/* @var $this NewsController */

$this->breadcrumbs=array(
	'Form',
);

$model=new News;
?>

<div class="form">
<?php echo CHtml::beginForm(); ?>
 
<?php echo CHtml::errorSummary($model); ?>
 
<div class="row">
<?php echo CHtml::activeLabel($model,'Name'); ?>
<?php echo CHtml::activeTextField($model,'news_name'); ?>
</div>
 
<div class="row">
<?php echo CHtml::activeLabel($model,'Content'); ?>
<?php echo CHtml::activeTextField($model,'news_content'); ?>
</div>
<div class="row">
<?php echo CHtml::activeLabel($model,'Dropdown'); ?>
<?php echo CHtml::activeDropDownList($model,'news_content',array('1'=>'one','2'=>'two')); ?>
</div>
 

 
<div class="row submit">
<?php echo CHtml::submitButton('Войти'); ?>
</div>
 
<?php echo CHtml::endForm(); ?>
</div><!-- form -->



<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<p>
	You may change the content of this page by modifying
	the file <tt><?php echo __FILE__; ?></tt>.
</p>
