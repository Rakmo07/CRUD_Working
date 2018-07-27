<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\Models\Product;
use DB;
use Exception;

class RequestController extends Controller
{
  public function retrive(){
    $results = DB::select('SELECT * FROM Product');
      // return DB::table('Product')->get();
    // print_r($results);exit;
      return response()->json($results);
    }


public function select($id){
  $results= DB::select('SELECT * FROM Product WHERE id='.$id);
  return response()->json($results);
}

public function insert(Request $request){
  $id=$request->input('id');
  $name=$request->input('name');
  $status=$request->input('status');
  $cost=$request->input('cost');
  $data=array("id"=>$id,"name"=>$name,"status"=>$status,"cost"=>$cost);
  DB::table('Product')->insert($data);
  // $results=DB::insert('INSERT INTO Product ('id','name',status,'cost')VALUES(?,?,?,?)',
  // );
  return response()->json('Product Inserted','500');

}

public function update($id, Request $request){
  try{
    $product = Product::findOrFail($id);
    $product->cost =$request->input('cost');
    $response = $product->save();
    if($response){
        return response()->json($product,200);
    }else{
        echo 'Not updated';
    }
  }catch(Exception $e){
      echo $e->getMessage();
  }
}

public function delete($id){
  $results=DB::delete('DELETE FROM Product WHERE id='.$id);
  return response()->json('Product Deleted',200);
}
}
