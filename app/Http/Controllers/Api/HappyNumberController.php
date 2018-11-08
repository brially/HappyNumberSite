<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BusinessLogic\NumberChecker;
use App\Http\Requests\HappyNumberRequest;
use Illuminate\Support\Facades\Input;

class HappyNumberController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HappyNumberRequest $request)
    {
        $happy_number_results = [
            'number'=>$request->input('happy_number'),
            'is_happy'=> false,
            'error'=> false,
            'error_msg'=>''
        ];
        try{
            $happy_number_results['is_happy'] = NumberChecker::isHappy($request->input('happy_number'));
            return response()->json($happy_number_results, 200);
        }
        catch(\Exception $e){
            $happy_number_results['error'] = true;
            $happy_number_results['error_message'] = $e->getMessage();
            return response()->json($happy_number_results, 400);
        }
    }

}
