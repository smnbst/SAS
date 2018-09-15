<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conditions;

class ConditionController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      //$world_currencies = DB::table('world_currencies')->get();
      $price_conditions = Conditions::orderBy('id','DESC')->paginate(20);
      return view('conditions.index', compact('price_conditions'));
      //return view('index', compact('currencies'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {

    $price_conditions = Conditions::orderBy('id','DESC')->paginate(20);
    //return view('pages.index', compact('currencies','world_currencies'));
    return view('conditions.create', compact('price_conditions'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
        $this->validate($request,[ 'code'=>'required', 'description'=>'required','price'=>'required']);
        Conditions::create($request->all());//Crea el objeto en la base de datos

        return redirect()->route('conditions.index')->with('success','Registro creado satifactoriamente');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      $price_conditions = Conditions::find($id);
      return view('conditions.show', compact('price_conditions'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      $price_conditions = Conditions::find($id);
      return view('conditions.edit', compact('price_conditions'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {

        $this->validate($request,[ 'code'=>'required', 'description'=>'required','price'=>'required']);

      Conditions::find($id)->update($request->all());
    return redirect()->route('conditions.index')->with('success','Registro actualizado satisfactoriamente');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      Conditions::find($id)->delete();
      return redirect()->route('conditions.index')->with('success', 'Resitro eliminado satisfactoriamente');
  }
}
