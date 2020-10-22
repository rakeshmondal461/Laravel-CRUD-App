<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
class Users extends Controller
{
  public function submit(Request $req){

        $req->validate([
          "user" => "required",
          "mob" => "min:10"
        ]);
        print_r($req->input());
        $name = $req->input()['user'];
        $mob = $req->input()['mob'];
     
        $users = DB::table('user')
        ->insert([
          'name'=>$name,
          'mob'=>$mob
        ]);
        $req->session()->flash('userMessage','Data submitted successfully.');
        return redirect('/user');
  }

  public function dbcheck(){
    //  $users = DB::select('select * from user');
      $users = DB::table('user')->find(1);
      print_r($users);
      //return $users;
  }

  public function getData(){

    return User::find(2);
  }

  public function fileUpload(Request $req){
     echo $req->file('imageToUpload')->store('uploads');

    // print_r($req->file());
  }



}
