<?php
/**
 * Psb Year Batches (psb-year-batch)
 * @var $this BatchController
 * @var $model PsbYearBatch
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2016 Ommu Platform (www.ommu.co)
 * @link https://github.com/ommu/PSB
 *
 */

	$this->breadcrumbs=array(
		'Psb Year Batches'=>array('manage'),
		'Create',
	);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>