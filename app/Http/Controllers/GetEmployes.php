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
            'salaire' => 'required'
        ]);
        $Employe = new GEsmployes([
            'nom' => $request->get('nom'),
            'prenom' => $request->get('prenom'),
            'salaire' => $request->get('salaire')
        ]);
        $Employe->save();
        return redirect()->route('Employe.index')->with('success','Employe bien ajouter');
    }

    /**
     * Display the specified resource.
     */
    public function show($emp)
    {
        
        return view('Employes.show' , ['emp'  => GEsmployes::findOrFail($emp)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($emp)
    {
        return view('Employes.edit' , ['emp'  => GEsmployes::findOrFail($emp)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $emp)
    {
        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
            'salaire' => 'required'
        ]);
    
        $Employe = GEsmployes::findOrFail($emp);
        $Employe->nom = $request->get('nom');
        $Employe->prenom = $request->get('prenom');
        $Employe->salaire = $request->get('salaire');
        $Employe->save();
    
        return redirect()->route('Employe.show' , ['Employe' => $emp]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($emp)
    {
        $Employe = GEsmployes::findOrFail($emp);
        $Employe -> delete();
        return redirect()->route('Employe.index');
    }
}
