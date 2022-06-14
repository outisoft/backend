<?php

namespace App\Http\Controllers;

use App\Models\Propiedad;
use App\Models\Address;
use Illuminate\Http\Request;

class PropiedadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propiedades = Propiedad::orderBy('id','Desc')->paginate(20);
        $address = Address::orderBy('id','Desc')->paginate(20);
        return view('propiedad.index', compact('propiedades', 'address'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $address = Address::pluck('streetName', 'id');
        return view('propiedad.create', compact('address'));
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
            'name'      => 'required',
            'description'    => 'required',
            'price'    => 'required',
            'rooms'     => 'required',
            'beds'    => 'required',
            'baths'    => 'required',
            'tipo' => 'required',
          ]);
          $propiedad = new Propiedad();
          
          if($request->hasFile('img1')){
              $file = $request->file('img1');
              $destinationPath = 'images/propiedad/';
              $filename = time();
              $uploadimage = $request->file('img1')->move($destinationPath, $filename);
              $propiedad->img1 = $destinationPath . $filename;
          }

          //dd($validatedData);
  
          $propiedad->name = $request->name;
          $propiedad->description = $request->description;
          $propiedad->price = $request->price;
          $propiedad->address_id = (int)  $request->input('address_id', []);
          $propiedad->rooms = $request->rooms;
          $propiedad->beds = $request->beds;
          $propiedad->baths = $request->baths;
          $propiedad->tipo = $request->tipo;
  
          $propiedad->save();
          return redirect()->route('propiedad.index')->with('status_success','Propiedad agregada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Propiedad  $propiedad
     * @return \Illuminate\Http\Response
     */
    public function show(Propiedad $propiedad)
    {
        return view('propiedad.show', compact('propiedad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Propiedad  $propiedad
     * @return \Illuminate\Http\Response
     */
    public function edit(Propiedad $propiedad)
    {
        return view('propiedad.edit', compact('propiedad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Propiedad  $propiedad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Propiedad $propiedad)
    {
        $validatedData = $request->validate([
            'name'      => 'required',
            'description'    => 'required',
            'price'    => 'required',
            'rooms'     => 'required',
            'beds'    => 'required',
            'baths'    => 'required',
            'tipo' => 'required',
          ]);
          //dd($bautismo);
          $propiedad->update($request->all());
  
          return redirect()->route('propiedad.index')->with('status_success','Propiedad actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Propiedad  $propiedad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Propiedad $propiedad)
    {
        $propiedad->delete();

       return redirect()->route('propiedad.index')->with('status_success','Propiedad eliminada!');
    }
}
