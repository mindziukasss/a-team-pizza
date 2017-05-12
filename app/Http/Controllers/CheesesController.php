<?php namespace App\Http\Controllers;

use App\models\Cheeses;
use Illuminate\Routing\Controller;

class CheesesController extends APIbaseController {

	/**
	 * Display a listing of the resource.
	 * GET /cheeses
	 *
	 * @return Response
	 */
	public function adminIndex()
	{
        $config['list'] = Cheeses::get()->toArray();
        $config['editRoute'] = 'app.cheeses.edit';
        $config['deleteRoute'] = 'app.cheeses.destroy';
        $config['showRoute'] = 'app.cheese.show';
        $config['createSingle'] = 'app.cheeses.create';

        return view('admin.list', $config );

	}

	/**
	 * Show the form for creating a new resource.
	 * GET /cheeses/create
	 *
	 * @return Response
	 */
	public function adminCreate()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /cheeses
	 *
	 * @return Response
	 */
	public function adminStore()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /cheeses/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function adminShow($id)
	{
        $config['single'] = Cheeses::find($id)->toArray();
        $config['editRoute'] = 'app.cheeses.edit';
        $config['deleteRoute'] = 'app.cheeses.destroy';
        $config['list'] = 'app.cheeses.index';

        return view('admin.single', $config);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /cheeses/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function adminEdit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /cheeses/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function adminUpdate($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /cheeses/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function adminDestroy($id)
	{
		//
	}

}