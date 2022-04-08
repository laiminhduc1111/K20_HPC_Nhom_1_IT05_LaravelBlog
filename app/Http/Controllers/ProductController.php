<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function addProduct(){
        return view('admin.product.add-product');
    }
    public function saveProduct(Request $request){
        DB::table('products')->insert([
            'name'=>$request->name,
            'origin'=>$request->origin,
            'description'=>$request->description
        ]);
        return back()->with('product_add','Thêm sản phẩm thành công');
    }
    public function listProduct(){
        $products=DB::table('products')->get();
        return view ('admin.product.list-product',compact('products'));
    }
    public function editProduct($id){
        $product=DB::table('products')->where('id',$id)->first();
        return view('admin.product.edit-product',compact('product'));
    }
    public function updateProduct(Request $request){
        DB::table('products')->where('id', $request->id)->update([
            'name'=>$request->name,
            'origin'=>$request->origin,
            'description'=>$request->description
        ]);
        return back()->with('product_update','Sửa sản phẩm thành công');
    }
    public function deleteProduct($id){
        DB::table('products')->where('id',$id)->delete();
        return back()->with('product_delete','Xóa Sản Phẩm Thành Công');
    }

}
