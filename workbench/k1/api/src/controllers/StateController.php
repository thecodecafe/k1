<?php namespace K1\Api\Controllers;

	use K1\Api\Controllers;
	use K1\Data\Models\State;

	class StateController extends ApiController
	{
		public function lgas($id)
		{
			$state = State::with(array('lgas' => function($query) {
				$query->orderBy('name','asc');
			}))->find($id);

			if($state)
			{
				return \Response::json($state->lgas->toArray(), 200);
			}
			else
			{
				return \Response::json(array('status'=>"error", 'message'=>"State not found"), 404);
			}
		}
	}