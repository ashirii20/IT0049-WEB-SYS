<?= view('partials/header') ?>
<?= view('partials/navbar') ?>

<div class="main-content">
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <h2 class="page-title mb-4">
                            Add User
                        </h2>
                        <form action="<?= site_url('users/userCreate') ?>" method="post">
                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    Username
                                </label>
                                <input
                                    type="text"
                                    name="username"
                                    class="form-control"
                                    required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-bold">
                                    Full Name
                                </label>
                                <input
                                    type="text"
                                    name="full_name"
                                    class="form-control"
                                    required>
                            </div>
                            <div class="d-flex gap-2">
                                <button
                                    type="submit"
                                    class="btn custom-btn">
                                    Save User
                                </button>

                                <a
                                    href="<?= site_url('users/userAccounts') ?>"
                                    class="btn btn-secondary">
                                    Cancel
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= view('partials/footer') ?>