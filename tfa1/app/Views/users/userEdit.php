<?php
/** @var array $users */
?>

<?= view('partials/header') ?>
<?= view('partials/navbar') ?>

<div class = "main-content">
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <h2 class="page-title mb-4">Edit User</h2>
                    <form
                        action="<?= site_url('users/userUpdate/' . $users['id']) ?>"
                        method="post"
                        enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Username
                            </label>
                            <input
                                type="text"
                                name="username"
                                value="<?= esc($users['username']) ?>"
                                class="form-control"
                                required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Full Name
                            </label>
                            <input
                                type="text"
                                name="full_name"
                                value="<?= esc($users['full_name']) ?>"
                                class="form-control"
                                required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Current Avatar
                            </label>
                            <br>

                            <?php if (!empty($users['avatar'])): ?>
                                <img
                                    src="<?= base_url('uploads/' . $users['avatar']) ?>"
                                    width="80"
                                    height="80"
                                    style="border-radius:50%; object-fit:cover;">
                            <?php else: ?>
                                <img
                                    src="https://via.placeholder.com/60"
                                    width="80"
                                    height="80"
                                    style="border-radius:50%; object-fit:cover;">
                            <?php endif; ?>
                        </div>
                        <div class="mb-4">
                            <label class="form-label fw-bold">
                                Upload New Avatar
                            </label>
                            <input
                                type="file"
                                name="avatar"
                                class="form-control">
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn custom-btn">
                                Update User
                            </button>

                            <a href="<?= site_url('users/userAccounts') ?>" class="btn btn-secondary">
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