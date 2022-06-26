<?php

namespace App\Http\Controllers;

use App\Models\Propiedad;
use App\Models\Address;
use App\Models\Tipo;
use Illuminate\Http\Request;

class PropiedadController extends Controller
{

    public function index()
    {
        $propiedades = Propiedad::orderBy('id','Desc')->paginate(20);
        $address = Address::orderBy('id','Desc')->paginate(20);
        $tipos = Tipo::orderBy('id','Desc')->paginate(20);
        return view('propiedad.index', compact('propiedades', 'address', 'tipos'));
    }

    public function create()
    {
        $address = Address::pluck('streetName', 'id');
        $tipos = Tipo::orderBy('id','Desc')->paginate(20);
        return view('propiedad.create', compact('address', 'tipos'));
    }

    public function store(Request $request)
    {
        //dd($request);
        $validatedData = $request->validate([
            'name'           => 'required',
            'description'    => 'required',
            'price'          => 'required',
            'rooms'          => 'required',
            'beds'           => 'required',
            'baths'          => 'required',
          ]);
          $propiedad = new Propiedad();
          
          if($request->hasFile('img1')){
              $file = $request->file('img1');
              $destinationPath = 'images/propiedad/';
              $filename = time();
              $uploadimage = $request->file('img1')->move($destinationPath, $filename);
              $propiedad->img1 = $destinationPath . $filename;
          }

          $propiedad->name = $request->name;
          $propiedad->description = $request->description;
          $propiedad->price = $request->price;
          $propiedad->rooms = $request->rooms;
          $propiedad->beds = $request->beds;
          $propiedad->baths = $request->baths;
  
          $propiedad->save();
          
          $propiedad->address()->sync($request->input('address', []));
          $propiedad->tipos()->sync($request->input('tipos', []));    

          return redirect()->route('propiedad.index')->with('status_success','Propiedad agregada');
    }

    public function show(Propiedad $propiedad)
    {
        return view('propiedad.show', compact('propiedad'));
    }

    public function edit(Propiedad $propiedad)
    {   
        $address = Address::pluck('streetName', 'id');
        $tipos = Tipo::pluck('name', 'id');

        $propiedad->load('address','tipos');
        return view('propiedad.edit', compact('propiedad', 'address', 'tipos'));
    }

    public function update(Request $request, Propiedad $propiedad)
    {
        $validatedData = $request->validate([
            'name'      => 'required',
            'description'    => 'required',
            'price'    => 'required',
            'rooms'     => 'required',
            'beds'    => 'required',
            'baths'    => 'required',
            'tipos' => 'required',
          ]);

          if($request->hasFile('img1')){
            $file = $request->file('img1');
            $destinationPath = 'images/propiedad/';
            $filename = time();
            $uploadimage = $request->file('img1')->move($destinationPath, $filename);
            $propiedad->img1 = $destinationPath . $filename;
        }

          $propiedad->name = $request->name;
          $propiedad->description = $request->description;
          $propiedad->price = $request->price;
          $propiedad->rooms = $request->rooms;
          $propiedad->beds = $request->beds;
          $propiedad->baths = $request->baths;

          $propiedad->update();
          $propiedad->address()->sync($request->input('address', []));
          $propiedad->tipos()->sync($request->input('tipos', [])); 
          
          return redirect()->route('propiedad.index')->with('status_success','Propiedad actualizada correctamente');
    }

    public function destroy(Propiedad $propiedad)
    {
        $propiedad->delete();

       return redirect()->route('propiedad.index')->with('status_success','Propiedad eliminada!');
    }
}
