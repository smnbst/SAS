<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Currency;
use DB;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$world_currencies = DB::table('world_currencies')->get();
        $currencies = Currency::orderBy('id','DESC')->paginate(20);
        return view('admin.currency.index', compact('currencies','world_currencies'));
        //return view('index', compact('currencies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $world_currencies = DB::table('world_currencies')->get();
      $currencies = Currency::orderBy('id','DESC')->paginate(20);
      //return view('pages.index', compact('currencies','world_currencies'));
      return view('admin.currency.create', compact('world_currencies','currencies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $this->validate($request,[ 'currency'=>'required']);
          Currency::create($request->all());//Crea el objeto en la base de datos
          return redirect()->route('currencies.index')->with('success','Registro creado satifactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $currency = Currency::find($id);
        return view('admin.currency.show', compact('currency'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $world_currencies = DB::table('world_currencies')->get();
        $currency = Currency::find($id);
        return view('admin.currency.edit', compact('currency','world_currencies'));
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

        $this->validate($request,['currency'=>'required']);
        Currency::find($id)->update($request->all());
      return redirect()->route('currencies.index')->with('success','Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Currency::find($id)->delete();
        return redirect()->route('currencies.index')->with('success', 'Resitro eliminado satisfactoriamente');
    }
}
