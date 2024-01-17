<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meuble;

class MeubleController extends Controller
{
    public function index(){
        $meubles = Meuble::all();
        return view('meubles.index',['meubles' => $meubles]);

    }

    public function showMeubles(){
        $meubles = Meuble::all();
        return view('index',['meublesData' => $meubles]);

    }
    public function create(){
        return view('meubles.create');

    }

    public function store(Request $req){
        $data =$req->validate([
            'name'=> 'required',
            'color'=> 'required',
            'qte'=> 'required|numeric',
            'price'=> 'required',
            'image'=>'image'
        ]);
        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('uploads/meubles/', $imageName);
            $data['image'] = $imageName;
        }

        $newMeubles = Meuble::create($data);
        return redirect(route('meubles.index'));
    }

    public function update(Meuble $meuble){
       return view('meubles.update',['meuble' => $meuble]);
    }

    public function edit(Meuble $meuble, Request $req){
        $data =$req->validate([
            'name'=> 'required',
            'color'=> 'required',
            'qte'=> 'required|numeric',
            'price'=> 'required'
        ]);

        $meuble ->update($data);

        return redirect(route('meubles.index'))->with('success','Meuble updated  ');

    }

    public function delete(Meuble $meuble){
        $meuble->delete();
        return redirect(route('meubles.index'))->with('success','Meuble deleted  ');

    }
}
