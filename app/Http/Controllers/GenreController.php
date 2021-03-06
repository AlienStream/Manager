<?php namespace Manager\Http\Controllers;

use AlienStream\Domain\Contracts\Repositories\GenreRepository;
use Manager\Http\Requests;
use Manager\Http\Controllers\Controller;

use Illuminate\Http\Request;

class GenreController extends Controller {

	protected $genres;

	/**
	 * Create a new controller instance.
	 *
	 */
	public function __construct(GenreRepository $genres)
	{
		$this->middleware('auth');
		$this->genres = $genres;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('genre.genre-listing')
			->withGenres($this->genres->all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
