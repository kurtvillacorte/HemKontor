<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientOrderDetail;
use Illuminate\Support\Facades\DB;
use Session;

class ProductionOrderDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // 
        
        Session::put('clientorderID', $id);
        
        $individualorders = DB::table('clientorderdetails')
            ->join('product', 'clientorderdetails.productCode', '=', 'product.productCode')
            ->join('productimage', 'product.productCode', '=', 'productimage.productCode')
            ->where('clientOrderID', $id)
            ->get();
        
        return view('system.productionorderdetails')->with('individualorders', $individualorders);
        //return ClientOrderDetail::where('clientOrderID', $id)->get();
        //return view('website.individualorder');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
