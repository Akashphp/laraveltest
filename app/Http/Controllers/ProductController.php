<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use App\Http\Requests;
use Session;

class ProductController extends Controller
{
	
	 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

     /**
     * Create a new function to add data
     * @request 
     * @return view
     */
    function add() { 
		//get data from Json File
		$data = json_decode(file_get_contents('uploads/data.json'),true);
		
		return view('Product/add',['data' => $data,]);
	}
	
	 /**
     * Create a new function to post data
     * @request post data of form
     * @return void
     */
    function addProduct(Request $request) {
		//get data from Json File
		$data = json_decode(file_get_contents('uploads/data.json'),true);
		echo $i = count($data);
		$data[$i]['id']=$i;
		$data[$i]['qty_in_stock']=$request->qty_in_stock;
		$data[$i]['name']=$request->name;
		$data[$i]['price_per_item']=$request->price_per_item;
		$data[$i]['add_date']=date('Y-m-d H:i:s');
		
		//set data from Json File
		file_put_contents('uploads/data.json',json_encode($data));
		$request->session()->flash('message', 'Product added successfully.');
		return redirect()->action('ProductController@add');
	}
	
	/**
     * Create a new function to edit data
     * @request $id
     * @return view
     */
	function edit($id) {
		//get data from Json File
		$data = json_decode(file_get_contents('uploads/data.json'),true);
		$i = $id;
		$rec=$data[$i];
		
		return view('Product/edit',['data' => $rec]);
	}
	
	/**
     * Create a new function to post edit data
     * @request POST data of Form
     * @return void
     */
    function editProduct(Request $request) {
		//get data from Json File
		$data = json_decode(file_get_contents('uploads/data.json'),true);
		$i = $request->id;
		$data[$i]['id']=$i;
		$data[$i]['qty_in_stock']=$request->qty_in_stock;
		$data[$i]['name']=$request->name;
		$data[$i]['price_per_item']=$request->price_per_item;
		$data[$i]['add_date']=date('Y-m-d H:i:s');
		
		//set data from Json File
		file_put_contents('uploads/data.json',json_encode($data));
		$request->session()->flash('message', 'Product edited successfully.');
		return redirect()->action('ProductController@add');
	}

}
