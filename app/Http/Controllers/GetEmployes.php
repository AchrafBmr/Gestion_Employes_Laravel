<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GEsmployes;

class GetEmployes extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Employe = GEsmployes::all()->toArray();
        return view('Employes.liste' , ['Employe' => $Employe]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Employes.ajouter');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required'
        ]);
        $Employe = new GEsmployes([
            'nom' => $request->get('nom'),
            'prenom' => $request->get('prenom'),
            'email' => $request->get('email')
        ]);
        $Employe->save();
        return redirect()->route('Employe.index')->with('success','Employe bien ajouter');
    }

    /**
     * Display the specified resource.
     */
    public function show($emp)
    {
        $Employe = GEsmployes::all()->toArray();
        $idx = array_search($emp , array_column($Employe , 'id'));
        return view('Employes.show' , ['emp'  => $Employe[$idx]]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
