<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class SearchController extends Controller
{
    public function index(Request $request)
    {

        $articles=Customer::when($request->has("branch_id"),function($q)use($request){
            return $q->where("branch_id","like","%".$request->get("branch_id")."%");
        })->paginate(5);
      
        return view('search ',['articles'=>$articles]);
    }

    public function view()
    {
        return view('create');
    }

    public function save(Request $request)
    {
        $customer = new Customer;
        $customer->branch_id = $request->input('branch_id');
        $customer->first_name = $request->input('first_name');
        $customer->last_name = $request->input('last_name');
        $customer->gender = $request->input('gender');
        $customer->email = $request->input('email');
        $customer->phone = $request->input('phone');
        $customer->save();

        echo "Record inserted successfully.<br/>";
        echo '<a href = "/view">Click Here</a> to go back.';

    }
}
