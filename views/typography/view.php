<?php
/**
 *
 * @package    Material Dashboard Yii2
 * @author     CodersEden <hello@coderseden.com>
 * @link       https://www.coderseden.com
 * @copyright  2020 Material Dashboard Yii2 (https://www.coderseden.com)
 * @license    MIT - https://www.coderseden.com
 * @since      1.0
 */

use yii\helpers\Html;
use yii\widgets\DetailView;
?>
<div class="content">
    <div class="container-fluid">
        <div class="card ">
            <div class="card-header card-header-primary card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">account_box</i>
                </div>
                <h4 class="card-title">
                    <?=$model->getFullName();?>
                    <div class="pull-right">
                        <?= Html::a(Html::tag('b', 'keyboard_arrow_left', ['class' => 'material-icons']) , ['employess'], [
                            'class' => 'btn btn-xs btn-success btn-round btn-fab',
                            'rel'=>"tooltip",
                            'data' => [
                                'placement' => 'bottom',
                                'original-title' => 'Back'
                            ],
                        ]) ?>
                        <?= Html::a(Html::tag('b', 'create', ['class' => 'material-icons']) , ['updateus', 'id' => $model->id], [
                            'class' => 'btn btn-xs btn-success btn-round btn-fab',
                            'rel'=>"tooltip",
                            'data' => [
                                'placement' => 'bottom',
                                'original-title' => 'Edit User'
                            ],
                        ]) ?>
                        <?= Html::a(Html::tag('b', 'delete', ['class' => 'material-icons']), ['delete', 'id' => $model->id], [
                            'class' => 'btn btn-xs btn-danger btn-round btn-fab',
                            'rel'=>"tooltip",
                            'data' => [
                                'confirm' => \Yii::t('app', 'Are you sure you want to delete this item?'),
                                'method' => 'post',
                                'placement' => 'bottom',
                                'original-title' => 'Delete User'
                            ],
                        ]) ?>
                    </div>
                </h4>
            </div>
            <div class="card-body">
                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'id',
                        'name',
                        'last_name',
                        'start_at',
                        'end_at',
                        [
                            'label' => 'Status',
                            'attribute' => 'status',
                            'value'     => function($model) {
                                return \Yii::t('app',ucfirst(\yii\helpers\Html::encode($model->status)));
                            },
                        ],
                    ],
                ]) ?>
            </div>
        </div>
            <div class="row">
                <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <?= DetailView::widget([
                            'model' => $modelcount,
                            'attributes' => [
                                'id_orders',
                                'price',
                                'prepay',
                                'start_at',
                                'end_at',
                            ],
                        ]) ?>
                    </div>
                </div>
                </div>
                <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <?= DetailView::widget([
                            'model' => $modelcontact,
                            'attributes' => [
                                'id_orders',
                                'phone',
                                'addr',
                                'name',
                                'last_name',
                                'patron_name',
                            ],
                        ]) ?>
                    </div>
                </div>
                </div>

            </div>
</div>
