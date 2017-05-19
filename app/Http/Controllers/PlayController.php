<?php namespace App\Http\Controllers;

use App\Models\ConnUserRecourses;
use Illuminate\Routing\Controller;

class PlayController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /play
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /play/create
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('frontend.playImage');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /play
	 *
	 * @return Response
	 */
	public function store()
	{
        $resources = request()->file('image');
        $uploadController = new RecoursesController();
        $record = $uploadController->upload($resources);

        ConnUserRecourses::create([
            "user_id" => auth()->user()->id,
            "recourse_id" => $record->id,
        ]);

        dd($record);
	}

	/**
	 * Display the specified resource.
	 * GET /play/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /play/{id}/edit
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
	 * PUT /play/{id}
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
	 * DELETE /play/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}