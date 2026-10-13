<?php
/** @var array $users */
/** @var array $user  */
?>
<?= view('partials/header') ?>
<?= view('partials/navbar') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Database</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>

<div class="container mt-4">
    <!-- RECORD COUNT CARD -->
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card border-success shadow-sm">
                <div class="card-body">
                    <h6 class="text-muted">Total Users</h6>
                    <h2 class="count-number">
                        <?= count($users); ?>
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <!-- DATABASE INFO -->
    <div class="alert alert-info text-muted">
        <strong>Database:</strong> it0049_db |
        <strong>Table:</strong> users |
        <strong>Rows:</strong> <?= count($users); ?>
    </div>

    <!-- TABLE -->
    <div class="database-panel">
        <div class="section-header">
            <h4 class="mb-0">Users Table</h4>
        </div>
        <div class="p-3">
            <table class="table table-bordered table-hover">
                <thead class="table-secondary">
                    <tr>
                        <th>Avatar</th>
                        <th>Username</th>
                        <th>Full Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                    <tr>
                        <td>
                            <?php if(!empty($user['avatar'])): ?>
                                <img
                                    src="<?= base_url('uploads/'.$user['avatar']) ?>"
                                    width="60"
                                    height="60"
                                    style="border-radius:50%; object-fit:cover;">
                             <?php else: ?>
                                <img
                                    src="https://via.placeholder.com/60"
                                    width="60"
                                    height="60"
                                    style="border-radius:50%;">
                            <?php endif; ?>
                        </td>

                        <td><?= $user['username']; ?></td>
                        <td><?= $user['full_name']; ?></td>

                        <td>
                            <a
                                href="<?= site_url('users/userEdit/'.$user['id']) ?>"
                                class="btn btn-warning">
                                Edit
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>

<?= view('partials/footer') ?>