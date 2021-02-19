<?php use yii\helpers\Url; ?>
<?php if (!empty($session['Time_list'])) : ?>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Имя</th>
                    <th>Фамилия</th>
                    <th>Время</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($session['Time_list'] as $id => $item) : ?>
                    <tr>
                        <td><?=$item['name']?></td>
                        <td><?=$item['last_name']?></td>
                        <td><input style="padding: 2px" size="3" type="text" value="<?= $item['week_time'] ?>" class="add_time input-duration" name="<?= $id ?>" data-id="<?= $id ?>"> </td>
                        <td><i data-id="<?= $id ?>" class="fa fa-window-close del-item" aria-hidden="true"></i></td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
        <input type="date" id="davaToday"><br>
        <script>
            document.getElementById('davaToday').valueAsDate = new Date();
        </script>
        <button type="button" class="btn btn-danger" onclick="clearCart()">Очистить</button>
        <a href="<?= Url::to(['tables/safe']) ?>" class="btn btn-success">Сохранить</a>
    </div>

<?php else: ?>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Время</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
<?php endif;?>