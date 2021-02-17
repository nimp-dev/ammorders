<?php if (!empty($session['Time_list'])) : ?>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Имя</th>
                    <th>Фамилия</th>
                    <th>Часы работы</th>
                    <th><button type="button" class="btn btn-danger" onclick="clearCart()">Очистить</button></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($session['Time_list'] as $id => $item) : ?>
                    <tr>
                        <td><?=$item['name']?></td>
                        <td><?=$item['last_name']?></td>
                        <td><input type="text" class="add_time" data-id="<?= $id ?>"> </td>
                        <td><i data-id="<?= $id ?>" class="fa fa-window-close del-item" aria-hidden="true"></i></td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>

<?php else: ?>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Часы работы</th>
                <th><button type="button" class="btn btn-danger" onclick="clearCart()">Очистить</button></th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
<?php endif;?>