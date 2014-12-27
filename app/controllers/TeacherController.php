<?php

class TeacherController extends BaseController {

	protected $layout = 'layout.master';

	public function login()
	{
		$this->layout->content = View::make('teachers.login');
	}

	public function comprueba()
	{
		/*$teachers = New Teacher;
		$data = $teacher->all()->find(1);*/
		//$nombre = $teacher->select('nombre')->where('nombre', '=', Input::get('nombre'))->get();
		
		//$data = Input::get('nombre');

		//return 'Profesor registrado, señor ' . $data;
			
		$teacher = DB::table('teachers')->where('nombre', Input::get('nombre'))->first();
		$input = Input::get('nombre');

		 if ( $teacher) 
        {
           
            return Redirect::to('teachers/ver');
        }
        
        return Redirect::back()->with('error_message', 'Invalid data');

        //return Redirect::back()->with('data', $data);

        //$data = Teacher::all();

		
		
			//var_dump($teacher->nombre);
		

        //return 'Texto mas la variable: ' . $teacher->all()->select('nombre')->where('nombre', '=', 'Pepe');

	}

	public function ver(){

		$dato = DB::table('teachers')->get();

		//DB::table('teachers')->where('nombre', 'Pepe')->first();

		$this->layout->content = View::make('teachers.ver')->with('dato', $dato);
	}

}







