<?php $users = $users ?? []; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Database</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
        }

        .database-panel {
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .navbar-brand {
            font-weight: bold;
        }

        tbody tr:hover {
            background-color: #eef4ff;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">POS System</a>

        <div class="navbar-nav ms-auto">
            <a class="nav-link" href="<?= site_url('customers/customerAccounts'); ?>">
                Customers
            </a>

            <a class="nav-link active" href="<?= site_url('users/userAccounts'); ?>">
                Users
            </a>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <!-- RECORD COUNT CARD -->
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card border-success shadow-sm">
                <div class="card-body">
                    <h6 class="text-muted">Total Users</h6>
                    <h2 class="text-success">
                        <?= count($users); ?>
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <!-- DATABASE INFO -->
    <div class="alert alert-success">
        <strong>Database:</strong> customer_db |
        <strong>Table:</strong> users |
        <strong>Rows:</strong> <?= count($users); ?>
    </div>

    <!-- TABLE -->
    <div class="database-panel">

        <div class="bg-success text-white p-3">
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
                    <?php foreach($users as $user): ?>
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
                        <td?><?= esc($user['username']) ?></td>
                        <td><?= esc($user['full_name']) ?></td>
                        <td>
                            <a
                                href="<?= site_url('users/edit/'.$user['id']) ?>"
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