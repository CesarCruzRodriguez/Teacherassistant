<?php

class Profesor extends \Eloquent {
	
	protected $fillable = array('nombre', 'email');

	public $errors;
    
    public function isValid($data)
    {
        $rules = array(
        	'nombre' => 'required|min:4|max:40',
            'email'     => 'required|email',
        );
        
        $validator = Validator::make($data, $rules);
        
        if ($validator->passes())
        {
            return true;
        }
        
        $this->errors = $validator->errors();
        
        	return false;
    }
}