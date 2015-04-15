<?php namespace Manager\Http\Controllers;

use AlienStream\Domain\Contracts\Repositories\CommunityRepository;
use AlienStream\Domain\Implementation\Models\Community;
use AlienStream\Domain\Implementation\Models\Track;
use Manager\Http\Requests;
use Manager\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class CommunityController extends Controller {

	protected $communities;

	/**
	 * Create a new controller instance.
	 *
	 */
	public function __construct(CommunityRepository $communities)
	{
		$this->middleware('auth');
		$this->communities = $communities;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('community.community-listing')
			->withCommunities($this->communities->all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('community.community-create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$input = $request->all();
		$community = new Community();
		$community->name = $input['name'];
		$community->description = $input['description'];
		$community->favorite_count = 0;
		$community->play_count = 0;
		if ($request->hasFile('thumbnail') && $request->file('thumbnail')->isValid() && substr($request->file('thumbnail')->getMimeType(), 0, 5) == 'image') {
			$fileName = $community->name . '-' . (new \DateTime())->getTimestamp() .'.'. $request->file('thumbnail')->getClientOriginalExtension();
			$request->file('thumbnail')->move('img/uploads/', $fileName);
			$thumbnail_url = "/img/uploads/" . $fileName;
		} else {
			$thumbnail_url = "/img/uploads/default.jpg";
		}
		$community->thumbnail = $thumbnail_url;
		$community->save();
		return $community;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return view('community.community')
			->withCommunity($this->communities->find($id));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('community.community-edit')
			->withCommunity($this->communities->find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$input = $request->all();
		$community = $this->communities->find($id);
		$community->name = $input['name'];
		$community->description = $input['description'];
		if ($request->hasFile('thumbnail') && $request->file('thumbnail')->isValid() && substr($request->file('thumbnail')->getMimeType(), 0, 5) == 'image') {
			$fileName = $community->name . '-' . (new \DateTime())->getTimestamp() .'.'. $request->file('thumbnail')->getClientOriginalExtension();
			$request->file('thumbnail')->move('img/uploads/', $fileName);
			$community->thumbnail = "/img/uploads/" . $fileName;
		}
		$community->save();
		return $community;
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
