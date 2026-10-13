<!-- $customer is an Intellisense warning -->

<h2>Edit Customer</h2>

<form action="<?= site_url('customers/customerUpdate/' .$customer['id']) ?>" method="post">

    <p>Full Name</p>
    <input
        type="text"
        name="full_name"
        value="<?= esc($customer['full_name']) ?>"
        required>

    <p>Email</p>
    <input
        type="email"
        name="email"
        value="<?= esc($customer['email']) ?>"
        required>

    <br><br>

    <button type="submit">
        Update Customer
    </button>

</form>