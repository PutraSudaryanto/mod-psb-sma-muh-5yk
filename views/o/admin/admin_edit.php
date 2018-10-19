<?php
/**
 * Psb Registers (psb-registers)
 * @var $this AdminController
 * @var $model PsbRegisters
 * @var $form CActiveForm
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2016 Ommu Platform (www.ommu.co)
 * @created date 28 April 2016, 10:52 WIB
 * @link https://github.com/ommu/PSB
 *
 */

	$this->breadcrumbs=array(
		'Psb Registers'=>array('manage'),
		$model->register_id=>array('view','id'=>$model->register_id),
		Yii::t('phrase', 'Update'),
	);
?>

<div class="form">
	<?php echo $this->renderPartial('_form', array(
		'setting'=>$setting,
		'model'=>$model,
		'batch'=>$batch,
		'school'=>$school,
		'author'=>$author,
	)); ?>
</div>
