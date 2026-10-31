<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Static array containing at least 5 user sample records
        $users = [
            ['id' => 1, 'username' => 'admin_user', 'role' => 'Administrator', 'status' => 'Active'],
            ['id' => 2, 'username' => 'cashier_one', 'role' => 'Cashier', 'status' => 'Active'],
            ['id' => 3, 'username' => 'manager_test', 'role' => 'Manager', 'status' => 'Inactive'],
            ['id' => 4, 'username' => 'staff_member', 'role' => 'Staff', 'status' => 'Active'],
            ['id' => 5, 'username' => 'auditor_user', 'role' => 'Auditor', 'status' => 'Active'],
        ];

        return view('users', ['users' => $users]);
    }
}