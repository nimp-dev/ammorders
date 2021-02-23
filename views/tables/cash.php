<?php
?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Итоговый</h4>
                        <p class="card-category">расчетный лист</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>
                                    Имя
                                </th>
                                <th>
                                    Фамилия
                                </th>
                                <th>
                                    Часы
                                </th>
                                <th>
                                    Сумма
                                </th>
                                </thead>
                                <tbody>

                                <?php foreach($getTimeList as $TimeList) : ?>
                                    <tr>
                                        <td>
                                            <?=$TimeList['name']?>
                                        </td>
                                        <td>
                                            <?=$TimeList['last_name']?>
                                        </td>
                                        <td>
                                            <?=$TimeList['work_time']?>
                                        </td>
                                        <td class="text-primary">
                                            <?=$TimeList['money']?>
                                        </td>
                                    </tr>
                                <?php endforeach;?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>