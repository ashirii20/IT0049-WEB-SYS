<?php
/** @var array $customers */
?>
<?= view('partials/header') ?>
<?= view('partials/navbar') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Database</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>

<div class="container mt-4">
    <!-- RECORD COUNT CARD -->
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card border-primary shadow-sm">
                <div class="card-body">
                    <h6 class="text-muted">Total Customers</h6>
                    <h2 class="count-number">
                        <?= count($customers); ?>
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <!-- DATABASE INFO -->
    <div class="alert alert-info text-muted">
        <strong>Database:</strong> it0049_db |
        <strong>Table:</strong> customers |
        <strong>Rows:</strong> <?= count($customers); ?>
    </div>

    <!-- TABLE -->
    <div class="database-panel">
        <div class="section-header">
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

<?= view('partials/footer') ?>