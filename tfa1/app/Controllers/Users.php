<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data['users'] = [
            ['username' => 'admin','fullname' => 'Jane Goodman','role' => 'Admin'],
            ['username' => 'staff1','fullname' => 'Paul Walker','role' => 'Cashier'],
            ['username' => 'staff2','fullname' => 'Robert Cruz','role' => 'Cashier'],
            ['username' => 'user1','fullname' => 'Sean Lim','role' => 'User'],
            ['username' => 'user2','fullname' => 'Lisa Gomez','role' => 'User']
        ];

        return view('userAccounts', $data);
    }
}