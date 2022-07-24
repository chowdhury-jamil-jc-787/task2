<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class FilterController extends Controller
{
    public function indexFiltering(Request $request)
{

    $product = Customer::where( function($query) use($request){
        return $request->first_name ?
               $query->from('customers')->where('first_name',$request->first_name) : '';
   })->where(function($query) use($request){
        return $request->gender ?
               $query->from('customers')->where('gender',$request->gender) : '';
   })
   ->with('branch_id','gender')
   ->get();

$selected_id = [];
$selected_id['branch_id'] = $request->branch_id;
$selected_id['gender'] = $request->gender;

return view('filtering',compact('product','selected_id')); 

}
}
