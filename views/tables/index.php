<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
use common\models\HistoryBalance;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
?>
<script src="https://unpkg.com/vue"></script>
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Simple Table</h4>
              <p class="card-category"> Here is a subtitle for this table</p>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      ID
                    </th>
                    <th>
                      Имя
                    </th>
                    <th>
                      Фамилия
                    </th>
                    <th>
                      Телефон
                    </th>
                    <th>
                      Сумма
                    </th>
                  </thead>
                  <tbody>
                    
                      <?php foreach($workList as $wlist) : ?>
                    <tr>  
                      <td>
                        <?=$wlist['id']?>
                      </td>
                      <td>
                       <?=$wlist['name']?>
                      </td>
                      <td>
                        <?=$wlist['last_name']?>
                      </td>
                      <td>
                        <?=$wlist['phone']?>
                      </td>
                      <td class="text-primary">
                        <?=$wlist['week_time']?>
                      </td>
                    </tr>
                      <?php endforeach;?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="card card-plain">
            <div class="card-header card-header-primary">
                <ul class="nav nav-tabs" data-tabs="tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="#story" data-toggle="tab">исторя</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#createstory" data-toggle="tab">сегодня</a>
                    </li>
                </ul>
<!--              <h4 class="card-title mt-0"> Table on Plain Background</h4>-->
<!--              <p class="card-category"> Here is a subtitle for this table</p>-->
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active show" id="story">
                            <!-- <div class="table-responsive">
                              <table class="table table-hover table-striped"> -->
                                  <!-- <thead>
                                      <tr>
                                          <th>data</th>
                                          <th>Имя</th>
                                          <th>Фамилия</th>
                                          <th>Время</th>
                                          <th></th>
                                      </tr>
                                  </thead> -->
                                     <?php echo GridView::widget([
                                            'dataProvider' => $dataProvider,
                                            'columns' => [
                                                'data',
                                                'name',
                                                'last_name',
                                                'day_time',
                                                // ['class' => 'yii\grid\ActionColumn'],
                                            ]
                                        ]); ?>
                                <!--   <tbody> -->

                                    
                                  <!-- </tbody> -->
                              <!-- </table> -->
                            <!-- </div> -->
                    </div>
                    
                    <div class="tab-pane" id="createstory">
                            <!-- Button trigger modal -->
                                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                    Создать дневной лист
                                  </button>

                                  <!-- Modal -->
                                  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <?php foreach($workList as $wlist) : ?>
                                            <button class="add-to-cart btn btn-success" href="<?= Url::to(['tables/update','id'=>$wlist['id'] ]) ?>" data-id="<?= $wlist['id'] ?>">
                                              <?=$wlist['name']?> <?=$wlist['last_name']?></button>
                                          <?php endforeach;?> 
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-primary close">ok</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            <!-- Button trigger modal -->
                        <div id="contenent">

                        </div>
                    </div>
                </div>
            </div>
          </div>


        </div>
      </div>
    </div>
</div>