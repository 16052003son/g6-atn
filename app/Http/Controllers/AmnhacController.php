<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AmnhacController extends Controller
{
    public function amnhac()
    {
        $user = auth()->user(); // lấy thông tin người dùng đã đăng nhập
        return view('amnhac', compact('user'));
    }
}