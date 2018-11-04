<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobOrder;
use Illuminate\Support\Facades\DB;
use Session;

class ProductionJobOrdersController extends Controller
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

        $individualorders = DB::table('clientorders')
            ->join('client', 'clientorders.clientID', '=', 'client.clientID')
            ->join('clientorderdetails', 'clientorders.clientOrderID', '=', 'clientorderdetails.clientOrderID')
            ->join('product', 'clientorderdetails.productCode', '=', 'product.productCode')
            ->join('productimage', 'product.productCode', '=', 'productimage.productCode')
            ->join('basicmaterial', 'product.productCode', '=', 'basicmaterial.productCode')
            ->join('rawmaterial', 'basicmaterial.rawMatCode', '=', 'rawmaterial.rawMatCode')
            ->where('clientorders.clientOrderID', Session::get('clientorderID'))
            ->get();
        
        return view('system.productioncreatejoborder')->with('individualorders', $individualorders);
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
        
        $this->validate($request, [
            'joNo' => 'required',
            'joDate' => 'required',
            'clientID' => 'required',
            'clientOrderID' => 'required',
            'notes' => 'required',
            'joDeliveryDate' => 'required'
        ]);

        //Create Job Order
        $joborder = new JobOrder;
        $joborder->joNo = $request->input('joNo');
        $joborder->joDate = $request->input('joDate');
        $joborder->clientID = $request->input('clientID');
        $joborder->joCoID = $request->input('clientOrderID');
        $joborder->joApproved = $request->input('joApproved');
        $joborder->notes = $request->input('notes');
        $joborder->joDeliveryDate = $request->input('joDeliveryDate');
        $joborder->save();

        return redirect('/productionindex')->with('success', 'Job Order Created!');
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
        $individualjoborders = DB::table('joborder')
            ->join('client', 'joborder.clientID', '=', 'client.clientID')
            ->join('clientorders', 'joborder.joCoID', '=', 'clientorders.clientOrderID')
            ->join('clientorderdetails', 'clientorders.clientOrderID', '=', 'clientorderdetails.clientOrderID')
            ->join('product', 'clientorderdetails.productCode', '=', 'product.productCode')
            ->join('productimage', 'product.productCode', '=', 'productimage.productCode')
            ->join('basicmaterial', 'product.productCode', '=', 'basicmaterial.productCode')
            ->join('rawmaterial', 'basicmaterial.rawMatCode', '=', 'rawmaterial.rawMatCode')
            ->where('joborder.joNo', $id)
            ->get();

        return view('system.individualjoborder')->with('individualjoborders', $individualjoborders);
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
