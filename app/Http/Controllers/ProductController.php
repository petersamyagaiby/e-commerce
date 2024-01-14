<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function show_details ($prod_id) {
        $product = Product::findorfail($prod_id);
        return view("products.details", ['product' => $product]);
    }

    public function all_products () {
        $products = Product::all();
        return view("products" , ['products' => $products]);
    }

    public function create_product (){
        return view('products.create');
    }

    public function insert(ProductRequest $req){
        $data = $req->all();
        // dd($data);
        if($req->hasFile('image')){ // check if their is a file uploaded
            $image = $req->file('image');
            // rename image name
            $name = time() . "_product." . $image->getClientOriginalExtension();
            // move temp to public folder
            $destination = public_path("/assets/images");
            $image->move($destination, $name);
            // $imgHolder = "uploads/{$name}";
            // $data['image'] = $imgHolder;
            $data['image'] = $name;
        }else{
            $data['image'] = "default.png";
        }
        // Old Way
        // $product = new Product();
        // $product->name = $data['name'];
        // $product->price = $data['price'];
        // $product->pro_desc = $data['pro_desc'];
        // $product->quantity = $data['quantity'];
        // $product->image = $data['image'];
        // $product->save();

        // New Way
        $product = new Product();
        $product->create($data);
        return redirect("/");

    }

    public function delete(Product $id) { // make Product $id ==> go to database and find the product's id = id 
        $id->delete(); // delete from products where id = id
        return redirect('/');        
    }

    public function edit(Product $id) {
        return view("products.edit", ['product' => $id]);
    }

    public function update(Product $product, ProductRequest $req){
        $data = $req->all();
        $product->update($data);
        return view("products.details", ['product' => $product]);

    }
}
