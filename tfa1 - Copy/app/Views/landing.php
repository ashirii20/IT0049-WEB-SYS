<?php
/** @var array $tasks */
?>

<?= view('header') ?>

<div class="container">

    <div class="card">

        <h1 class="page-title">
            Today's Tasks
        </h1>

        <table>

            <tr>
                <th>Title</th>
                <th>Status</th>
                <th>Date</th>
            </tr>

            <?php foreach($tasks as $task): ?>

            <tr>

                <td><?= esc($task['title']) ?></td>

                <td>

                    <?php if($task['status']=='completed'): ?>
                    <span class="badge-completed">
                        Completed
                    </span>
                    <?php else: ?>
                    <span class="badge-pending">
                        Pending
                    </span>
                    <?php endif; ?>

                </td>

                <td><?= esc($task['task_date']) ?></td>

            </tr>

            <?php endforeach; ?>

        </table>

    </div>

</div>

<?= view('footer') ?>