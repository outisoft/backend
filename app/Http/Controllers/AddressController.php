<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $address = Address::orderBy('id','Desc')->paginate(20);
        return view('address.index', compact('address'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('address.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //dd($request);
         $validatedData = $request->validate([
            'streetName'      => 'required',
            'streetNumber'    => 'required',
            'neighborhood'    => 'required',
            'zipCode'     => 'required',
            'reference'    => 'required',
            'country'    => 'required',
            'state' => 'required',
            'city' => 'required',
          ]);
          $address = new Address();

          //dd($validatedData);
  
          $address->streetName = $request->streetName;
          $address->streetNumber = $request->streetNumber;
          $address->neighborhood = $request->neighborhood;
          $address->zipCode = $request->zipCode;
          $address->reference = $request->reference;
          $address->country = $request->country;
          $address->state = $request->state;
          $address->city = $request->city;
  
          $address->save();
          return redirect()->route('address.index')->with('status_success','Direccion agregada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
        return view('address.show', compact('address'));
        //return view('propiedad.show', compact('propiedad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit(Address $address)
    {
        return view('address.edit', compact('address'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Address $address)
    {
        $validatedData = $request->validate([
            'streetName'      => 'required',
            'streetNumber'    => 'required',
            'neighborhood'    => 'required',
            'zipCode'     => 'required',
            'reference'    => 'required',
            'country'    => 'required',
            'state' => 'required',
            'city' => 'required',
          ]);
          //dd($bautismo);
          $address->update($request->all());
  
          return redirect()->route('address.index')->with('status_success','Direccion actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {
        //
    }
}
