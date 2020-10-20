<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CrudController extends Controller
{
    protected static function insert(Request $request)
    {
        $inserted = DB::insert('insert into login (username, password) values (?, ?)', [request('name'),request('pass')]);
    }
    protected static function list(Request $request)
    {
        $results = DB::select('select * from login'); 
        return view('lista', compact('results'));
    }
}
