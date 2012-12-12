<?php
/* @var $this MessageController */

$this->breadcrumbs=array(
	'Message'=>array('/message'),
	'HelloWorld',
);
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>
<h1> Hello World </h1>
<h3><?php echo date("D M j G:i:s T Y"); ?></h3>
<h3><?php echo $time; ?></h3>

<p><?php echo CHtml::link("Goodbye",array('message/goodbye')); ?></p>

<p>
	You may change the content of this page by modifying
	the file <tt><?php echo __FILE__; ?></tt>.
</p>
