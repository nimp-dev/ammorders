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
                <div class="card-body">
<!--                    --><?php //debug($model->name); ?>

                        <?=$model->id?><br>
                        <?=$model->name?><br>
                        <?=$model->last_name?><br>
                        <?=$model->start_at?><br>
                        <?=$model->end_at?><br>
                        <?=$model->status?><br>
                </div>
            </div>

        <div class="card">
            <div class="card-body">
                        <?=$orders->id?><br>
                        <?=$orders->id_orders?><br>
                        <?=$orders->price?><br>
                        <?=$orders->prepay?><br>
                        <?=$orders->start_at?><br>
                        <?=$orders->end_at?><br>
            </div>
        </div>

    </div>
</div>
