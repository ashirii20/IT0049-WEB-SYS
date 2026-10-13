<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'username' => 'required|is_unique[users.username]',
        'full_name' => 'required',
        'created_at'
    ];
}