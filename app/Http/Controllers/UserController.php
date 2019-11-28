<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\check_list;

class UserController extends Controller
{

    public function config(){
        return view(user.config);
    }

    public function __construct(){
        $this->middleware('auth');
    }



    public function show()
    {
        $id = Auth::user()->id;
        $lists = User::find($id)->check_lists;
        return view('user.profile', ['user' => Auth::user(), 'lists' => $lists]);
    }


}
