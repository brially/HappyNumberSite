<?php

namespace App\Http\Controllers;

use App\BusinessLogic\NumberChecker;
use Illuminate\Http\Request;
use App\Http\Requests\HappyNumberRequest;
use Illuminate\Support\Facades\Input;

class HappyNumberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $happy_number_results = Input::get('happy_number_results');
        return view('happy_number/index', compact('happy_number_results'));
    }


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
        }
        catch(\Exception $e){
            $happy_number_results['error'] = true;
            $happy_number_results['error_message'] = $e->getMessage();

        }
        return view('happy_number/index', compact('happy_number_results'));
        return redirect('happy-number')->with('happy_number_results', $happy_number_results )->withInput();
    }

}
