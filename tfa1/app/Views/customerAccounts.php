<?php $customers = $customers ?? []; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Customer Accounts</title>
</head>
<body>
    <table border="1" cellpadding="5">
        <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>

        <?php foreach ($customers as $customer): ?>
        <tr>
            <td><?= $customer['fullname']; ?></td>
            <td><?= $customer['email']; ?></td>
            <td><?= $customer['phone']; ?></td>
        </tr>
        <?php endforeach; ?>

    </table>
</body>
</html>