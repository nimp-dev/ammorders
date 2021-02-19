<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
//use yii\helpers\Url;
?>
<div class="container">
    <div style="margin: 100px;">
<p>выбирете дату</p>
<?php $form = ActiveForm::begin()?>
<?= $form->field($time, 'data')->widget(DatePicker::class, [
    'language' => 'ru',
    'dateFormat' => 'dd.MM.yyyy',
    'options' => [
//        'placeholder' => Yii::$app->formatter->asDate($time->data),
        'class'=> 'form-control',
        'autocomplete'=>'off'
    ],
    'clientOptions' => [
        'changeMonth' => true,
        'changeYear' => true,
        'yearRange' => '2015:2050',
        //'showOn' => 'button',
        //'buttonText' => 'Выбрать дату',
        //'buttonImageOnly' => true,
        //'buttonImage' => 'images/calendar.gif'
    ]])->label(false)
?>
<?= Html::submitButton('Сохранить', ['class' => 'btn btn-success'])?>
<?php ActiveForm::end()?>
    </div>
</div>
