<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;
use DB;
use App\Http\Requests\dataForm;

class ScheduleController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      //$world_schedules = DB::table('world_schedules')->get();
      $schedules = Schedule::orderBy('id','DESC')->paginate(20);
      return view('schedule.index', compact('schedules'));
      //return view('index', compact('schedules'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $schedules = Schedule::orderBy('id','DESC')->paginate(20);
    //return view('pages.index', compact('schedules','world_schedules'));
    return view('schedule.create', compact('schedules'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {

        $this->validate($request,[ 'days'=>'required', 'time'=>'required']);
        Schedule::create($request->all());//Crea el objeto en la base de datos
        /*$schedule = new Schedule();
        $schedule->days = $request['days'];
        $schedule->time = $request['time'];
        $schedule->save();*/
        return redirect()->route('schedules.index')->with('success','Registro creado satifactoriamente');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      $schedule = Schedule::find($id);
      return view('schedule.show', compact('schedule'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      //$schedules = Schedule::orderBy('id','DESC')->paginate(1);
      $schedule = Schedule::find($id);
      return view('schedule.edit', compact('schedule'));
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
    
      $this->validate($request,[ 'days'=>'required', 'time'=>'required']);
      Schedule::find($id)->update($request->all());
    return redirect()->route('schedules.index')->with('success','Registro actualizado satisfactoriamente');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      Schedule::find($id)->delete();
      return redirect()->route('schedules.index')->with('success', 'Resitro eliminado satisfactoriamente');
  }


}
