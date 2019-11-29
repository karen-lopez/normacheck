<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\check_list;
use App\all_check;
use App\norm_control;
use App\user_check;

use App\User;

class CheckListsController extends Controller
{
  public function __construct(){
      $this->middleware('auth');
  }

  public function load(){
    $fp = fopen("checks.txt", "r");
    while (!feof($fp)){
        $line = fgets($fp);
        if( strlen($line) == 9){
          $control = $line;
        }
        else{
          $lista[] = ['control' =>$line, 'index' => $control];
        }
    }
    fclose($fp);
    $id = 0;
    $idCheck =1;
    $aux = null;
    foreach ($lista as $value) {
      if($aux != $value['index']){
        $id ++;
        $aux = $value['index'];
        /*norm_control::insertOrIgnore(['id' => $id, 'control' => $value['index'],
                              'description' => $value['index']]);*/
      }
      all_check::insertOrIgnore(['id' => $idCheck, 'description' => $value['control'],
                              'norm_control_id' => $id]);
      $idCheck++;
    }
  }

  public function checklists(){
    $id = Auth::user()->id;
    $lists = User::find($id)->check_lists;
    return view('user.checklist', ['checklist' => $lists, 'user' => Auth::user()]);
  }

  public function userChecks($id){
    $userChecklist = check_list::find($id)->user_checks;
    return view('checkLists.checks', ['checklist' => $userChecklist, 'user' => Auth::user(),
                                          'allChecks' => all_check::all()]);
  }

  public static function allCheck($id){
    return all_check::find($id);
  }

  public static function loadChecks(){
    /*$id = Auth::user()->id;
    $listsid = User::find($id)->check_lists()->select('id')->get();
    $listsid[0]['id'];*/
    //all_check::
  }

  public static function addList(Request $request){
    $userId = Auth::user()->id;
    $nameList = $request->input('nameList');
    $allCheck = all_check::all();
    $checklistId = check_list::insertGetId(['name' => $nameList, 'user_id' => $userId, 'created_at' => date("Y/m/d")]);
    foreach ($allCheck as $value) {
      user_check::insertOrIgnore(['state' => 0, 'all_check_id' => $value['id'],
                              'check_list_id' => $checklistId, 'created_at' => date("Y/m/d")]);
    }

    return redirect()->route('checks', ['id' => $checklistId]);
  }

  public function show($id){
    return redirect()->route('checks', ['id' => $checklistId]);
  }


}
