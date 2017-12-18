<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peliculas;

class PeliculasController extends Controller
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
        $peliculas = Peliculas::all();
        return view('peliculas.index', ['peliculas' => $peliculas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peliculas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Form::open(['route' => 'peliculas.create', 'method' => 'POST']);
        $peliculas = new Peliculas;
        $peliculas->nombre = $request->input('nombre');
        $peliculas->año = $request->input('año');
        $peliculas->imagen = $request->input('imagen');
        $peliculas->genero = $request->input('genero' );
        $peliculas->año = $request->input('año');

        if($request->hasFile('imagen')) {
        $nameImg = $request->file('imagen')->getClientOriginalName(); //Devuelve el nombre del archivo original. Se extrae de la solicitud desde la que se ha cargado el archivo.  
        $imagen = $request->imagen->storeAs('/img', $nameImg); // movemos la imagen a la carpeta img
        $peliculas->imagen = $imagen;
        }
        $peliculas->save();
        return redirect()->action('PeliculasController@index');
}
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peliculas = Peliculas::FindOrFail($id);
         return view('peliculas.show', ['peliculas' => $peliculas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peliculas = Peliculas::FindOrFail($id);
         return view('peliculas.edit', ['peliculas' => $peliculas]);
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
        self::destroy($id);
         return redirect()->action('PeliculasController@index');
    }


    public function putEdit(Request $request, $id)
    {
        $peliculas= Peliculas::findOrFail($id);
        $peliculas->nombre = $request->input('nombre');
        $peliculas->año = $request->input('año');

        if($request->hasFile('imagen')) {
        $nameImg = $request->file('imagen')->getClientOriginalName();//Devuelve el nombre del archivo original. Se extrae de la solicitud desde la que se ha cargado el archivo. 
        $imagen = $request->imagen->storeAs('/img', $nameImg); // movemos la imagen a la carpeta img
        $peliculas->imagen = $imagen;
        }
        $peliculas->genero = $request->input('genero');
        $peliculas->descripcion = $request->input('descripcion');
        $peliculas->save();

        return redirect()->action('PeliculasController@show', ['id' => $peliculas]);
}
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peliculas = Peliculas::FindOrFail($id);
        $peliculas->delete();
        return redirect()->action('PeliculasController@index');
    }
}
