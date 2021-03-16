<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
?>
<div class="content">
    <div class="container-fluid">
<div class="row">
    	<?php foreach ($workers as $worker) :?>
    		<?= $worker->name?> <br>
    	<?php endforeach ;?>
</div>

<div class="row">
	 <?php $form = ActiveForm::begin();?>
	 <?php foreach ($timesheet as $index => $heet) :?>
	 <?= $form->field($heet, "[$index]full_name")->textInput(['maxlength' => true])->label(false); ?>
	 <?php endforeach ;?>
	     <div class="form-group">
        <?= Html::submitButton('сохранить', ['class' => 'btn btn-primary']) ?>
    </div>
	 <?php ActiveForm::end(); ?>
</div>
	</div>
</div>