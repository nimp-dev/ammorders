<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
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
                      Name
                    </th>
                    <th>
                      Country
                    </th>
                    <th>
                      City
                    </th>
                    <th>
                      Salary
                    </th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        1
                      </td>
                      <td>
                        Dakota Rice
                      </td>
                      <td>
                        Niger
                      </td>
                      <td>
                        Oud-Turnhout
                      </td>
                      <td class="text-primary">
                        $36,738
                      </td>
                    </tr>
                    <tr>
                      <td>
                        2
                      </td>
                      <td>
                        Minerva Hooper
                      </td>
                      <td>
                        Curaçao
                      </td>
                      <td>
                        Sinaai-Waas
                      </td>
                      <td class="text-primary">
                        $23,789
                      </td>
                    </tr>
                    <tr>
                      <td>
                        3
                      </td>
                      <td>
                        Sage Rodriguez
                      </td>
                      <td>
                        Netherlands
                      </td>
                      <td>
                        Baileux
                      </td>
                      <td class="text-primary">
                        $56,142
                      </td>
                    </tr>
                    <tr>
                      <td>
                        4
                      </td>
                      <td>
                        Philip Chaney
                      </td>
                      <td>
                        Korea, South
                      </td>
                      <td>
                        Overland Park
                      </td>
                      <td class="text-primary">
                        $38,735
                      </td>
                    </tr>
                    <tr>
                      <td>
                        5
                      </td>
                      <td>
                        Doris Greene
                      </td>
                      <td>
                        Malawi
                      </td>
                      <td>
                        Feldkirchen in Kärnten
                      </td>
                      <td class="text-primary">
                        $63,542
                      </td>
                    </tr>
                    <tr>
                      <td>
                        6
                      </td>
                      <td>
                        Mason Porter
                      </td>
                      <td>
                        Chile
                      </td>
                      <td>
                        Gloucester
                      </td>
                      <td class="text-primary">
                        $78,615
                      </td>
                    </tr>
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
                        <p>thi is story</p>
                    </div>

                    <div class="tab-pane" id="createstory">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="">
                                <th>
                                    Accept
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    last name
                                </th>
                                <th>
                                    Time
                                </th>
                                </thead>
                                <tbody>
                                <?php foreach ($workList as $key=> $wlist) :?>
                                    <tr>
                                        <td>
                                            <div><a class="add-to-cart" href="<?= Url::to(['tables/update','id'=>$wlist['id'] ]) ?>" data-id="<?= $wlist['id'] ?>" >

                                                    <input type="checkbox" />

                                                </a></div>

                                        </td>
                                        <td>
                                            <?= $wlist['name'] ?>
                                        </td>
                                        <td>
                                            <?= $wlist['last_name'] ?>
                                        </td>
                                        <td>
                                            <input type="text" value="8" id="time"/>

                                        </td>
                                    </tr>
                                <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>