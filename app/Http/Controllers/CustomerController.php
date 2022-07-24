<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bus;
use App\Models\Customer;
use App\Jobs\CustomerProcess;

class CustomerController extends Controller
{
    public function index()
    {
        return view('import');
    }
    public function save(Request $request)
    {

        if( $request->has('csv') ) {

            $csv    = file($request->csv);
            $chunks = array_chunk($csv,1000);
            $header = [];
            $batch  = Bus::batch([])->dispatch();

            foreach ($chunks as $key => $chunk) {
            $data = array_map('str_getcsv', $chunk);
                if($key == 0){
                    $header = $data[0];
                    unset($data[0]);
                }
                $batch->add(new CustomerProcess($data, $header));
            }
            return $batch;
        }
        return "please upload csv file";
    }

    }

