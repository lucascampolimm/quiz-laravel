<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = UserModel::latest()->paginate(10);
        return view('users.index', compact('users'));
    }

    // public function show(UserModel $userModel)
    // {
    //     return view('users.show', [
    //         'userModel' => $userModel
    //     ]);
    // }

}
