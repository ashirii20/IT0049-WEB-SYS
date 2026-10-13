<!-- $user is an Intellisense warning -->
<h2>Edit User</h2>

<form
    action="<?= site_url('users/userUpdate/'.$user['id']) ?>"
    method="post"
    enctype="multipart/form-data">

    <p>Username</p>
    <input
        type="text"
        name="username"
        value="<?= esc($user['username']) ?>"
        required>

    <p>Full Name</p>
    <input
        type="text"
        name="full_name"
        value="<?= esc($user['full_name']) ?>"
        required>

    <p>Avatar</p>
    <input
        type="file"
        name="avatar"
        accept=".jpg,.jpeg,.png">

    <br><br>

    <?php if(!empty($user['avatar'])): ?>
        <img
            src="<?= base_url('uploads/'.$user['avatar']) ?>"
            width="120">
    <?php endif; ?>

    <br><br>

    <button type="submit">
        Update User
    </button>

</form>