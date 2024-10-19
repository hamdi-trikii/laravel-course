<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; #this will give u acess to the product table in the db

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function add_product(Request $request){
        $data= new Product;
         #thats means that the data var now has acces to the product table

         $data->title=$request->title;
         $data->description	=$request->description;

         $image=$request->image;#we store the image in a variable (image)
         if ($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();# making a unique name for the image
            $request->image->move('product',$imagename);#we move the image to a folder (product)
            $data->image=$imagename;#now we store that image name in the database
         }


        $data->save();
        return redirect()->back();#THAT WILL KEEP THE USER  on the same place

    }



    public function show_product(){
        $data=Product::all(); #to bring all data tha is stored in the table

        #now we need to send this data to the view 
        return view('product',compact('data'));
    }



    public function delete_product($id){
        $data=Product::find($id);
        $data->delete();
        return redirect()->back();
    }


    public function update_product($id){
        $product=Product::find($id);
        return view('product_update',compact('product'));
    }


    public function edit_product(Request $request,$id){
        $product=Product::find($id);
        $product->title=$request->title;
        $product->description=$request->description;
        if ($request->hasFile('image')) {
            $image=$request->image;
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('product',$imagename);#request
            $product->image=$imagename;
        }
        $product->save();
        return redirect()->back();


    }
}
 