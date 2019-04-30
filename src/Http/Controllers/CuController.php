<?php

namespace generator\project\Http\Controllers;

use generator\project\Models\Cu;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;


class CuController extends Controller
{
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cu = Cu::create([
            'cu_idModulo' => $request->json()->get('cu_idModulo'),
            'cu_carpeta' => $request->json()->get('cu_carpeta'),
            'cu_nombre' => $request->json()->get('cu_nombre'),
        ]);

        return response()->json(compact('cu'),201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cu  $cu
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $cu  = DB::table('cu')->where('cu_id', $request['cu_id'])->first();

        return response()->json(compact('cu'),201);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cu  $cu
     * @return \Illuminate\Http\Response
     */

    public function edit(Cu $cu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cu  $cu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cu $cu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cu  $cu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cu $cu)
    {
        //
    }
}
