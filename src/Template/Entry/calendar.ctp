<div class="members form large-9 medium-8 columns content">
    <fieldset>
        <legend>予約カレンダー</legend>
        会員名：<?= $user['family_name'];?>様<br>
        <iframe src=<?= $src ?> style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
    </fieldset>
</div>
<div class="reservations index large-9 medium-8">
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col" width="15%"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('schedule_id') ?></th>
                <th scope="col" width="10%"><?= $this->Paginator->sort('staff_id') ?></th>
                <th scope="col" width="10%"><?= $this->Paginator->sort('status') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reservations as $reservation): ?>
            <tr>
                <td><?= $reservation->schedule->date_time ?></td>
                <td><?= $reservation->has('schedule') ? $this->Html->link($reservation->schedule->subject, ['controller' => 'Schedules', 'action' => 'view', $reservation->schedule->id]) : '' ?></td>
                <td><?= $reservation->has('staff') ? $this->Html->link($reservation->staff->username, ['controller' => 'Users', 'action' => 'view', $reservation->staff->id]) : '' ?></td>
                <td><?= h($reservation->status) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>



