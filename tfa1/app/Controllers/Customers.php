<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers =
        [
            ['fullname' => 'Jane Doe','email' => 'jane@email.com','phone' => '09123456789'],
            ['fullname' => 'John Doe','email' => 'john@email.com','phone' => '09123456789'],
            ['fullname' => 'Ashley Solis','email' => 'ashley@email.com','phone' => '09123456789'],
            ['fullname' => 'Shayne Agatha','email' => 'shayne@email.com','phone' => '09123456789'],
            ['fullname' => 'Hachiware','email' => 'hachi@email.com','phone' => '09123456789']
        ];

        return view('customerAccounts', ['customers' => $customers]);
    }
}