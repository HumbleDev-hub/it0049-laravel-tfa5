<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        // Static array containing at least 5 customer sample records
        $customers = [
            ['id' => 1, 'name' => 'Juan Dela Cruz', 'email' => 'juan@example.com', 'phone' => '09123456789'],
            ['id' => 2, 'name' => 'Maria Santos', 'email' => 'maria@example.com', 'phone' => '09187654321'],
            ['id' => 3, 'name' => 'Pedro Reyes', 'email' => 'pedro@example.com', 'phone' => '09112233445'],
            ['id' => 4, 'name' => 'Ana Aquino', 'email' => 'ana@example.com', 'phone' => '09223344556'],
            ['id' => 5, 'name' => 'Jose Rizal', 'email' => 'jose@example.com', 'phone' => '09334455667'],
        ];

        return view('customers', ['customers' => $customers]);
    }
}