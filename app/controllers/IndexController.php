<?php
class IndexController extends BaseController {

	protected $layout = 'layout.master';

	public function index()
	{
		$this->layout->content = View::make('index');
	}

}
