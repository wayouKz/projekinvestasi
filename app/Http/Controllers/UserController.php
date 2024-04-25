<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Barang;

class UserController extends Controller
{
    //
    public function user()
    {
        return view('home', [
            'Title' => 'Home',
            'barang' => Barang::all(),
        ]);
    }
    public function admin()
    {
        return view('admin', [
            'Title' => 'admin',
        ]);
    }
    public function profile(User $id)
    {
        return view('profile', [
            'Title' => 'Profile',
        ]);
    }
    public function referral()
    {
        return $this->belongsTo(User::class, 'id');
    }
    public function referrals()
    {
        return $this->hasMany(User::class, 'name');
    }
    public function tim(User $id)
    {
        $invite = $id->referrals;
        return view('tim', ['Title' => 'Tim', 'invite' => $invite]);
    }
}
