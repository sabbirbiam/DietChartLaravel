<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
  public function index()
    {
    	$prolist = DB::table('product')
    		->get();
    	return view('product.index')
    		->with('prolist', $prolist);
    		// echo $prolist;
    }

    public function create()
    {
    	return view('product.create');
    }

    public function store(Request $request)
    {
    	$params = [
    		'productName' => $request->pname,
    		'productUnit' => $request->punit,
    		'productPrice' => $request->pprice,
    		'productDescription' => $request->pdescription,
    		'productImage' => $request->pimage,
    		'productCatagory' => $request->pcatagory,
    		'productType' => $request->ptype
    	];

    	DB::table('product')
    		->insert($params);
    	return redirect('/product/create');
    }


    public function edit($id)
    {
        $pro = DB::table('product')
            ->where('productId', $id)
            ->first();
        return view('product.edit')
            ->with('pro', $pro);
    }

    public function update(Request $request)
    {
        $params = [
            'productName' => $request->pname,
            'productUnit' => $request->punit,
            'productPrice' => $request->pprice,
            'productDescription' => $request->pdescription,
            // 'productImage' => $request->pimage,
            'productCatagory' => $request->pcatagory,
            'productType' => $request->ptype
        ];

        DB::table('product')
            ->where('productId', $request->pid)
            ->update($params);

        return redirect('/product');
    }


     public function img($id)
    {
        $pro = DB::table('product')
            ->where('productId', $id)
            ->first();
        return view('product.image')
            ->with('pro', $pro);
    }

    public function imgupdate(Request $request)
    {
        $params = [
            
            'productImage' => $request->pimage,
            
        ];

        DB::table('product')
            ->where('productId', $request->pid)
            ->update($params);

        return redirect('/product');
    }


    public function delete($id)
    {
        $pro = DB::table('product')
            ->where('productId', $id)
            ->first();
        return view('product.delete')
            ->with('pro', $pro);
    }

    public function destroy($id)
    {
        DB::table('product')
            ->where('productId', $id)
            ->delete();

        return redirect('/product');
    }



    public function normal()
    {
    	$type = "normalWeight";
    	$normal = DB::table('product')
    		->where('productType', $type)
    		->get();
    	return view('product.normal')
    		->with('normal', $normal);



    }


    public function under()
    {
    	$type = "underWeight";
    	$under = DB::table('product')
    		->where('productType', $type)
    		->get();
    	return view('product.under')
    		->with('under', $under);
    }


    public function over()
    {
    	$type = "overWeight";
    	$over = DB::table('product')
    		->where('productType', $type)
    		->get();

    	return view('product.over')
    		->with('over', $over);

            // return($over);
    }



 
    




    // public function addcart(Request $request){
        
        
    

    //     $demo = [
    //         'hidden_name' => $request->hidden_name,
    //         'hidden_price' => $request->hidden_price,
    //         'quantity' => $request->quantity,
            
    //     ];
        
    //     $value = $request->session()->get('add', $demo);
        
    //      return view('product.demo')
    //        ->with('de', $value);
       
        
    // }


    public function addcart(Request $request){

        // $hidden_id = $request->hidden_id;
        // dd($hidden_id);
        // // dd($request);


        
        // if ($request->session()->has('add')) {

        //     $count = count($request->session()->has('add'));

           
        // }




    

        $demo = [
            'hidden_name' => $request->hidden_name,
            'hidden_price' => $request->hidden_price,
            'quantity' => $request->quantity,
            'hidden_id' => $request->hidden_id,
            
        ];

        
        
         $request->session()->push('add', $demo);


        
          

          // return redirect('/under');
         return back();
       
        
    }

    public function showcart(Request $request){
       
       if(! $request->session()->has('add')) {
        return "no items in cart"; 
        }
         $value =  $request->session()->get('add');

         // dd($value);
         return view('product.demo')
           ->with('cart', $value);

         // return($value);
    }



    public function addorder(Request $request){
      $request->session()->forget('add');

        // if ($request->session()->has('add')) {
        //     $data = $request->session()->get('add');

        //     foreach ($data as $key => $value) {
        //         # code...
        //     }

        //     DB::table('orderproduct')
        //     ->insert($params);

            return redirect('/home');
        // }    

    }

     public function remove(Request $request){

        if(! $request->session()->has('add')) {
        return "no items in cart"; 
        }
    // dd($request);
    // dd($request->catchid);

        $val = $request->session()->get('add');

         // dd($val);

        foreach ($val as $key) {

            // dd($request->hidden_id);
            // dd($value['hidden_id']);
            return $key['hidden_id'];
            if ($value['hidden_id'] = $request->catchid ) {
               $request->session()->pop('add',$key);
            }
        }




     }
}
