<?php namespace Manager\Http\Controllers;

use AlienStream\Domain\Contracts\Repositories\ArtistRepository;
use AlienStream\Domain\Implementation\Models\Artist;
use AlienStream\Domain\Implementation\Models\User;
use Manager\Http\Requests;
use Manager\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ArtistController extends Controller {

	protected $artists;

	/**
	 * Create a new controller instance.
	 *
	 */
	public function __construct(ArtistRepository $artists)
	{
		$this->middleware('auth');
		$this->artists = $artists;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('artist.artist-listing')
			->withArtists($this->artists->all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('artist.artist-create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$input = $request->all();
		$user = User::find($input['user_id']);
		$artist = new Artist();
		$artist->name = $input['name'];
		$artist->thumbnail = $input['thumbnail'];
		$artist->favorite_count = 0;
		$artist->play_count = 0;
		$artist->user()->associate($user);
		$artist->save();
		return $artist;
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
