<?php

namespace App\Http\Controllers;

use App\Models\Oranges;
use Illuminate\Http\Request;

class OrangesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Oranges::all();
        return view('welcome', compact('company'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Oranges  $oranges
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Oranges::find($id);
        return view('show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Oranges  $oranges
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Oranges::find($id);
        return view('edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Oranges  $oranges
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $update = Oranges::find($id);
        $update->nom_company = $request->nom_company;
        $update->rue = $request->rue;
        $update->numero_commune = $request->numero_commune;
        $update->numero_porte = $request->numero_porte;
        $update->nom_contact = $request->nom_contact;
        $update->prenom_contact = $request->prenom_contact;
        $update->phone = $request->phone;
        $update->email = $request->email;
        $update->save();
        return redirect('/company/show/'.$update->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Oranges  $oranges
     * @return \Illuminate\Http\Response
     */
    public function destroy(Oranges $oranges)
    {
        //
    }
}
