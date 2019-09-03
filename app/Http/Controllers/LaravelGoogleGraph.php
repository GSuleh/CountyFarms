<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LaravelGoogleGraph extends Controller
{
    
    function index(){

        $data = DB::table('farm')
                    ->select(
                        DB::raw('mainproduce as mainproduce'),
                        DB::raw('count(*) as number'))
                    ->groupBy('mainproduce')
                    ->get();
        $array[] = ['Mainproduce','Number'];
        foreach($data as $key => $value)
        {
            $array[++$key] = [$value->mainproduce, $value->number];
        }
        return view('admin.graphs')->with('mainproduce', json_encode($array)); 
    }

    
}
