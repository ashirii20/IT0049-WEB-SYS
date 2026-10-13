<h2>Add Customer</h2>

<form action="<?= site_url('customers/create') ?>" method="post">

    <p>Full Name</p>
    <input type="text" name="full_name" required>

    <p>Email</p>
    <input type="email" name="email" required>

    <br><br>

    <button type="submit">
        Save Customer
    </button>

</form>