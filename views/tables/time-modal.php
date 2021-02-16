<?php if (!empty($session['Time_list'])) : ?>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>week_time</th>
                    <th>name</th>
                    <th>last_name</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($session['Time_list'] as $id => $item) : ?>
                    <tr>
                        <td><?=$item['id']?></td>
                        <td><?=$item['week_time']?></td>
                        <td><?=$item['name']?></td>
                        <td><?=$item['last_name']?></td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>

<?php else: ?>
    <h4>путсо</h4>
<?php endif;?>