<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formulario;

class FormularioController extends Controller
{
  public function index(){

    $forms = Formulario::all();

    return view('formulario.index', compact('forms'));

  } //index

  public function store(Request $request){
    $form = new Formulario();

    $form->first_name = $request->first_name;
    $form->last_name  = $request->last_name;
    $form->email      = $request->email;
    $form->message    = $request->message;
    $form->save();

    return redirect()->route('formulario.index');
  }//store

  public function update(Request $request, $id){
    $form = Formulario::find($id);

    $form->first_name = $request->first_name;
    $form->last_name  = $request->last_name;
    $form->email      = $request->email;
    $form->message    = $request->message;
    $form->save();

    return redirect()->route('formulario.index');
  }//update

  public function delete($id){
    $form = Formulario::find($id);
    $form->delete();
    return redirect()
      ->route('formulario.index');
  }//delete

}
