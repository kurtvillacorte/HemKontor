<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Product;
use App\ProductImage;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return productImage::with('Product')->get();
        $product    = DB::table('product')
                    ->join('productimage', 'product.productCode', '=', 'productimage.productCode')
                    ->get();
        // return $product;

        return view('website.shop')->with('products', $product);
        // return view('system.showFurniture')->with('productImages', $productImage);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('system.addFurniture');
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
            'productName' => 'required',
            'productPrice' => 'required',
            'cover_image' => 'image|nullable|max:1999',
            'cover_image' => 'required',
            'productCode' => 'required',
            'bufferPeriod' => 'required'

        ]);
        if ($request->hasFile('cover_image')){
            //Get filename with the extension
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get just filename
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //File Name to Store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }
        else{
            $fileNameToStore = 'noimage.jpg';

        }
        //New Product
        $product = new Product;
        $product->name = $request->input('productName');
        $product->description = $request->input('productDescription');
        $product->productPrice = $request->input('productPrice');
        $product->productCode = $request->input('productCode');
        $product->bufferPeriod = $request->input('bufferPeriod');
        $product->save();

        //New ProductImage
        $productImage = new ProductImage;
        if ($request->hasFile('cover_image')){
            $productImage->productImage = $fileNameToStore;
            $productImage->productCode = $request->input('productCode');
        }
        $productImage->save();

        //REDIRECT TO PRODUCTS
        $product    = DB::table('product')
                    ->join('productimage', 'product.productCode', '=', 'productimage.productCode')
                    ->get();
        // return $product;

        return view('website.shop')->with('products', $product);
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
        $individualproduct = DB::table('product')
        ->join('productimage', 'product.productCode', '=', 'productimage.productCode')
        ->where('product.productCode', '=', $id)
        ->get();
        // return $individualproduct;
        return view('website.product-details')->with('products', $individualproduct);
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
