<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
?>
<div class="content">
    <div class="container-fluid">
		<div class="row">
		    		 <!-- <?= $workers[0]['name'] ?> -->
		</div>

		<div class="row">
			<div class="col-12">
			 <?php $form = ActiveForm::begin();?>
				 <table border="1" cellpadding="0">
				 	<tr>
				 		<th>
				 		ФИО
				 		</th>
			 		</tr>
				 <?php foreach ($timesheet as $index => $heet) :?>
				 	<div class="row">
				 		 <tr>
						 <td><?= $form->field($heet, "[$index]full_name")->textInput(['readonly' => true, 'value' => $workers[$index]['name']])->label(false); ?></div></td>
						 <?php for($i=1;$i<=30; $i++) :?>
						 <td><?= $form->field($heet, "[$index]"."day".$i)->textInput(['maxlength' => true])->label(false); ?></td>
						<?php endfor ;?>
						</tr>
				 	</div>
				 
				 <?php endforeach ;?>
				 </table>
				     <div class="form-group">
			        <?= Html::submitButton('сохранить', ['class' => 'btn btn-primary']) ?>
			    	 </div>
			 <?php ActiveForm::end(); ?>
			</div>
		</div>
	</div>
</div>