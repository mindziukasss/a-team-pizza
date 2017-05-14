<?php

namespace App\Http\Controllers;

use App\models\Ingredients;
use PhpParser\Node\Stmt\Return_;


class IngredientsController extends APIbaseController
{

    /**
     * Display a listing of the resource.
     * GET /ingridients
     *
     * @return Response
     */
    public function adminIndex()
    {

        $config['list'] = Ingredients::get()->toArray();
        $config['editRoute'] = 'app.ingredients.edit';
        $config['deleteRoute'] = 'app.ingredients.destroy';
        $config['showRoute'] = 'app.ingredient.show';
        $config['createSingle'] = 'app.ingredients.create';

        return view('admin.list', $config);
    }

    /**
     * Show the form for creating a new resource.
     * GET /ingridients/create
     *
     * @return Response
     */
    public function adminCreate()
    {
        $config = Ingredients::get()->toArray();
        $config['createRoute'] = 'app.ingredients.create';
        return view('admin.createForm', $config);
    }

    /**
     * Store a newly created resource in storage.
     * POST /ingridients
     *
     * @return Response
     */
    public function adminStore()
    {
        $data = request()->all();
        Ingredients::create(array(
            'name' => $data['name'],
            'calories' => $data['calories']
        ));

        return redirect()->route('app.ingredients.index');
    }


    /**
     * Display the specified resource.
     * GET /ingridients/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function adminShow($id)
    {

        $config['single'] = Ingredients::find($id)->toArray();
        $config['editRoute'] = 'app.ingredients.edit';
        $config['deleteRoute'] = 'app.ingredients.destroy';
        $config['list'] = 'app.ingredients.index';

        return view('admin.single', $config);
    }

    /**
     * Show the form for editing the specified resource.
     * GET /ingridients/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function adminEdit($id)
    {
        $config['singleEdit'] = Ingredients::find($id)->toArray();
        $config['editRoute'] = route('app.ingredients.edit', $id);

        return view('admin.editForm', $config);
    }

    /**
     * Update the specified resource in storage.
     * PUT /ingridients/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function adminUpdate($id)
    {
        $config['single'] = Ingredients::find($id);
        $data = request()->all();
        $record = Ingredients::find($id);
        $record->update([
            'name' => $data['name'],
            'calories' => $data['calories']
        ]);

        return redirect()->route('app.ingredients.index');
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /ingridients/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function adminDestroy($id)
    {
        Ingredients::destroy($id);
        return redirect()->route('app.ingredients.index');
    }

}