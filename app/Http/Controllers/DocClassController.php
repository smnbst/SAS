<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Docclass;

class DocClassController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      //$world_docclasses = DB::table('world_docclasses')->get();
      $docclasses = Docclass::orderBy('id','DESC')->paginate(20);
      return view('docclass.index', compact('docclasses'));
      //return view('index', compact('docclasses'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $docclasses = Docclass::orderBy('id','DESC')->paginate(20);
    //return view('pages.index', compact('docclasses','world_docclasses'));
    return view('docclass.create', compact('docclasses'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
        $this->validate($request,[ 'docclass'=>'required', 'description'=>'required']);
        Docclass::create($request->all());//Crea el objeto en la base de datos
        return redirect()->route('docclasses.index')->with('success','Registro creado satifactoriamente');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      $docclass = Docclass::find($id);
      return view('docclass.show', compact('docclass'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {

      $docclass = Docclass::find($id);
      return view('docclass.edit', compact('docclass'));
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

      $this->validate($request,[ 'docclass'=>'required', 'description'=>'required']);
      Docclass::find($id)->update($request->all());
    return redirect()->route('docclasses.index')->with('success','Registro actualizado satisfactoriamente');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      Docclass::find($id)->delete();
      return redirect()->route('docclasses.index')->with('success', 'Resitro eliminado satisfactoriamente');
  }


}
