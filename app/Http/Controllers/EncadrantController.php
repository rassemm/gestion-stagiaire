<?php

namespace App\Http\Controllers;

use App\Http\Requests\EncadrantRequest;
use Illuminate\Http\Request;
use App\Encadrant;

class EncadrantController extends Controller{
  public function __construct(){
    $this->middleware('auth')->except(['index']);
  }
  public function index(Encadrant $model,Request $request){
    return view('encadrant.index', ['encadrants' => $model->orderBy('id','desc')->paginate(15)]);
  }
  public function create(){
    return view('encadrant.create');
  }
  public function store(encadrantRequest $request, encadrant $model){
    $model->create($request->except('_token'));
    return redirect()->route('encadrant.index')->withStatus(__('encadrant ajouté avec succèe.'));
  }
  public function show($id){}
  public function edit($id){
    $encadrant = Encadrant::find($id);
    return view('encadrant.edit', compact('encadrant'));
  }
  public function update(encadrantRequest $request, $id){
    $encadrant = Encadrant::find($id);
    $encadrant->update($request->except('_token'));
    return redirect()->route('encadrant.index')->withStatus(__('encadrant modifié avec succèe.'));
  }
  public function destroy($id){
    $encadrant = Encadrant::find($id);
    $encadrant->delete();
    return redirect()->route('encadrant.index')->withStatus(__('encadrant supprimé avec succèe.'));
  }
}
