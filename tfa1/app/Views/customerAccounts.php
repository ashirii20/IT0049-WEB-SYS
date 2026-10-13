<?php $customers = $customers ?? []; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Database</title>

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
            <a class="nav-link active" href="<?= site_url('customers'); ?>">
                Customers
            </a>

            <a class="nav-link" href="<?= site_url('users'); ?>">
                Users
            </a>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <!-- RECORD COUNT CARD -->
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card border-primary shadow-sm">
                <div class="card-body">
                    <h6 class="text-muted">Total Customers</h6>
                    <h2 class="text-primary">
                        <?= count($customers); ?>
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <!-- DATABASE INFO -->
    <div class="alert alert-info">
        <strong>Database:</strong> customer_db |
        <strong>Table:</strong> customers |
        <strong>Rows:</strong> <?= count($customers); ?>
    </div>

    <!-- TABLE -->
    <div class="database-panel">
        <div class="bg-primary text-white p-3">
            <h4 class="mb-0">Customers Table</h4>
        </div>

        <div class="p-3">
            <table class="table table-bordered table-hover">
                <thead class="table-secondary">
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Created At</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($customers as $customer): ?>
                    <tr>
                        <td><?= $customer['id']; ?></td>
                        <td><?= $customer['full_name']; ?></td>
                        <td><?= $customer['email']; ?></td>
                        <td><?= $customer['phone']; ?></td>
                        <td><?= $customer['created_at']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>