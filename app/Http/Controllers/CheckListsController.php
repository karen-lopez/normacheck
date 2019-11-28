<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\check_list;
use App\all_check;
use App\norm_control;

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

  public function checklists($id){
    //$checklist2 = check_list::find($id)->user_checks()->select('all_check_id')->get();
    $userChecklist = check_list::find($id)->user_checks;
    $checklist = check_list::find($id)->user_checks()->select('all_check_id')->get();
    foreach ($checklist as $check) {
        $idAllCheck = $check['all_check_id'];
        $allChecks[] = $this->allCheck($idAllCheck);
    }
    //echo $checklist2[0]['all_check_id'];
    //echo $allChecks[0];
    return view('checkLists.checklist', ['checklist' => $userChecklist, 'user' => Auth::user(),
                                          'allChecks' => $allChecks]);
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
    $nameList = $request->input('nameList');
    return "el nombre es $nameList";
  }


}
