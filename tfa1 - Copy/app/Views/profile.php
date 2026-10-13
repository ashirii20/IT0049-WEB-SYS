<?php
/** @var array $user */
?>

<?= view('header') ?>

<div class="container">

    <div class="card profile-card">

        <div class="profile-avatar">
            <?= strtoupper(substr($user['full_name'],0,1)) ?>
        </div>

        <h2><?= esc($user['full_name']) ?></h2>

        <br>

        <p>
            <strong>Username:</strong>
            <?= esc($user['username']) ?>
        </p>

        <p>
            <strong>Email:</strong>
            <?= esc($user['email']) ?>
        </p>

    </div>

</div>

<?= view('footer') ?>