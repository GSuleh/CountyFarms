<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ViewController extends Controller
{
    public function index() {
        $farm = DB::select('select * from farm');
        return view('admin.dashboard',['farm'=>$farm]);
     }

     public function destroy($id) {
      DB::delete('delete from farm where id = ?',[$id]);
      return redirect('dash');
      }

     public function index2() {
        $inventory = DB::select('select * from inventory');
        return view('admin.inv',['inventory'=>$inventory]);
     }

     public function destroy1($id) {
      DB::delete('delete from inventory where id = ?',[$id]);
      return redirect('inv');
      }
}
