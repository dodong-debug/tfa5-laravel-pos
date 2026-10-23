<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['name' => 'Admin User', 'username' => 'admin', 'role' => 'Administrator'],
            ['name' => 'Juan Dela Cruz', 'username' => 'juan', 'role' => 'Staff'],
            ['name' => 'Maria Santos', 'username' => 'maria', 'role' => 'Staff'],
            ['name' => 'Pedro Reyes', 'username' => 'pedro', 'role' => 'Cashier'],
            ['name' => 'Ana Garcia', 'username' => 'ana', 'role' => 'Cashier'],
        ];

        return view('users', compact('users'));
    }
}