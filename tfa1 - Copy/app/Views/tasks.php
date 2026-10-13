<?php
/** @var array $tasks */
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>
</head>
<body>

<h1>Task List</h1>

<a href="<?= site_url('/') ?>">Home</a> |
<a href="<?= site_url('tasks') ?>">Task List</a> |
<a href="<?= site_url('profile') ?>">Profile</a> |
<a href="<?= site_url('about') ?>">About</a>

<hr>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Status</th>
        <th>Date</th>
    </tr>

    <?php foreach($tasks as $task): ?>
    <tr>
        <td><?= $task['id'] ?></td>
        <td><?= esc($task['title']) ?></td>
        <td><?= esc($task['status']) ?></td>
        <td><?= esc($task['task_date']) ?></td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>