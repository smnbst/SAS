<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Institution;

class InstitutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $institutions = Institution::orderBy('id','DESC')->paginate(20);
       return view('admin.institution.index',compact('institutions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $institutions = Institution::orderBy('id','DESC')->paginate(20);
         return view('admin.institution.create', compact('institutions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[ 'name'=>'required']);
      Institution::create($request->all());//Crea el objeto en la base de datos
      return redirect()->route('institutions.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $institutions = Institution::find($id);
      return  view('admin.institution.show',compact('institutions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $institution = Institution::find($id);
      return view('admin.institution.edit',compact('institution'));
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
      $this->validate($request,[ 'name'=>'required']);

      Institution::find($id)->update($request->all());
      return redirect()->route('institutions.index')->with('success','Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

       Institution::find($id)->delete();
       return redirect()->route('institutions.index')->with('success','Registro eliminado satisfactoriamente');
    }
}
