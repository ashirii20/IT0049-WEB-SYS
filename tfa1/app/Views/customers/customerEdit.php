<?php
/** @var array $customer */
?>
<?= view('partials/header') ?>
<?= view('partials/navbar') ?>

<div class="main-content">
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <h2 class="page-title mb-4">
                            Edit Customer
                        </h2>
                        <form action="<?= site_url('customers/customerUpdate/'.$customer['id']) ?>" method="post">         
                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    Full Name
                                </label>

                                <input
                                    type="text"
                                    name="full_name"
                                    value="<?= esc($customer['full_name']) ?>"
                                    class="form-control"
                                    required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-bold">
                                    Email
                                </label>

                                <input
                                    type="email"
                                    name="email"
                                    value="<?= esc($customer['email']) ?>"
                                    class="form-control"
                                    required>
                            </div>
                            <button type="submit" class="btn custom-btn">
                                Update Customer
                            </button>
                            <a href="<?= site_url('customers/customerAccounts') ?>"
                                    class="btn btn-secondary">
                                    Cancel
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= view('partials/footer') ?>