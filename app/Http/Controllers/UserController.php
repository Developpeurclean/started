<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function articles(){
        $annonce = Annonce::all();
        return view('articles',[
            'annonce'=> $annonce
        ]);
    }
    public function show($id){
        $annonces = Annonce::findOrFail($id);
        return view('article',[
            'annonces' => $annonces
        ]);
    }
    public function create(){
        return view('created');
    }
    public function store(Request $request){
       Annonce::create([
        'title' => $request->title,
        'slug' => $request->slug,
        'description' => $request->description,
        'content' => $request->content,
        'created_at' => $request->created_at
       ]);
       return view('welcome');
    }
}
