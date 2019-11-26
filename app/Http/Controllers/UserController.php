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

    public function checkLists($lists){
      $userLists = [];
      $userId = Auth::user()->id;
      foreach ($lists as $list) {
        if ($list->user_id == $userId) {
          $userLists[] = $list;
        }
      }
      return $userLists;
    }

    public function show()
    {
        $lists = $this->checkLists(check_list::all());
        return view('user.profile', ['user' => Auth::user(), 'lists' => $lists]);
    }



}
