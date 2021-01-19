<?php

namespace App\Http\Controllers;

use App\Models\RequestOrder;
use Illuminate\Http\Request;

class RequestOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('contributions.index',compact('contributions'));
        $request = RequestOrder::all();
        return view('request.index',compact('request')); 
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'pf_number'=>'required',
            'branch_name'=>'required',
            'customer_name'=>'required',
            'size'=>'required',
            'memo'=>'required',      
            ]);

        $reqsorder = new RequestOrder;

        $reqsorder->pf_number = $request->input('pf_number');
        $reqsorder->branch_name = $request->input('branch_name');
        $reqsorder->customer_name = $request->input('customer_name');
        $reqsorder->size = $request->input('size');
        $reqsorder->memo = $request->input('memo');


        // dd($reqsorder);

        $reqsorder->save();

        return redirect('/request/index')->with('success', 'Successfully Added !');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RequestOrder  $requestOrder
     * @return \Illuminate\Http\Response
     */
    public function show(RequestOrder $requestOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RequestOrder  $requestOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(RequestOrder $requestOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RequestOrder  $requestOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RequestOrder $requestOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RequestOrder  $requestOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequestOrder $requestOrder)
    {
        //
    }
}
