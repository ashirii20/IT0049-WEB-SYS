<h2>Add User</h2>

<form action="<?= site_url('users/create') ?>" method="post">

    <p>Username</p>
    <input type="text" name="username" required>

    <p>Full Name</p>
    <input type="text" name="full_name" required>

    <br><br>

    <button type="submit">
        Save User
    </button>

</form>