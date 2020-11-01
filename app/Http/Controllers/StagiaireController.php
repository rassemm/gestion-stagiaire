<?php

namespace App\Http\Controllers;

use App\Http\Requests\StagiaireRequest;
use Illuminate\Http\Request;
use App\Stagiaire;

class StagiaireController extends Controller{
  public function __construct(){
    $this->middleware('auth')->except(['index']);
  }
  public function index(Stagiaire $model,Request $request){
    return view('stagiaire.index', ['stagiaires' => $model->orderBy('id','desc')->paginate(15)]);
  }
  public function create(){
    return view('stagiaire.create');
  }
  public function store(stagiaireRequest $request, stagiaire $model){
    $model->create($request->except('_token'));
    return redirect()->route('stagiaire.index')->withStatus(__('stagiaire ajouté avec succèe.'));
  }
  public function show($id){}
  public function edit($id){
    $stagiaire = Stagiaire::find($id);
    return view('stagiaire.edit', compact('stagiaire'));
  }
  public function update(stagiaireRequest $request, $id){
    $stagiaire = Stagiaire::find($id);
    $stagiaire->update($request->except('_token'));
    return redirect()->route('stagiaire.index')->withStatus(__('stagiaire modifié avec succèe.'));
  }
  public function destroy($id){
    $stagiaire = Stagiaire::find($id);
    $stagiaire->delete();
    return redirect()->route('stagiaire.index')->withStatus(__('stagiaire supprimé avec succèe.'));
  }
}
