<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\HTTP\Request;

use DB;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insertfarm(Request $req)
    {
        $user_id = $req->input('user_id');
        $farmname = $req->input('farmname');
        $location = $req->input('location');
        $mainproduce = $req->input('mainproduce');
        $description = $req->input('description');

        $data = array('user_id'=>$user_id, 'farmname'=>$farmname, 'location'=>$location, 'mainproduce'=>$mainproduce, 'description'=>$description);
    
        DB::table('farm')->insert($data);

        return redirect('/farm');
    }

    function insertinventory(Request $req)
    {
        $farm_id = $req->input('farm_id');
        $budget = $req->input('budget');
        $tools = $req->input('tool');
        $cost = $req->input('cost');

        $data = array('farm_id'=>$farm_id, 'budget'=>$budget, 'tools'=>$tools, 'cost'=>$cost);
    
        DB::table('inventory')->insert($data);

        return redirect('/inventory');
    }
}
