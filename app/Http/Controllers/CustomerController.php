<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            ['name' => 'Juan Dela Cruz', 'email' => 'juan@example.com', 'phone' => '09171234567'],
            ['name' => 'Maria Santos', 'email' => 'maria@example.com', 'phone' => '09181234567'],
            ['name' => 'Pedro Reyes', 'email' => 'pedro@example.com', 'phone' => '09191234567'],
            ['name' => 'Ana Garcia', 'email' => 'ana@example.com', 'phone' => '09201234567'],
            ['name' => 'Jose Ramos', 'email' => 'jose@example.com', 'phone' => '09211234567'],
        ];

        return view('customers', compact('customers'));
    }
}