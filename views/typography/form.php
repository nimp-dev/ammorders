<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
?>

<div class="content">
    <div class="container-fluid">
        <div class="card ">
            <div class="card-header card-header-primary card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">account_box</i>
                </div>
                <h4 class="card-title">
                    <?=$model->isNewRecord ? \Yii::t('app', 'Создать Ордер') : \Yii::t('app', 'Изменить Ордер')?>
                    <div class="pull-right">
                        <?= Html::a(Html::tag('b', 'keyboard_arrow_left', ['class' => 'material-icons']) , ['index'], [
                            'class' => 'btn btn-xs btn-success btn-round btn-fab',
                            'rel'=>"tooltip",
                            'data' => [
                                'placement' => 'bottom',
                                'original-title' => 'Back'
                            ],
                        ]) ?>
                    </div>
                </h4>
            </div>
            <div class="card-body">
                <?php $form = ActiveForm::begin([
                    'fieldConfig' => [
                        'template' => "{input} {error}",
                    ]
                ]); ?>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group bmd-form-group">
                            <label for="<?=Html::getInputId($model, 'name');?>" class="bmd-label-floating"><?=Html::activeLabel($model,'name');?></label>
                            <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label(false); ?>
                            <span class="bmd-help"><?=Html::activeHint($model,'name');?></span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group bmd-form-group">
                            <label for="<?=Html::getInputId($model, 'last_name');?>" class="bmd-label-floating"><?=Html::activeLabel($model,'last_name');?></label>
                            <?= $form->field($model, 'last_name')->textInput(['maxlength' => true])->label(false); ?>
                            <span class="bmd-help"><?=Html::activeHint($model,'last_name');?></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group bmd-form-group">
                            <label for="<?=Html::getInputId($model, 'start_at');?>" class="bmd-label-floating"><?=Html::activeLabel($model,'start_at');?></label>
                            <?= $form->field($model, 'start_at')->textInput(['maxlength' => true])->label(false); ?>
                            <span class="bmd-help"><?=Html::activeHint($model,'start_at');?></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group bmd-form-group">
                            <label for="<?=Html::getInputId($model, 'end_at');?>" class="bmd-label-floating"><?=Html::activeLabel($model,'end_at');?></label>
                            <?= $form->field($model, 'end_at')->textInput(['maxlength' => true])->label(false); ?>
                            <span class="bmd-help"><?=Html::activeHint($model,'end_at');?></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group bmd-form-group">
                            <label for="<?=Html::getInputId($model, 'status');?>" class="bmd-label-floating"><?=Html::activeLabel($model,'status');?></label>
                            <?= $form->field($model, 'status')->textInput(['maxlength' => true])->label(false); ?>
                            <span class="bmd-help"><?=Html::activeHint($model,'status');?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer ml-auto mr-auto">
                <?= Html::submitButton($model->isNewRecord ? \Yii::t('app', 'Create') : \Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>