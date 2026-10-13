<?= view('partials/header') ?>
<?= view('partials/navbar') ?>

<div class="container mt-5">
    <div class="card p-5 text-center">
        <h1 class="page-title">POS Management System</h1>
        <p>Manage customer and user accounts easily.</p>

        <div class="mt-3">
            <a href="<?= site_url('customers/customerAccounts') ?>"class="btn custom-btn">
                Customer Accounts
            </a>

            <a href="<?= site_url('users/userAccounts') ?>"class="btn custom-btn">
                User Accounts
            </a>
        </div>
    </div>
</div>

<?= view('partials/footer') ?>