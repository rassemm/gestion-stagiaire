<?php

namespace App\Http\Controllers;

use App\Http\Requests\StageRequest;
use Illuminate\Http\Request;
use App\Stage;
use App\Encadrant;
use App\Stagiaire;

class StageController extends Controller{
  public function __construct(){
    $this->middleware('auth')->except(['index']);
  }
  public function index(stage $model,Request $request){
    return view('stage.index', ['stages' => $model->orderBy('id','desc')->paginate(15)]);
  }
  public function create(Stagiaire $stagiaire,Encadrant $encadrant){
    return view('stage.create', ['stagiaires' => $stagiaire->get(),'encadrants' => $encadrant->get()]);
  }
  public function store(stageRequest $request, stage $model){
    $model->create($request->except('_token'));
    return redirect()->route('stage.index')->withStatus(__('stage ajouté avec succèe.'));
  }
  public function show($id){}
  public function edit($id,Stagiaire $stagiaire,Encadrant $encadrant){

    $stage = Stage::find($id);
    return view('stage.edit', ['stage'=>$stage,'stagiaires' => $stagiaire->get(),'encadrants' => $encadrant->get()]);
  }
  public function update(stageRequest $request, $id){
    $stage = Stage::find($id);
    $stage->update($request->except('_token'));
    return redirect()->route('stage.index')->withStatus(__('stage modifié avec succèe.'));
  }
  public function destroy($id){
    $stage = Stage::find($id);
    $stage->delete();
    return redirect()->route('stage.index')->withStatus(__('stage supprimé avec succèe.'));
  }
}
