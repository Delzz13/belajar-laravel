<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // memanggil semua data yang ada di tabel
        $users = User::all();

        return view('welcome', compact('users'));
    }
    public function show($id)
    {
        $user = User::findorFail($id);

        return view('user-detail', compact('user'));
    }

}
