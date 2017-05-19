<?php namespace App\Http\Controllers;

use App\Models\Recourses;
use Carbon\Carbon;
use Illuminate\Http\UploadedFile;
use Illuminate\Routing\Controller;

class RecoursesController extends Controller {


    public function upload(UploadedFile $image)
    {

        $data =
            [
                "size" => $image->getsize(),
                "mime_type" => $image->getMimetype(),
            ];

        $path = 'upload/' . date ("Y/m/d");
        $fileName = Carbon::now()->timestamp . '-' .$image->getClientOriginalName();
        $image->move(public_path($path), $fileName);
        $data["path"] = $path . $fileName;

//        dd($data);
//

    return Recourses::create($data);

//        dd($data);
//
//        dd($image->getsize());
//        dd($image->getMimeType());

    }



	/**
	 * Display a listing of the resource.
	 * GET /recourses
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /recourses/create
	 *
	 * @return Response
	 */
	public function create()
	{

	}



	/**
	 * Store a newly created resource in storage.
	 * POST /recourses
	 *
	 * @return Response
	 */
	public function store()
	{

	}

	/**
	 * Display the specified resource.
	 * GET /recourses/{id}
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
	 * GET /recourses/{id}/edit
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
	 * PUT /recourses/{id}
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
	 * DELETE /recourses/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}