<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Categories;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CategoriesController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$categories = Categories::latest()->get();
		return view('categories.index', compact('categories'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('categories.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, ['name' => 'required']); // Uncomment and modify if needed.
		Categories::create($request->all());
		return redirect('categories');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$category = Categories::findOrFail($id);
		return view('categories.show', compact('category'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$category = Categories::findOrFail($id);
		return view('categories.edit', compact('category'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if needed.
		$category = Categories::findOrFail($id);
		$category->update($request->all());
		return redirect('categories');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Categories::destroy($id);
		return redirect('categories');
	}

}
