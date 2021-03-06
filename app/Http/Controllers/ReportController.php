<?php

namespace App\Http\Controllers;

use App\User;
use App\Person;
use App\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('reports.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function pdf()
    {
        /**
         * toma en cuenta que para ver los mismos
         * datos debemos hacer la misma consulta
         **/
        $users = User::all();

        $pdf = PDF::loadView('reports.index', compact('users'));

        return $pdf->download('users.pdf');
    }

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
        //
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
        $user = User::find($id);

        $record = $user->record;

        $report = Report::where('record', $record)->get();

        foreach ($report as $r)
        {
            $r;
        }

        return view('reports.edit', compact('user','report','r'));
    }

    public function digitalId($id)
    {
        $user = User::find($id);
        $record = $user->record;
        $people = Person::where('record', $record)->get();

        foreach ($people as $person)
        {
            $person;
            //echo $p->photo;
        }
        //return $photo;

        return view('students.index', compact('user','person'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Report::updateOrCreate
        ([
            'record' => $request->record,
        ],
            [
                'name' => $request->name,
                'description' => $request->description,
            ]
        );

//        'record' => $request->input('record')
        //$report->update($request->all());


        return redirect()->route('reports.index');
//        return redirect()->route('reports.edit', $report->id)
//            ->with('info', 'Producto actualizado con exito');
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
}
