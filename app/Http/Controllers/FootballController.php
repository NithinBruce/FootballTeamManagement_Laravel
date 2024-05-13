<?php

namespace App\Http\Controllers;

use App\Models\Management;
use Illuminate\Http\Request;

class FootballController extends Controller
{
    public function create(){
        return view('product.create');
    }

    public function store(Request $request){
        $request->validate([
            'playername' => 'required|max:255|string',
            'position'=>'required|max:255|string',
            'price' => 'required|numeric',
            'image_url'=>'max:1255|string',
        ]);
        Management::create([
            'playername'=>$request->playername,
            'position' => $request->position,
            'price' => $request->price,
            'image_url'=>$request->image_url
        ]);

        return redirect('products');
    }
    public function read()
    {
        $players = Management::all(); 
        return view('product.read', compact('players')); 
    }
    public function edit(int $id){
        $product = Management::findOrFail($id);
        return view('product.edit',compact('product'));
    }
    public function update(Request $request,int $id){
        Management::findOrFail($id)->update([
            'playername'=>$request->playername,
            'position' => $request->position,
            'price' => $request->price,
            'image_url'=>$request->image_url
        ]);

        $players = Management::get();
        return view('product.read',compact('players'));
    }
    public function delete(int $id){
        $players = Management::find($id);
        $players->delete();
        $players= Management::get();
        return redirect('products');
    }
    

}
