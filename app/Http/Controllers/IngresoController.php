<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingreso;
use App\IngresosApoyo;
use App\User;
use Carbon\Carbon;

class IngresoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('ingreso.create',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $persona = Ingreso::create($request->all());
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function getHistorialIngreso($id){
        $ingresos = Ingreso::where('persona_id',$id)->orderBy('created_at','DESC')->get();
        return view('ingreso.historial',compact('ingresos'));
    }

    public function imprimir($id){
        $ingreso =  Ingreso::findorFail($id);
        return view('ingreso.imprimir',compact('ingreso'));
        /*$pdf = \PDF::loadView('ingreso.imprimir',compact('ingreso'));
        return $pdf->download('imprimir.pdf');*/
    }
    public function ingresoapoyo($id){
        return view('ingreso.apoyo',compact('id'));
    }
    public function imprimirhistorialapoyo($id,$mes){
        $persona =  User::findorFail($id);
        return view('persona.apoyo',compact(['persona','mes']));
    }
    public function ingresoapoyostore(Request $request){
        IngresosApoyo::create($request->all());
        return redirect()->route('home');
    }
}
