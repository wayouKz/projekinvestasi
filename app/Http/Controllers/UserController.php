<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Barang;

class UserController extends Controller
{
    //
    public function user()
    {
        return view(
            'home',
            [
                'Title' => 'Home',
                'barang' => Barang::all(),

            ]
        );
    }
    public function profile(User $id)
    {
        return view('profile', [
            'Title' => 'Profile',
        ]);
    }
}
