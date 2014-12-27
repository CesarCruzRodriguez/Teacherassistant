<?php

class ProfesorController extends BaseController {


	protected $layout = 'layout.master';
	/**
	 * Display a listing of the resource.
	 * GET /profesors
	 *
	 * @return Response
	 */
	public function index()
	{
		$profesores = Profesor::all();
		return $this->layout->content = View::make('profesor/index', compact('profesores'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /profesors/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return $this->layout->content = View::make('profesor/create');
	}

		public function store()
	{

/*
		$datos = Input::all();

		Profesor::create($datos);*/
		$datos = Input::all();

		$profesor = new Profesor;

		 if ($profesor->isValid($datos)){
		 	
		 	//$prof = Profesor::create($datos);

		 	$profesor->nombre = Input::get('nombre');  //no funciona
		 	$profesor->email  = Input::get('email');

            return Redirect::route('profesor.show')->with('id', $profesor->id);
		 }
		  else
        {
            
		return Redirect::route('profesor.create')->withInput()->withErrors($profesor->errors);
        }
		


	}

	public function show($id)
	{
		//Profesor::select('nombre')::where('id', '=', $id)
		$profesor = Profesor::find($id);
		//Return $results->nombre;
		return $this->layout->content = View::make('profesor/show', compact('profesor'));
	}	


	/**
	 * Show the form for editing the specified resource.
	 * GET /profesors/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /profesors/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /profesors/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}