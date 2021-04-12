<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:user');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.index');
    }

    public function register()
    {
        return view('user.newRegister');
    }

    public function select_game()
    {
        $user = new User();

        $user -> game_id = request('game_id');
        $user->save();

        return view("user.index");
    }

    function user_found()
    {
        return User::find(1)->game;
    }
}
