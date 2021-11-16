<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;
use App\Http\Requests\RecipeRequest;

class recipeController extends Controller
{

public function index(Recipe $recipe)
{
    return view('index');
}

public function show(Recipe $recipe)
{
    return view('show')->with(['recipe' => $recipe]);
        
}

public function recipe(Recipe $recipe)
{
    return view('recipe')->with(['recipe'=>$recipe->get()]);
}
public function create(Recipe $recipe)
{
    return view('create');
}

public function store(Recipe $recipe, Reciperequest $request)
{
    $input = $request['recipe'];
    $recipe->fill($input)->save();
    return redirect('/recipe/' . $recipe->id);
}
public function edit(Recipe $recipe)
{
    return view('edit')->with(['recipe' => $recipe]);
}
public function update(Request $request, Recipe $recipe)
{
    $input_recipe = $request['recipe'];
    $recipe->fill($input_recipe)->save();

    return redirect('/recipe/' . $recipe->id);
}
}